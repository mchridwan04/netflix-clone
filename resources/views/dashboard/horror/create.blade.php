<x-app-layout>
   {{-- Import Header From Laravel --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Create Movie Action') }}
      </h2>
   </x-slot>
   @if ($errors->any())
      <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
         <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
         </ul>
      </div>
   @endif
   <form action="{{ route('horror.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="hero min-h-screen bg-base-200">
         <div class="hero-content flex-col lg:flex-row-reverse">
               <div class="card flex-shrink-1 w-full max-w-sm shadow-2xl bg-base-100 -mt-20" >
                  <div class="card-body ">
                     <div class="form-control">
                           <label class="label">
                              <span class="label-text">Title</span>
                           </label>
                           <input type="text" name="name" class="form-control" placeholder="Name">
                     </div>
                     <div class="form-control">
                           <label class="label">
                              <span class="label-text">Description</span>
                           </label>
                           <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                     </div>
                     <div class="form-control">
                           <label class="label">
                              <span class="label-text">Image</span>
                           </label>
                           <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs"
                              placeholder="image">
                     </div>
                     <div class="mb-3">
                           <button class="btn btn-primary">Save</button>
                           <a class="btn btn-danger" href="{{ route('horror.index') }}">Back</a>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </form>
</x-app-layout>