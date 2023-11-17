<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\TempTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

// https://www.itsolutionstuff.com/post/laravel-10-custom-login-and-registration-exampleexample

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
//            Log::info(Auth::createTokenDriver('session'));
            $token = $user->createToken(
                $user->name . '_' . Carbon::now(), // The name of the token
                ['*'],                         // Whatever abilities you want
                Carbon::now()->addDays(6)     // The expiration date
            )->plainTextToken;

            session()->put('token', $token);

            return redirect()->intended('admin')
                ->withSuccess('You have Successfully loggedin goto or go to admin panel</a>');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("admin")->withSuccess('Great! You have Successfully loggedin');
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function admin()
    {
        if (Auth::check()) {
            $awaitingMembers = TempTable::distinct('member_id')
                ->orWhereNull('approved_at')
                ->orWhere('approved_at', '=', '')
                ->count();
            $totalMembers = Member::count();
            $completedApprovals = $totalMembers - $awaitingMembers;
            $totalItems = TempTable::count();
            $rejectedItems = TempTable::query()
                ->whereDate('updated_at', '>=', 'created_at')
                ->count();
            $awaitingItems = $totalItems - $rejectedItems;
            return view('auth.admin', compact(
                'awaitingMembers',
                'completedApprovals',
                'awaitingItems',
                'rejectedItems',
                'totalMembers'
            ));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
