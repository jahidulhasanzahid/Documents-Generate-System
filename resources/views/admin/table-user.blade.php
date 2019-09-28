@extends('admin.layout.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "User Delete Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "User Not Delete.", timer:5000, icon: "warning",});
                   </script>
                 @endif
                <h4 class="card-title">Students List</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Manage</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($user as $alluser)
                                  <tr>
                                        <td>{{ $alluser->name }}</td>
                                        <td>{{ $alluser->studentID }}</td>
                                        <td>{{ $alluser->email }}</td>
                                        <td>{{ $alluser->department }}</td>
                                        <td>{{ $alluser->semester }}</td>
                                        <td>
                                            <form class="form-inline" action="{!! route('user.delete', $alluser->id) !!}" method="post">
                                            @csrf
                                            <input type="hidden" name="cart_id" />
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></button>
                                          </form>
                                        </td>
                                    </tr>
                                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
