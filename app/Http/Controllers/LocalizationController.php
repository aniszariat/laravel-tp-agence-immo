<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function translate($lang)
    {
        if (!in_array($lang, config('localization.locales'))) {
            abort(400);
        }
        session(['locale' => $lang]);
        return redirect()->back();
    }
}
