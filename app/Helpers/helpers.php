<?php

use Illuminate\Support\Facades\Auth;

/**
 * @Target this file to make function to help for all system
 * @note can call it in all system
 */
/**
 * user login
 */
function user()
{
    if (Auth::guard('web')->check()) {
        return Auth::guard('web')->user();
    }
    if (Auth::guard('patient')->check()) {
        return Auth::guard('patient')->user();
    }
    if (Auth::guard('doctor')->check()) {
        return Auth::guard('doctor')->user();
    }
}

function checkView($view)
{
    return view()->exists($view) ? $view : 'errors.500';
}

/**
 * to execution time for web
 */
function executionTime()
{
    ini_set('max_execution_time', 120000);
    ini_set('post_max_size', 120000);
    ini_set('upload_max_filesize', 100000);
}