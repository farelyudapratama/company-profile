<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    //
    public function setLocale($locale)
    {
        if (in_array($locale, ['id', 'en'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return back();
    }
}