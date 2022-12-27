@extends('dashboard.action.app')
@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
               <h2> Show Banner</h2>
         </div>
         <div class="pull-right">
               <a class="btn btn-primary" href="{{ route('action.index') }}"> Back</a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Name:</strong>
               {{ $action->title }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Details:</strong>
               {{ $action->description }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
               <strong>Image:</strong>
               <img src="{{ $action->image() }}" width="500px">
         </div>
      </div>
   </div>
@endsection