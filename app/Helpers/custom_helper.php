<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('check_login_from_admin_to_member')) {
    function check_login_from_admin_to_member(): bool
    {
        if (!auth()->check()) {
            return false;
        }
        $session = Session::get('admin_login_to_user_dashboard');
        if (!$session) {
            return false;
        }
        return $session;
    }
}
if (!function_exists('admin_to_member_id')) {
    function admin_to_member_id(): int
    {
        $session = Session::get('admin_login_to_user_dashboard');
        if ($session && !is_null($session)) {
            return $session;
        }
        return auth()->user()->id;
    }
}
