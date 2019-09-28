<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Session;
use Auth;
use App\DocInfo;
use App\DocInfoLab;
use App\DocInfoProposal;
use App\Document;
use App\User;

class DocumentController extends Controller
{
    
	//post assignment
	public function __construct(){
		$this->middleware('auth');
	}
    public function create(Request $request){
      $this->validate($request, [
      'type'  => 'required',
      'teacherName' => 'required',
      'title' => 'required',
      'courseName' => 'required',
      'dateOfSubmit' => 'required',
      'question' => 'required',
      'answer' => 'required',   
    ],
    [
      'type.required' =>'Please Provide Your Document Type',
      'teacherName.required'  => 'Please Provide a Teacher Name',
      'title.required'  => 'Please Provide Product Title',
      'course.required'  => 'Please Provide Product Course',
      'dateOfSubmit.required'  => 'Please Provide a Date of Submittion',
      'question.required'  => 'Please Provide a Question',
      'answer.required'  => 'Please Provide Answer',
    ]);
    	$user_id = Auth::user()->id;
     	$takeID = Document::insertGetId([
     	'type'  => $_POST['type'],
     	'user_id'	=> $user_id,
     	'teacherName' 	=> $_POST['teacherName'],
    	'title' 		=> $_POST['title'],
    	'courseName' 	=> $_POST['courseName'],
    	'dateOfSubmit' 	=> $_POST['dateOfSubmit'],
    	'created_at'	=> Carbon::now()->toDateTimeString(),
     ]);




      $user_id = Auth::user()->id;
    $nextAssignment = DocInfo::insertGetId([
      'user_id'     => $user_id,
    	'document_id'	=> $takeID,
    	'question'		=>$_POST['question'],
    	'answer'		=>$_POST['answer'],
    	'created_at'	=> Carbon::now()->toDateTimeString(),
    ]);
    
    if ($nextAssignment) {
    	Session::flash('success', 'value');
      $doc = DocInfo::where('document_id',$takeID)->where('user_id',Auth::user()->id)->firstOrFail();

      // $atitle = $doc->document->title;
      // $cName = $doc->document->courseName;
      // $uName = $doc->user->name;
      // $sID = $doc->user->studentID;
      // $dName = $doc->user->department;
      // $tName = $doc->document->teacherName;
      // $doS = $doc->document->dateOfSubmit;
      // $aquestion = $doc->question;
      // $aanswer = $doc->answer;

      
      // $pdf = PDF::loadView('design.assignment',compact('doc'));
      // return $pdf->download('assignment file.pdf');



    	return view('design.assignment',compact('doc'));

      
      // $pdf = PDF::loadView('design.assignment', compact('atitle','cName','uName','sID','dName','tName','doS','aquestion','aanswer'));
      // return $pdf->download('assignment.pdf');

    }

    }


//lab report 

    public function labcreate(Request $request){
      $this->validate($request, [
      'type'  => 'required',
      'teacherName' => 'required',
      'title' => 'required',
      'courseName' => 'required',
      'dateOfSubmit' => 'required',
      'apparatus' => 'required',
      'procedure' => 'required',   
    ],
    [
      'type.required' =>'Please Provide Your Document Type',
      'teacherName.required'  => 'Please Provide a Teacher Name',
      'title.required'  => 'Please Provide Product Title',
      'course.required'  => 'Please Provide Product Course',
      'dateOfSubmit.required'  => 'Please Provide a Date of Submittion',
      'apparatus.required'  => 'Please Provide a apparatus',
      'procedure.required'  => 'Please Provide procedure',
    ]);
      $u_id = Auth::user()->id;
      $t_id = Document::insertGetId([
      'type'  => $_POST['type'],
      'user_id' => $u_id,
      'teacherName'   => $_POST['teacherName'],
      'title'     => $_POST['title'],
      'courseName'  => $_POST['courseName'],
      'dateOfSubmit'  => $_POST['dateOfSubmit'],
      'created_at'  => Carbon::now()->toDateTimeString(),
     ]);




      $u_id = Auth::user()->id;
    $nextAssignment = DocInfoLab::insertGetId([
      'user_id'     => $u_id,
      'document_id' => $t_id,
      'apparatus'    =>$_POST['apparatus'],
      'procedure'    =>$_POST['procedure'],
      'created_at'  => Carbon::now()->toDateTimeString(),
    ]);
    
    if ($nextAssignment) {
      Session::flash('success', 'value');
      $labdoc = DocInfolab::where('document_id',$t_id)->where('user_id',Auth::user()->id)->firstOrFail();

      return view('design.lab',compact('labdoc'));
    }

    }


//project proposal 
    public function proposalcreate(Request $request){
      $this->validate($request, [
      'type'  => 'required',
      'teacherName' => 'required',
      'title' => 'required',
      'courseName' => 'required',
      'dateOfSubmit' => 'required',
      'background' => 'required',
      'objective' => 'required', 
      'scope' => 'required',  
      'assumption' => 'required',  
      'dependence' => 'required',   
    ],
    [
      'type.required' =>'Please Provide Your Document Type',
      'teacherName.required'  => 'Please Provide a Teacher Name',
      'title.required'  => 'Please Provide Product Title',
      'course.required'  => 'Please Provide Product Course',
      'dateOfSubmit.required'  => 'Please Provide a Date of Submittion',
      'background.required'  => 'Please Provide a Question',
      'objective.required'  => 'Please Provide Answer',
      'scope.required'  => 'Please Provide Answer',
      'assumption.required'  => 'Please Provide Answer',
      'dependence.required'  => 'Please Provide Answer',
    ]);
      $uu_id = Auth::user()->id;
      $tt_id = Document::insertGetId([
      'type'  => $_POST['type'],
      'user_id' => $uu_id,
      'teacherName'   => $_POST['teacherName'],
      'title'     => $_POST['title'],
      'courseName'  => $_POST['courseName'],
      'dateOfSubmit'  => $_POST['dateOfSubmit'],
      'created_at'  => Carbon::now()->toDateTimeString(),
     ]);




      $uu_id = Auth::user()->id;
    $nextAssignment = DocInfoProposal::insertGetId([
      'user_id'     => $uu_id,
      'document_id' => $tt_id,
      'background'    =>$_POST['background'],
      'objective'    =>$_POST['objective'],
      'scope'       =>$_POST['scope'],
      'assumption'       =>$_POST['assumption'],
      'dependence'       =>$_POST['dependence'],
      'created_at'  => Carbon::now()->toDateTimeString(),
    ]);
    
    if ($nextAssignment) {
      Session::flash('success', 'value');
      $proposaldoc = DocInfoProposal::where('document_id',$tt_id)->where('user_id',Auth::user()->id)->firstOrFail();

      return view('design.proposal',compact('proposaldoc'));
    }

    }

}
