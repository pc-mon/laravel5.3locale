<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{


    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function local($locale){
        App::setLocale($locale);
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
