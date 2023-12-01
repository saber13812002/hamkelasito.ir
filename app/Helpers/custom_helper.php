<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('check_login_from_admin_to_member')) {
    function check_login_from_admin_to_member(): bool
    {
        if (!auth()->check()) {
            return false;
        }
        return Session::get(auth()->user()->id . '_admin_login_to_user_dashboard', false);
    }
}
