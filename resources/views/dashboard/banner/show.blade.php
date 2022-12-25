@extends('dashboard.banner.app')
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
               <h2> Show Banner</h2>
         </div>
         <div class="pull-right">
               <a class="btn btn-primary" href="{{ route('banner.index') }}"> Back</a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Name:</strong>
               {{ $banner->name }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Details:</strong>
               {{ $banner->detail }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Image:</strong>
               <img src="/images/{{ $banner->image }}" width="500px">
         </div>
      </div>
   </div>
@endsection
