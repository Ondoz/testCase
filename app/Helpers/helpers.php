<?php

use App\Models\Categories;
use App\Models\Hobbies;
use App\Models\Skill;
use App\Models\SocmedCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

if (!function_exists('explode_name')) {
    function explode_name()
    {
        if (auth()->check() && auth()->user()->name) {
            $name = Auth::User()->name;

            $str_explo = Str::of($name)->explode(' ');
            $firstName = $str_explo[0];
            // $firstName = substr($str_explo[0], 0, 1);
            return $firstName;
        } else {
            abort(404);
        }
    }
}

if (!function_exists('simple_name')) {
    function simple_name()
    {
        if (auth()->check() && auth()->user()->name) {
            $name = Auth::User()->name;

            $name = Auth::user()->name;
            $str_simple = [];
            $str_simple = Str::of($name)->explode(' ');
            $n = count($str_simple);
            for ($i = 0; $i < $n; $i++) {
                echo strtoupper(substr($str_simple[$i], 0, 1));
            }
        } else {
            abort(404);
        }
    }
}

if (!function_exists('str_limmit')) {
    function str_limit($value)
    {
        $limit = Str::words($value, 5, '...');
        return $limit;
    }
}
