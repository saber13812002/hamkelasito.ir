<?php
/**
 * Generate Metronic assets URL.
 *
 * @param string|null $path The path to the asset.
 * @return string
 */
if (!function_exists('metronic_assets')) {
    function metronic_assets(string $path = null): string
    {
        return asset('/asset/');
    }
}

/**
 * Get Metronic aside menu items.
 *
 * @return \Illuminate\Support\Collection
 */
if (!function_exists('metronic_aside_menu_handler')) {
    function metronic_aside_menu_handler(): \Illuminate\Support\Collection
    {
        $config = config('metronic_menu_config.aside');
        return collect($config);
    }
}
/**
 * Get Metronic navbar menu items.
 *
 * @return \Illuminate\Support\Collection
 */
if (!function_exists('metronic_nav_menu_handler')) {
    function metronic_nav_menu_handler(): \Illuminate\Support\Collection
    {
        $config = config('metronic_menu_config.top_menu');
        return collect($config);
    }
}

/**
 * Check user access for Metronic items.
 *
 * @param string $access The user access level.
 * @return bool
 */
if (!function_exists('metronic_user_access_check')) {
    function metronic_user_access_check(string $access): bool
    {
    // todo : check user access and allow to show item
        return $access;
    }
}

/**
 * Generate Metronic menu URL.
 *
 * @param string $url The URL or route name.
 * @param bool $is_system_route Whether the URL is a system route.
 * @return string
 */
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
