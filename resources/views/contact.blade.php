@extends('layouts.app')

@section('content')
	<!--body-->
	<section id="first-body">
		<div class="container">
			<h1 class="error">Contact With Us.</h1>
			<p class="text-center" style="margin-top: -20px;">Leave Your Message</p> <hr>
		</div>
	</section>
	<!--body-->
                @if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "Message Send Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "Message Not Send.", timer:5000, icon: "warning",});
                   </script>
                 @endif
	<section id="second-body">
		<div class="container">
			    <div class="row">

			        <!--Grid column-->
			        <div class="col-md-9 mb-md-0 mb-5">
			            <form id="contactForm" name="sentMessage" novalidate method="post" action="{{ route('user-messages') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Name Input Start -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please Write your Name." name="name">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Name Input End -->

                                <!-- Email Input Start -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please Enter your Email Address." name="email">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Email Input End -->

                                <!-- Subject Input Start -->
                                <div class="col-lg-12  col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" type="text" placeholder="Subject *" required data-validation-required-message="Please Write your Contact Subject." name="subject">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Subject Input End -->

                                <!-- Message Input Start -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please Write Your message." name="message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Message Input End -->

                                <!-- Submit Input Start -->
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="raj_btn" type="submit" name="submit">Send Now <i class="fa fa-send-o"></i></button>
                                </div>
                                <!-- Submit Input End -->
                            </div>
                        </form>
			            <div class="status"></div>
			        </div>
			        <!--Grid column-->

			        <!--Grid column-->
			        <div class="col-md-3 text-center">
			            <ul class="list-unstyled mb-0">
			                <li><i class="fas fa-map-marker-alt fa-2x"></i>
			                    <p>San Francisco, CA 94126, USA</p>
			                </li>

			                <li><i class="fas fa-phone mt-4 fa-2x"></i>
			                    <p>+ 01 234 567 89</p>
			                </li>

			                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
			                    <p>contact@mdbootstrap.com</p>
			                </li>
			            </ul>
			        </div>
			        <!--Grid column-->
			    </div>
		</div>
	</section>
@endsection