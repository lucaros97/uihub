<?php
if (! function_exists('active')) {
    /**
     * Sets the menu item class for an active route.
     */
    function active($routes, bool $condition = true): string
    {
        return call_user_func_array([app('router'), 'is'], (array) $routes) && $condition ? ' bg-gray-200 font-semibold' : '';
    }
}