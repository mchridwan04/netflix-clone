@extends('homepage.app_about')
<div class="bg bg-black">
    @section('content')
        {{-- Slide 1 --}}
        <div class="hero min-h-screen" style="background-image: url(images/assets/back.png);">
            <div class="hero"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">
                        <div class="scale-110 mr-52 ml-10">
                            <div class="scale-150 -mt-30">
                                <iframe src="https://embed.lottiefiles.com/animation/50097" class="scale-150"></iframe>
                            </div>
                        </div>
                    </h1>
                    <p class="mb-5 text-5xl -mr-24 -ml-24 font-bold">Film, acara TV tak terbatas, dan lebih banyak lagi.</p>
                    <p class="mb-5 text-2xl -mr-24 -ml-24">Tonton di mana pun. Batalkan kapan pun.</p>
                    <p class="mb-5 text-md -mr-24 -ml-24">Siap menonton? Masukkan email untuk membuat atau memulai lagi
                        keanggotaanmu.</p>
                </div>
            </div>
        </div>
        {{-- Slide 2 --}}
        <div class="flex w-full mt-12 ">
            <div class="grid flex-grow card  rounded-box place-items-center">
                <img src="images/assets/mobile.jpg" class="max-w-sm rounded-xl shadow-2xl mr-10 scale-125" />
            </div>
            <div class="divider divider-horizontal"></div>
            <div class="grid card rounded-box place-items-center">
                <h1 class="text font-bold text-5xl text-white mr-20">Download acara TV untuk menontonnya secara offline.
                </h1>
                <h1 class="text text-2xl text-white mr-20 -mt-20">Simpan favoritmu dengan mudah agar selalu ada acara TV
                    dan film yang bisa ditonton.</h1>
            </div>
        </div>
        <div class="flex w-full mt-20 ">
            <div class="grid flex-grow card  rounded-box place-items-center">
                <h1 class="text font-bold text-5xl text-white -ml-20">Buat profil untuk anak.</h1>
                <h1 class="text text-2xl text-white ml-20 -mt-20">Kirim anak-anak untuk bertualang bersama karakter
                    favorit mereka di dunia yang dibuat khusus untuk mereka—gratis dengan keanggotaanmu.</h1>
            </div>
            <div class="divider divider-horizontal"></div>
            <div class="grid card rounded-box place-items-center">
                <img src="images/assets/anak.png" class="max-w-sm rounded-xl shadow-2xl mr-20 scale-125" />
            </div>
        </div>
        {{-- Slide 3 --}}
        <div class="card shadow-xl mt-20">
            <figure class="mt-10">
                <img src="images/assets/avatar.png" alt="Shoes" class="rounded-full" width="100" />
            </figure>
            <div class="card-body items-center text-center text-white">
                <p>Create by:</p>
                <h2 class="card-title">Mochamad Ridwan</h2>
                <p>Sistem Informasi | Universitas Muria Kudus</p>
                <p class="-mt-5">______________________________________________</p>
            </div>
        </div>
    </div>
@endsection
</div>
