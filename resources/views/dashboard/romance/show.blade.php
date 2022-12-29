@extends('homepage.app_about')
@section('content')
   </div>
   <div class="hero min-h-screen bg-black">
      <div class="flex flex-col w-full">
         <div class="grid rounded-box ">
               <div class="hero-content text-neutral-conten ">
                  <div class="grid flex-grow card  rounded-box">
                     <img src="/images/{{ $romance->image }}" class="max-w-sm rounded-xl shadow-2xl ml-20 scale-125" />
                  </div>
                  <div class="divider divider-horizontal"></div>
                  <div class="grid card rounded-box "">
                     <h1 class="text font-bold text-6xl text-red-600 mr-96">
                           {{ $romance->name }}
                     </h1>
                     <h1 class="text text-xl text-white">Actor: </h1>
                     <h2 class="text text-xl text-white">Production: </h2>
                  </div>
               </div>
         </div>
         <div class="divider"></div>
         <div class="grid card  rounded-box ">
               <h1 class="text text-white text-xl  ml-10 mr-10">{{ $romance->detail }}</h1>
         </div>
      </div>
   </div>
@endsection
