<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
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
					<h1 class="text-center">ASSIGNMENT</h1><hr>
				</div>
				<div class="cover-second-part">
					<ul><b>Topic:{{ $doc->document->title }}</b></ul>
					<ul><b>Course Title:{{ $doc->document->courseName }}</b></ul>
				</div>
				<div class="text-center cover-third-part">
					<h3>Submitted By</h3>
					<ul><b>Student Name: {{ $doc->user->name }}</b></ul>
					<ul><b>Student ID: {{ $doc->user->studentID }}</b></ul>
					<ul><b>{{ $doc->user->department }}</b></ul>
				</div>
				<div class="text-center cover-four-part">
					<h3>Submitted To</h3>
					<ul><b>Teacher Name: {{ $doc->document->teacherName }}</b></ul>
					<ul><b>Degisnation</b></ul>
					<ul><b>Daffodil International University</b></ul>
					<ul><b>{{$doc->user->department}}</b></ul>
				</div>
				<div class="cover-five-part">
					<em>Late Date of Submittion:{{ $doc->document->dateOfSubmit}}</em>
				</div>
			<hr>
			<div class="cover-body-main">
				<h3 class="experiment">Name of Experiment</h3>
				<p class="first-pera">{{$doc->document->title}}</p>
				<h3>Question/Problem</h3>
				<p class="second-pera">{{$doc->question}}</p>
				<h3>Answer</h3>
				<p class="third-pera">
					{{$doc->answer}}
				</p>
			
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