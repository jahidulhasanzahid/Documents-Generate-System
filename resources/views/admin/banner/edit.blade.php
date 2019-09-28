@extends('layouts.admin')
@section('contents')
<div class="card">

  <form action="{{url('admin/banner/update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <i class="fa fa-gg-circle"></i> Update Banner Information
            </div>
            <div class="col-md-4 text-right">
                <a href="{{url('admin/banner')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Banner</a>
            </div>
        </div>
    </div>
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Title:<span style="color:red;">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{$data->ban_title}}">
          @if ($errors->has('title'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
          @endif
          <input type="hidden" name="slug" value="{{$data->ban_slug}}">
          <input type="hidden" name="id" value="{{$data->ban_id}}">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Subtitle:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="subtitle" value="{{$data->ban_subtitle}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Button:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="btn" value="{{$data->ban_btn}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Button URL:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="url" value="{{$data->ban_url}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Upload Banner Photo:</label>
        <div class="col-sm-7">
          <input type="file" name="pic" class="form-control">

        </div>


      </div>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label custom_label">Banner Photo:</label>

        <div class="col-sm-7 text-center ">
          @if(!empty($data->ban_photo))
          <img  src="{{asset('uploads/banner/'.$data->ban_photo)}}" height="200" alt="image">
          @else
          <img class="img-fluid" src="{{asset('uploads/noimage.png')}}" height="200" alt="image">
          @endif

        </div>
    </div>
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-sm btn-info">Update Banner</button>
    </div>
  </form>
</div>
@endsection
