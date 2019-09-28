<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Document;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function profile(){
        $user = Auth::user();
        $document = Document::where('user_id',Auth::user()->id)->get();
        return view('profile')->with('user', $user)->with('document',$document);
    }

    public function convert(){
        return view('convert');
    }

    public function message(){
        return view('contact');
    }
    
}
