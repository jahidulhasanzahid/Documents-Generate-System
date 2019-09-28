@extends('layouts.admin')
@section('contents')
<div class="card">

  <form action="{{url('admin/banner/submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <i class="fa fa-gg-circle"></i> Upload Banner Information
            </div>
            <div class="col-md-4 text-right">
                <a href="{{url('admin/banner')}}" class="btn btn-sm btn-info"><i class="fa fa-th"></i> All Banner</a>
            </div>
        </div>
    </div>
    <div class="card-body">
      @if(Session::has('success'))
        <script>
            swal({ title: "Success!", text: "Banner upload Success.", timer:5000, icon: "success",});
        </script>
      @endif
      @if(Session::has('error'))
       <script>
           swal({ title: "Opps!", text: "Banner upload failed.", timer:5000, icon: "warning",});
       </script>
     @endif
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Title:<span style="color:red;">*</span></label>
        <div class="col-sm-7">
          <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{old('title')}}">
          @if ($errors->has('title'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Subtitle:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="subtitle" value="{{old('subtitle')}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Button:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="btn" value="{{old('btn')}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Button URL:</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" name="url" value="{{old('url')}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label custom_label">Banner Photo:</label>
        <div class="col-sm-7">
          <input type="file" name="pic" class="form-control{{ $errors->has('pic') ? ' is-invalid' : '' }}">
          @if ($errors->has('pic'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('pic') }}</strong>
              </span>
          @endif

        </div>
      </div>
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-sm btn-info">UPLOAD</button>
    </div>
  </form>
</div>
@endsection
