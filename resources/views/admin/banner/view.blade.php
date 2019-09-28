@extends('layouts.admin')
@section('contents')
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col-md-8">
              <i class="fa fa-gg-circle"></i> View Contact Message
          </div>
          <div class="col-md-4 text-right">
              <a href="{{url('admin/banner')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Message</a>
          </div>
      </div>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-striped view_customize_table">
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td>{{$data->ban_title}}</td>
                </tr>
                <tr>
                    <td>Subtitle</td>
                    <td>:</td>
                    <td>{{$data->ban_subtitle}}</td>
                </tr>
                <tr>
                    <td>Button</td>
                    <td>:</td>
                    <td>{{$data->ban_btn}}</td>
                </tr>
                <tr>
                    <td>Url</td>
                    <td>:</td>
                    <td>{{$data->ban_url}}</td>
                </tr>
                <tr>
                    <td>Creator</td>
                    <td>:</td>
                    <td>{{$data->creatorName->name}}</td>
                </tr>
                <tr>
                    <td>Message Time</td>
                    <td>:</td>
                    <td>{{$data->created_at->format('d M, Y | h:i:s A')}}</td>
                </tr>
                <tr>
                    <td>Banner</td>
                    <td>:</td>
                    <td><img src="{{asset('uploads/banner/'.$data->ban_photo)}}"/></td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
  </div>
  <div class="card-footer">
      .
  </div>
</div>
@endsection
