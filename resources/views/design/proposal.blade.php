<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Project Proposal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
		.page-break {
    		page-break-after: always;
		}
		.cover-body{
			margin-left: 80px;
		}
		.cover-first-part{
			margin-top: 70px;
		}
		.cover-second-part{
			margin-top: 70px;
			font-size: 18px;
		}
		.cover-third-part{
			margin-top: 120px;
			text-align: justify;
		}
		.cover-four-part{
			margin-top: 50px;
			text-align: justify;
		}
		.cover-five-part{
			margin-top: 300px;
		}
		.cover-body-main{
			margin-top: 200px;
		}
		.background{
			margin-top: 50px;
		}
		p{
			text-align: justify;
			margin-top: 5px;
		}
		.diagram-image{
			text-align: center;
		}
		@media print {
		  #printPageButton {
		    display: none;
  		}
  		#homebtn{
  			display: none;
  		}
	</style>
</head>
<body>

<body>
	<!--body-->
	<section id="first-body">
		<div class="container">
			<a id="printPageButton" onClick="window.print();" href="">Print</a> | <a href="{{url('home')}}" id="homebtn">Back</a>
			<div class="cover-body">
				<div class="text-center">
					<img src="images/DIU-Logo.png" style="height: auto; width: 400px; margin-top: 100px;">
				</div>
				<div class="cover-first-part">
					<h1 class="text-center">PROJECT PROPOSAL</h1><hr>
				</div>
				<div class="cover-second-part">
					<ul><b>Topic:{{ $proposaldoc->document->title }}</b></ul>
					<ul><b>Course Title:{{ $proposaldoc->document->courseName }}</b></ul>
				</div>
				<div class="text-center cover-third-part">
					<h3>Submitted By</h3>
					<ul><b>Student Name: {{ $proposaldoc->user->name }}</b></ul>
					<ul><b>Student ID: {{ $proposaldoc->user->studentID }}</b></ul>
					<ul><b>{{ $proposaldoc->user->department }}</b></ul>
				</div>
				<div class="text-center cover-four-part">
					<h3>Submitted To</h3>
					<ul><b>Teacher Name: {{ $proposaldoc->document->teacherName }}</b></ul>
					<ul><b>Degisnation</b></ul>
					<ul><b>Daffodil International University</b></ul>
					<ul><b>{{$proposaldoc->user->department}}</b></ul>
				</div>
				<div class="cover-five-part">
					<em>Late Date of Submittion:{{ $proposaldoc->document->dateOfSubmit}}</em>
				</div>
			<hr>
			<div class="cover-body-main">
				<h3 class="background">Background</h3>
				<p class="first-pera">{{$proposaldoc->background}}</p>
				<h3>Objective</h3>			
				<p class="second-pera">{{ $proposaldoc->objective }}</p>
				<h3>Scope</h3>
				<p class="third-pera">
					{{$proposaldoc->scope}}
				</p>
				<h3>Assumptions and Constraints</h3>
				<p class="forth-pera">{{ $proposaldoc->assumption }}</p>
				<h3>Dependence and Risks</h3>
				<p class="fiveth-pera">{{ $proposaldoc->dependence }}</p>
			</div>
			</div>
		</div>
	</section>
	<!--body-->
	<script>
	function myFunction() {
	  window.print();
	}
	</script>
	
</body>
</html>