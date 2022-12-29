<x-app-layout>
   {{-- Import Header From Laravel --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Movie Action') }}
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
   <form action="{{ route('action.update', $action) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
   <div class="hero min-h-screen bg-base-200 mr-20 -mt-20">
      <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100 mr-20">
               <div class="card-body">
                  <div class="form-control">
                        <label class="label">
                           <span class="label-text">Title</span>
                        </label>
                        <input class="input input-bordered" type="text" name="title" value="{{ old('title', $action->title) }}" />
                  </div>
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Description</span>
                     </label>
                     <textarea class="textarea textarea-bordere" name="description" rows="3">{{ old('description', $action->description) }}</textarea>
                  </div>
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Image</span>
                     </label>
                     <input class="file-input file-input-bordered w-full max-w-xs" type="file" name="image" />
                  </div>
                  <button type="submit" class="btn btn-md">SAVE</button>
               </div>
            </div>
            <div class="text-center lg:text-left mr-20">
               <img src="{{ $action->image() }}" height="300px" />
            </div>
      </div>
   </div>
</form>
</x-app-layout>
