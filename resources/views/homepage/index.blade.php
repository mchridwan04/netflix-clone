@extends('homepage.app')
   <div class="bg bg-black">
      @section('content')
         @foreach ($banner_home as $banner)
               <div class="hero min-h-screen" style="background-image: url({{ $banner->image() }});">
                  <div class="hero-overlay"></div>
                  <div class="hero-content text-center text-neutral-content">
                     <div class="max-w-md">
                           <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                           <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                              exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                           <button class="btn btn-primary">Get Started</button>
                     </div>
                  </div>
               </div>
         @endforeach
         <div class="p-1">
               <h1 class="text-white p-3 text-2xl text-bold -mt-28">Action</h1>
               <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
                  @foreach ($action as $act)
                     <div class="w-full">
                           <div class="h-80 w-76 image-full">
                              <Link>
                              <img href="" src="{{ $act->image() }}" alt=""
                                 class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 shadow-black">
                              </Link>
                              <div class="card-body">
                              </div>
                           </div>
                     </div>
                  @endforeach
         </div>
         <div class="p-1">
            <h1 class="text-white p-3 text-2xl text-bold -mt-52">Romance</h1>
            <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
               @foreach ($action as $act)
                  <div class="w-full">
                        <div class="h-80 w-76 image-full">
                           <Link>
                           <img href="" src="{{ $act->image() }}" alt=""
                              class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 shadow-black">
                           </Link>
                           <div class="card-body">
                           </div>
                        </div>
                  </div>
               @endforeach
      </div>
      <div class="p-1">
         <h1 class="text-white p-3 text-2xl text-bold -mt-52">Horror</h1>
         <div class="flex  justify-center flex-col lg:flex-row lg:items-stretch ">
            @foreach ($action as $act)
               <div class="w-full">
                     <div class="h-80 w-76 image-full">
                        <Link>
                        <img href="" src="{{ $act->image() }}" alt=""
                           class="transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300 shadow-black">
                        </Link>
                        <div class="card-body">
                        </div>
                     </div>
               </div>
            @endforeach
   </div>
         @endsection

      </div>
