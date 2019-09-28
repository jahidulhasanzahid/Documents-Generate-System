@extends('layouts.app')

@section('content')

	<!--body-->
	<section id="first-body">
		<div class="container">
			<h1 class="error">Lab Report.</h1>
			<p class="text-center" style="margin-top: -20px;">Create Your Project Proposal</p> <hr>
		</div>
	</section>
				@if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "Lab Report Create Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "Lab Report Not Create.", timer:5000, icon: "warning",});
                   </script>
                 @endif
	<!--body-->
	<section id="second-body">
		<div class="container">
				<form method="post" action="{{ route('lab-report-create') }}" enctype="multipart/form-data" >
					@csrf
				<h3>Lab Report</h3>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Document Type</label>
				  	<input type="text" name="type" class="form-control" value="Lab Report" readonly>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Teacher Name</label>
				  	<input type="text" name="teacherName" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Lab Assigment Title</label>
				  	<input type="text" name="title" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Course Name</label>
				  	<input type="text" name="courseName" class="form-control">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Date of Submit</label>
				  	<input type="date" name="dateOfSubmit" class="form-control">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Apparatus</label>
				    <input type="text" name="apparatus" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Procedure</label>
				    <textarea class="form-control" name="procedure" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
				  <button class="custom-btn primary" type="submit" name="submit" role="button">Create</button>
				</form>
	</section>
@endsection