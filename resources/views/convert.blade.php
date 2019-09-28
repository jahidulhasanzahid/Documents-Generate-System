@extends('layouts.app')

@section('content')
	<!--body-->
	<section id="first-body">
		<div class="container">
			<h1 class="error">Documentation</h1>
			<p class="text-center" style="margin-top: -20px;">Choose Your Design</p>
		</div>
	</section>
	<!--body-->
	<section id="second-body">
		<div class="container">
			<div class="row">
				<div class="card col-md-4 draw">
						<div class="card-body">
						<a href="{{url('assignment')}}"><img src="images/assignenment.jpg"></a>
					    <p class="card-title text-center">Assignment</p>
					  </div>
				</div>
				<div class="card col-md-4 draw">
						<div class="card-body">
						<a href="{{url('lab')}}"><img src="images/lab.jpg"></a>
					    <p class="card-title text-center">Lab Report</p>
					  </div>
				</div>
				<div class="card col-md-4 draw">
						<div class="card-body">
						<a href="{{url('proposal')}}"><img src="images/proposal.jpg"></a>
					    <p class="card-title text-center">Project Proposal</p>
					  </div>
				</div>
			</div>
		</div>
	</section>
@endsection