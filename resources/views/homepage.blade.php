@extends('homepage.main') 

<div class="bg-black">
      @section('BannerHome')
      <div class="hero min-h-screen" style="background-image: url(https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);">
         <div class="absolute hero-content text-neutral-content -left-1">
            <div class="max-w-md">
            <h1 class="mb-5 text-7xl font-bold text-red-600">WillDate</h1>
               <p class="mb-6 text-xl -mt-4">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
               <p class="mb-6 text-xl -mt-4">Actors: </p>
               {{-- <button class="-mb-15 btn bg-red-600 text-bold">  Watch  </button> --}}
            </div>
         </div>
      </div>
      @endsection
@foreach ($action as $act) 
   @section('action')
   <div>
      <h2 class="text-white -mt-40 p-3 text-2xl text-bold">Action</h2>
      <h1 class="text-white p-3 text-2xl text-bold">{{ $act->title }}</h1>
      <div class="flex justify-center flex-col lg:flex-row lg:items-stretch items-center gap-2 p-2">
         <div class="carousel w-full">
            <div class="h-60 w-76 image-full">
               <Link>
                  <img href="" src="{{ $act->image}}" alt="" class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 shadow-black">
               </Link>
               <div class="card-body">
               </div>
            </div>
         </div>
      </div>
   @endsection
@endforeach

   
</div>
