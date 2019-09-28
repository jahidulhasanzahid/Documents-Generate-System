<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\DocInfo;
use App\Document;
use App\DocInfoLab;
use App\DocInfoProposal;
use App\message;
use Auth;

class UserMaintainController extends Controller
{

	public function __construct()
	  {
	    $this->middleware('auth');
	  }
//user message send
    public function usermessages(Request $request){
        $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'message' => 'required',

    ],
    [
      'name.required'  => 'Please Provide a name',
      'email.required'  => 'Please Provide email',
      'subject.required'  => 'Please Provide subject',
      'message.required'  => 'Please Provide message',
    ]);

    $message = new message();
    $message->name = $request->name;
    $message->email = $request->email;
    $message->subject = $request->subject;
    $message->message = $request->message;

    
    $message->save();

    Session::flash('success', 'value');
    return redirect()->route('message');
    }

//student profile update
  public function profileUpdate(Request $request)
  {
    $user = Auth::user();

    $this->validate($request, [
      'name' => 'string|max:30',
      'phone' => 'string|max:11',
      'studentID' => 'string|max:50',
      'department' => 'string|max:100',
      'semester' => 'string|max:50',
    ]);

    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->studentID = $request->studentID;
    $user->department = $request->department;
    $user->semester = $request->semester;

    $user->save();


    Session::flash('success', 'value');
    return back();
  }

  //userpostdelete delete
    public function userDeletePostNow($id)
    {
        $user = Document::find($id);
        $user->delete();
      
      Session::flash('success', 'value');
      return back();

    }


}
