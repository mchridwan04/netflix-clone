<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite('resources/css/app.css')
   {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" /> --}}
   <title>Netflix-Homepage</title>
   <link rel = "icon" href = "/images/assets/favicon.png" type = "image/x-icon">
</head>
<body class="bg-black">
   @include('layouts.navbar')
   
   @yield('BannerHome',)
   @yield('action')
   {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</body>
</html>