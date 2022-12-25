@extends('homepage.app_about')
<div class="bg bg-black">
   @section('content')
   <div>
      <div class="hero bg-black">
         <div class="hero-content flex-col lg:flex-row-reverse mt-20">
               <img src="images/assets/favicon.png" class="max-w-sm rounded-lg shadow-2xl" />
               <div>
                  <h1 class="text-8xl font-bold text-red-600">Netflix</h1>
                  <p class="py-6 text-white mr-20 text-2xl">Netflix adalah layanan streaming yang menawarkan berbagai acara
                     TV pemenang penghargaan, film, anime, dokumenter, dan banyak lagi di ribuan perangkat yang terhubung
                     ke Internet.</p>
               </div>

         </div>
      </div>
      <div class="card w-96 bg-black shadow-xl ml-96 mt-5">
         <figure class="">
           <img src="images/assets/favicon.png" alt="Shoes" class="rounded-xl" width="100"/>
         </figure>
         <div class="card-body items-center text-center text-white">
            <p>Create by:</p>
           <h2 class="card-title">Mochamad Ridwan</h2>
           <p>Sistem Informasi | Universitas Muria Kudus</p>
         </div>
       </div>
   </div>

   @endsection
</div>
