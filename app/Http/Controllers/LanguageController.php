<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function change_locale($locale)
    {
        App::setLocale($locale);
        Session::put('locale',$locale);
        return redirect()->back();
    }


}
