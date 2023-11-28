<?php
if (!function_exists('metronic_assets')) {
    function metronic_assets(string $path = null): string
    {
        return asset('/asset/');
    }
}
if (!function_exists('metronic_aside_menu_handler')) {
    function metronic_aside_menu_handler()
    {
        $config = config('metronic_menu_config.aside');
        return collect($config);
    }
}
if (!function_exists('metronic_user_access_check')) {
    function metronic_user_access_check(string $access): bool
    {
        // todo : check user access and allow to show item
        return $access;
    }
}
if (!function_exists('metronic_menu_url')) {
    function metronic_menu_url($url, $is_system_route = false): string
    {
        if (is_string($url) && filter_var($url, FILTER_VALIDATE_URL)) {
            return $url;
        }
        if ($is_system_route) {
            return route($url);
        }
        return url($url) ?? $url;
    }
}
