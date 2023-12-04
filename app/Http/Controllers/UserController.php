<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * admin panel super admin
     */
    public function index()
    {
        $users = User::query()->paginate(15);
        return view('admin.user.index', compact('users'));
    }

}
