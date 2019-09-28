@extends('admin.layout.admin')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student Documents</h4>
                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-th"></i> Add Banner</a>
                    </div>
                </div>
                @if(Session::has('success'))
                    <script>
                        swal({ title: "Success!", text: "User Post Delete Success.", timer:5000, icon: "success",});
                    </script>
                  @endif
                  @if(Session::has('error'))
                   <script>
                       swal({ title: "Opps!", text: "User Post Not Delete.", timer:5000, icon: "warning",});
                   </script>
                 @endif
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Course Name</th>
                                <th>Teacher Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($doc as $docs)
                                    <tr>
                                        <td>{{ $docs->user->name }}</td>
                                        <td>{{ $docs->user->studentID }}</td>
                                        <td>{{ $docs->user->email }}</td>
                                        <td>{{ $docs->title }}</td>
                                        <td>{{ $docs->courseName }}</td>
                                        <td>{{ $docs->teacherName }}</td>
                                        <td>
                                           <form class="form-inline" action="{!! route('user.post.delete', $docs->id) !!}" method="post">
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
