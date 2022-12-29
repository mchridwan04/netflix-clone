{{-- @extends('homepage.app') --}}
@section('content')
   @foreach ($act as $action)
      <div class="">
         <div class="">
               {{-- <div class="">
                  <h2> Show Banner</h2>
               </div>
               <div class="">
                  <a class="" href="{{ route('index') }}"> Back</a>
               </div> --}}
         </div>
      </div>
      <div class="">
         <div class="">
               <div class="">
                  <strong>Name:</strong>
                  <p>{{ $action->title }}</p>
                  
               </div>
         </div>
         <div class="">
               <div class="">
                  <strong>Details:</strong>
                  {{ $action->description }}
               </div>
         </div>
         <div class=">
   <div class="form-group">
               <strong>Image:</strong>
               <img src="{{ $action->image() }}" width="500px">
         </div>
      </div>
      </div>
   @endforeach
@endsection
