<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Auth;
use App\DocInfo;
use App\DocInfoLab;
use App\DocInfoProposal;
use App\Document;
use App\User;

class DocumentEditController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function assignmentEdit($id,$data){
    	$document = Document::where('id',$id)->firstOrFail();
    	
    	
    	if ($data == 'Assignment') {
    		$assignment	= DocInfo::where('document_id',$id)->firstOrFail();
    		return view('edit.assignment')->with('document',$document)->with('assignment',$assignment);
    	}
    	else if ($data == 'Lab Report') {
    		$labreport	= DocInfoLab::where('document_id',$id)->firstOrFail();
    		return view('edit.lab')->with('document',$document)->with('labreport',$labreport);
    	}
    	else if($data == 'Project Proposal'){
    		$projectproposal	= DocInfoProposal::where('document_id',$id)->firstOrFail();
    		return view('edit.proposal')->with('document',$document)->with('projectproposal',$projectproposal);
    	}
    	else{
    		echo "Something Wrong";
    	}
    }



    public function update(Request $request){
      $this->validate($request, [
      'teacherName' => 'required',
      'title' => 'required',
      'courseName' => 'required',
      'dateOfSubmit' => 'required',
      'question' => 'required',
      'answer' => 'required',   
    ],
    [
      'teacherName.required'  => 'Please Provide a Teacher Name',
      'title.required'  => 'Please Provide Product Title',
      'course.required'  => 'Please Provide Product Course',
      'dateOfSubmit.required'  => 'Please Provide a Date of Submittion',
      'question.required'  => 'Please Provide a Question',
      'answer.required'  => 'Please Provide Answer',
    ]);

      $docid = $_POST['id'];
     	$takeID = Document::where('id',$docid)->update([
     	'teacherName' 	=> $_POST['teacherName'],
    	'title' 		=> $_POST['title'],
    	'courseName' 	=> $_POST['courseName'],
    	'dateOfSubmit' 	=> $_POST['dateOfSubmit'],
    	'created_at'	=> Carbon::now()->toDateTimeString(),
     ]);




      $nextAssignment = DocInfo::where('document_id',$docid)->update([
    	'question'		=>$_POST['question'],
    	'answer'		=>$_POST['answer'],
    	'created_at'	=> Carbon::now()->toDateTimeString(),
    ]);
    
  
    	Session::flash('success', 'value');
      $doc = DocInfo::where('document_id',$docid)->where('user_id',Auth::user()->id)->firstOrFail();

      return view('design.assignment',compact('doc'));
    }


    //lab report 

    public function labupdate(Request $request){
      $this->validate($request, [
      'teacherName' => 'required',
      'title' => 'required',
      'courseName' => 'required',
      'dateOfSubmit' => 'required',
      'apparatus' => 'required',
      'procedure' => 'required',   
    ],
    [
      'teacherName.required'  => 'Please Provide a Teacher Name',
      'title.required'  => 'Please Provide Product Title',
      'course.required'  => 'Please Provide Product Course',
      'dateOfSubmit.required'  => 'Please Provide a Date of Submittion',
      'apparatus.required'  => 'Please Provide a apparatus',
      'procedure.required'  => 'Please Provide procedure',
    ]);
      $docid = $_POST['id'];
      $t_id = Document::where('id',$docid)->update([
      'teacherName'   => $_POST['teacherName'],
      'title'     => $_POST['title'],
      'courseName'  => $_POST['courseName'],
      'dateOfSubmit'  => $_POST['dateOfSubmit'],
      'created_at'  => Carbon::now()->toDateTimeString(),
     ]);




    $nextAssignment = DocInfoLab::where('document_id',$docid)->update([
      'apparatus'    =>$_POST['apparatus'],
      'procedure'    =>$_POST['procedure'],
      'created_at'  => Carbon::now()->toDateTimeString(),
    ]);
    
    if ($nextAssignment) {
      Session::flash('success', 'value');
      $labdoc = DocInfolab::where('document_id',$docid)->where('user_id',Auth::user()->id)->firstOrFail();

      return view('design.lab',compact('labdoc'));
    }

    }



    //project proposal 
    public function proposalupdate(Request $request){
      $this->validate($request, [
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
      $docid = $_POST['id'];
      $tt_id = Document::where('id',$docid)->update([
      'teacherName'   => $_POST['teacherName'],
      'title'     => $_POST['title'],
      'courseName'  => $_POST['courseName'],
      'dateOfSubmit'  => $_POST['dateOfSubmit'],
      'created_at'  => Carbon::now()->toDateTimeString(),
     ]);




      $uu_id = Auth::user()->id;
    $nextAssignment = DocInfoProposal::where('document_id',$docid)->update([
      'background'    =>$_POST['background'],
      'objective'    =>$_POST['objective'],
      'scope'       =>$_POST['scope'],
      'assumption'       =>$_POST['assumption'],
      'dependence'       =>$_POST['dependence'],
      'created_at'  => Carbon::now()->toDateTimeString(),
    ]);
    
    if ($nextAssignment) {
      Session::flash('success', 'value');
      $proposaldoc = DocInfoProposal::where('document_id',$docid)->where('user_id',Auth::user()->id)->firstOrFail();

      return view('design.proposal',compact('proposaldoc'));
    }

    }



}
