<x-app-layout>
   {{-- Import Header From Laravel --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Create Movie Action') }}
      </h2>
   </x-slot>
   @if ($errors->any())
   @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
   @endforeach
@endif
   <form action="{{ route('action.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- <div class="mb-3">
         <label>Title <span class="text-danger">*</span></label>
         <input class="input input-bordered" type="text" name="title" value="{{ old('title') }}" />
      </div>
      <div class="mb-3">
         <label>Image <span class="text-danger">*</span></label>
         <input class="form-control" type="file" name="image" />
      </div>
      <div class="mb-3">
         <label>Description</label>
         <textarea class="form-control" name="description" rows="10">{{ old('description') }}</textarea>
      </div>
      <div class="mb-3">
         <button class="btn btn-primary">Save</button>
         <a class="btn btn-danger" href="{{ route('action.index') }}">Back</a>
      </div> --}}

      <div class="hero min-h-screen bg-base-200">
         <div class="hero-content flex-col lg:flex-row-reverse">
               <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100 -mt-24">
                  <div class="card-body -mt-2">
                     <h1 class="text text-center font-bold text-xl">Create</h1>
                     <div class="form-control">
                           <label class="label">
                              <span class="label-text">Title</span>
                           </label>
                           <input class="input input-bordered" type="text" name="title" value="{{ old('title') }}" />
                     </div>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Description</span>
                        </label>
                        <textarea class="textarea textarea-bordere" name="description" rows="3">{{ old('description') }}</textarea>
                     </div>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Image</span>
                        </label>
                        <input class="file-input file-input-bordered w-full max-w-xs" type="file" name="image" />
                     </div>
                     <div class="mb-3">
                        <button class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="{{ route('action.index') }}">Back</a>
                     </div>
                  </div>
               </div>
         </div>
      </div>
</form>
</x-app-layout>
