@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row m-y-2">
    	<div class="col-lg-4 pull-lg-8 text-xs-center">
            <img src="images/img_parallax.jpg" class="rounded mx-auto d-block" alt="avatar">
            <h6 class="m-t-2">{{ $user->name }}</h6>
        </div>
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Documents</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="m-y-2">{{ $user->name }}'s User Profile</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Student of Daffodil International University <br>
                                {{$user->department}}
                            </p>
                            <h6><b>Email:</b> {{$user->email}}</h6>
                            <h6><b>Phone:</b> {{$user->phone}}</h6>
                            <h6><b>Semester:</b> {{$user->semester}}</h6>
                        </div>
                        <div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <h4 class="m-y-2">Your Documents &amp; Files</h4>
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">Document Type</th>
                                <th scope="col">Document Title</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($document as $doc)                                   
                            <tr>
                                <td>{{ $doc->type }}</td>
                                <td>{{ $doc->title }}</td>
                                <td>{{ $doc->courseName }}</td>
                                <td>
                                    <a href="{{url('assignment/edit/'.$doc->id.'/'.$doc->type)}}"><i class="fa fa-pencil-square fa-lg"></i></a>


                                        <form class="form-inline" action="{!! route('user.document.delete', $doc->id) !!}" method="post">
                                            @csrf
                                            <input type="hidden" name="cart_id" />
                                            <button><i class="fa fa-trash fa-lg"></i></button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                @if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "Your Profile Update Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "Your Profile Not Update.", timer:5000, icon: "warning",});
                   </script>
                 @endif
                <div class="tab-pane" id="edit">
                    <h4 class="m-y-2">Update Profile</h4>
                    <form method="POST" action="{{ route('student.profile.update') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Student Name</label>
                            <div class="col-lg-9">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required readonly="">

                                @if ($errors->has('email'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                            <div class="col-lg-9">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" required autofocus>

                                @if ($errors->has('phone'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Student ID</label>
                            <div class="col-lg-9">
                                <input id="studentID" type="text" class="form-control{{ $errors->has('studentID') ? ' is-invalid' : '' }}" name="studentID" value="{{ $user->studentID }}" required autofocus>

                                @if ($errors->has('studentID'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('studentID') }}</strong>
                                  </span>
                                @endif

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Department</label>
                            <div class="col-lg-9">
                                <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" type="text" required autofocus autocomplete="department">
                                    <option value="{{ $user->department }}">{{ $user->department }}</option>
                                    <option value="DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING">DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING</option>
                                    <option value="DEPARTMENT OF SOFTWARE ENGINEERING">DEPARTMENT OF SOFTWARE ENGINEERING</option>
                                    <option value="DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY">DEPARTMENT OF MULTIMEDIA & CREATIVE TECHNOLOGY</option>
                                </select>

                                @if ($errors->has('department'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('department') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Semester</label>
                            <div class="col-lg-9">

                                <input id="semester" type="text" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" value="{{ $user->semester }}" required autofocus>

                                @if ($errors->has('semester'))
                                  <span class="invalid-feedback">
                                    <strong>{{ $errors->first('semester') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-info" value="Refresh">
                                <button type="submit" class="btn btn-success">
                                  Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection