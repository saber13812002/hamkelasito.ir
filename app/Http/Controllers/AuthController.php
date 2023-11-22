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
            'email' => 'required|email',
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
            $memberAwaitItems = Member::whereIn('id', $array)->get();
//            dd($memberAwaitItems);
            $awaitingMembers = $memberAwaitBuilder
                ->count();
            $totalMembers = Member::count();
            $completedApprovals = $totalMembers - $awaitingMembers;
            $totalItems = TempTable::count();
            $rejectedItems = TempTable::query()
                ->whereDate('updated_at', '>=', 'created_at')
                ->count();
            $awaitingItems = $totalItems - $rejectedItems;
            return view('auth.admin', compact(
                'memberAwaitItems',
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
        // Retrieve the entered email and password
        $email = $data['email'];
        $password = $data['password'];

        $user = User::where('email', $email)->first();
//        dd($user);
        if ($user) {
            // User already exists, compare passwords
            if (Hash::check($password, $user->password)) {
                // Passwords match, log in the user
                Auth::login($user);

                // Redirect the user to the desired page
                return redirect('/dashboard');
            } else {
                // Passwords don't match, display an error message
                return back()->withErrors(['password' => 'Incorrect password']);
            }
        } else {
            // User doesn't exist, proceed with registration logic
            // ...
            return User::create([
                'name' => $data['name'],
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
