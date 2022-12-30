@extends('homepage.app')
<div class="bg bg-black">
   @section('content')
      @foreach ($banner as $ban)
         <div class="hero min-h-screen" style="background-image: url(images/{{ $ban->image }});">
               <div class="hero-content text-neutral-content -ml-80 -mt-20">
                  <div class="max-w-md -ml-96">
                     <h1 class="mb-5 text-7xl font-bold text-red-600 -ml-10">{{ $ban->name }} </h1>
                     <p class="text-xl mb-5 -ml-10 drop-shadow-2xl">{{ $ban->detail }}</p>
                  </div>
               </div>
         </div>
      @endforeach
      <div class="p-1">
         <h1 class="text-white p-3 text-2xl text-bold -mt-28">Action</h1>
         <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
               @foreach ($action as $act)
                  <div class="w-full" >
                     <div class="h-80 w-76 image-full" href="">
                           <a href="{{ route('action.show', $act->id) }}">
                              <img src="{{ $act->image() }}" alt="{{ $act->title }}" width="205" height="120"
                                 class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-125 duration-300 shadow-black">
                           </a>
                     </div>
                  </div>
               @endforeach
         </div>
         <div class="p-1">
               <h1 class="text-white p-3 text-2xl text-bold -mt-48">Romance</h1>
               <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
                  @foreach ($romance as $rom)
                     <div class="w-full">
                           <div class="h-80 w-76 image-full">
                              <a href="{{ route('romance.show', $rom->id) }}">
                                 <img src="images/{{ $rom->image }}" alt="" width="205" height="120"
                                       class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-125 duration-300 shadow-black">
                              </a>
                              <div class="card-body">
                              </div>
                           </div>
                     </div>
                  @endforeach
               </div>
               <div class="p-1">
                  <h1 class="text-white p-3 text-2xl text-bold -mt-52">Horror</h1>
                  <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
                     @foreach ($horror as $hor)
                           <div class="w-full">
                              <div class="h-80 w-76 image-full">
                                 <a href="{{ route('horror.show', $hor->id) }}">
                                       <img href="" src="images/{{ $hor->image }}" alt="" width="205" height="120"
                                          class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-125 duration-300 shadow-black">
                                 </a>
                                 <div class="card-body">
                                 </div>
                              </div>
                           </div>
                     @endforeach
                  </div>
               @endsection

         </div>
