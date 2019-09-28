<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
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

   	public function proposal(){
   		return view('proposal');
   	}

   	public function lab(){
   		return view('lab');
   	}

   	public function assignment(){
   		return view('assignment');
   	}
}
