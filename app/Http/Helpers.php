<?php

namespace App\Http;

use Illuminate\Support\Facades\App;

class Helpers
{
    public static function currency($value){
        return '$' . number_format($value,2);
    }

    public static function isAdmin(){
        if (auth()->guest()){
            return false;
        }
        if (request()->user()->hasRole('admin')){
            return true;
        }
        return false;
    }

    public static function showTrackingScripts(){
        if (config('app.env') != 'production') {
            return false;
        }
        if (self::isAdmin()) {
            return false;
        }
        return true;
    }
}
