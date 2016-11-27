<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{


    public function index()
    {
        $lang =  session('locale');
        return view('welcome',compact('lang'));
    }

    public function about()
    {
        return view('about');
    }

    public function local($locale,Request $request){
        App::setLocale($locale);
        $request->session()->put('locale' , $locale);
        return redirect()->back();
    }
}
