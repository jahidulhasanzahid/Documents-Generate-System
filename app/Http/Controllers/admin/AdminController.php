<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\message;
use App\User;
use App\DocInfo;
use App\Document;
use Session;
use App\AdminLogin;
use Auth;

class AdminController extends Controller
{


    public function __construct()
      {
        $this->middleware('auth:admin');
      }


    public function index(){
        
    	return view('admin.index');
    }

    public function userPost(){
        $doc    = Document::orderBy('id','desc')->get();
    	return view('admin.table-user-post',compact('doc'));
    }

    public function user(){
    	$user = User::orderBy('created_at', 'desc')->get();
    	return view('admin.table-user',compact('user'));
    }

    public function contact(){
        $allmessage = message::orderBy('created_at','desc')->get();
    	return view('admin.contact',compact('allmessage'));
    }


    //user delete
    public function userdelete($id)
    {
        $user = User::find($id);
        $user->delete();
      
      Session::flash('success', 'value');
      return back();

    }
    
    //userpostdelete delete
    public function userpostdelete($id)
    {
        $user = Document::find($id);
        $user->delete();
      
      Session::flash('success', 'value');
      return back();

    }

}
