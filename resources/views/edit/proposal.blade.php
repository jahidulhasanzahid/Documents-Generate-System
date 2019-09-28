@extends('layouts.app')

@section('content')
<!--body-->
	<section id="first-body">
		<div class="container">
			<h1 class="error">Project Proposal.</h1>
			<p class="text-center" style="margin-top: -20px;">Create Your Project Proposal</p> <hr>
		</div>
	</section>
				@if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "Project Proposal Create Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "Project Proposal Not Create.", timer:5000, icon: "warning",});
                   </script>
                 @endif
	<!--body-->
	<section id="second-body">
		<div class="container">
				<form method="post" action="{{ route('project-proposal-update') }}" enctype="multipart/form-data" >
					@csrf
				<h3>Project Proposal</h3>
				<input type="hidden" name="id" class="form-control" value="{{$document->id}}" readonly>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Document Type</label>
				  	<input type="text" name="type" class="form-control" value="Project Proposal" readonly>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Teacher Name</label>
				  	<input type="text" name="teacherName" class="form-control" value="{{ $document->teacherName }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Project Title</label>
				  	<input type="text" name="title" class="form-control" value="{{ $document->title }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Course Name</label>
				  	<input type="text" name="courseName" class="form-control" value="{{ $document->courseName }}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Date of Submit</label>
				  	<input type="date" name="dateOfSubmit" class="form-control" value="{{ $document->dateOfSubmit }}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Background</label>
				    <input type="text" name="background" class="form-control" value="{{ $projectproposal->background }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Objective</label>
				    <input type="text" name="objective" class="form-control" value="{{ $projectproposal->objective }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Scope</label>
				    <input type="text" name="scope" class="form-control" value="{{ $projectproposal->scope }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Assumption and Constraits</label>
				    <input type="text" name="assumption" class="form-control" value="{{ $projectproposal->assumption }}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Dependence and Risk</label>
				    <input type="text" name="dependence" class="form-control" value="{{ $projectproposal->dependence }}">
				  </div>
				  <button class="custom-btn primary" type="submit" name="submit" role="button">Create</button>
				</form>
	</section>
@endsection