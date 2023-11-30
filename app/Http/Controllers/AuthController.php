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
//        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard-models")->withSuccess('Great! You have Successfully logged in');
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
            $memberAwaitBuilder = TempTable::distinct('member_id')
                ->orWhereNull('approved_at')
                ->orWhere('approved_at', '=', '');
            $array = TempTable::query()->distinct()->pluck('member_id')->toArray();
//            $memberAwaitItems = Member::whereIn('id', $memberAwaitBuilder->get())->get();
            $memberAwaitItems = Member::query()->limit(10)->get();
//            dd($array,$memberAwaitItems,$memberAwaitBuilder);
            $awaitingMembersCount = $memberAwaitBuilder
                ->count();
            $totalMembersCount = Member::published()->count();
            $completedApprovalsCount = $totalMembersCount - $awaitingMembersCount;
            $totalItemsCount = TempTable::count();
            $rejectedItemsCount = TempTable::query()
                ->whereDate('updated_at', '>=', 'created_at')
                ->count();

            // todo : this value just for demo and test chart item
            $totalItemsCount = 43;
            $rejectedItemsCount = 32;


            $awaitingItemsCount = $totalItemsCount - $rejectedItemsCount;
            return view('auth.admin', compact(
                'memberAwaitItems',
                'awaitingMembersCount',
                'completedApprovalsCount',
                'awaitingItemsCount',
                'rejectedItemsCount',
                'totalMembersCount'
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
