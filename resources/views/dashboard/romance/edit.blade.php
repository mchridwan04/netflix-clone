<x-app-layout>
   {{-- Import Header From Laravel --}}
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard - Movie Romance') }}
      </h2>
   </x-slot>
   {{-- Section Content --}}
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
   <form action="{{ route('romance.update', $romance->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
         <div class="hero min-h-screen bg-base-200 -mt-20">
      <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
               <div class="card-body">
                  <div class="form-control">
                        <label class="label">
                           <span class="label-text">Title</span>
                        </label>
                        <input type="text" name="name" value="{{ $romance->name }}"
                           class="input input-bordered" placeholder="Title ...">
                  </div>
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Description</span>
                     </label>
                     <textarea class="textarea textarea-bordere" style="height:150px" name="detail" placeholder="Detail" rows="3">{{ $romance->detail }}</textarea>
                  </div>
                  <div class="form-control">
                     <label class="label">
                        <span class="label-text">Image</span>
                     </label>
                  <input type="file" name="image" class="file-input file-input-bordered w-full max-w-xs" placeholder="image">
                  </div>
                  <button type="submit" class="btn btn-md">SAVE</button>
               </div>
            </div>
            <div class="text-center lg:text-left ">
               <img src="/images/{{ $romance->image }}" width="700px">
            </div>
      </div>
   </div>
   </form>
</x-app-layout>
