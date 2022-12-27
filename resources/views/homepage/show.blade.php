{{-- @extends('homepage.app') --}}
@section('content')
   <div class="">
      <div class="">
         <div class="">
               <h2> Show Banner</h2>
         </div>
         <div class="">
               <a class="" href="{{ route('index') }}"> Back</a>
         </div>
      </div>
   </div>
   <div class="">
      <div class="">
         <div class="">
               <strong>Name:</strong>
               {{ $act->title }}
         </div>
      </div>
      <div class="">
         <div class="">
               <strong>Details:</strong>
               {{ $act->description }}
         </div>
      </div>
      <div class=">
         <div class="form-group">
               <strong>Image:</strong>
               <img src="{{ $act->image() }}" width="500px">
         </div>
      </div>
   </div>
@endsection