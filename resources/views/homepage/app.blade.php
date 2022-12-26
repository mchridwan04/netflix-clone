<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite('resources/css/app.css')
   {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" /> --}}
   <title>Netflix Universitas Muria Kudus</title>
   <link rel="icon" href="images/assets/favicon.png" type="image/x-icon">
</head>

<body>
   <div class="bg bg-black">
      @include('layouts.navbar')
   </div>
   <div class="bg bg-black">
      @yield('content')
   </div>
   <div class="text text-white -mt-20">
      <h1 class="text text-4xl text-bold text-center">Tanya Jawab Umum</h1>
      @include('layouts.collape')
   </div>
   @include('layouts.footer')
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>
