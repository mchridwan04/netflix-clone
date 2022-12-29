@extends('homepage.app_about')
@section('content')
    {{-- <div class="flex">
    <div class="grid flex-grow card  rounded-box place-items-center">
        <img src="{{ $action->image() }}" class="max-w-sm rounded-xl shadow-2xl mr-10 " />
    </div>
    <div class="divider divider-horizontal"></div>
    <div class="grid card rounded-box place-items-center">
        <h1 class="text font-bold text-5xl text-white mr-20">Download acara TV untuk menontonnya secara offline.
        </h1>
        <h1 class="text text-2xl text-white mr-20 -mt-20">Simpan favoritmu dengan mudah agar selalu ada acara TV
            dan film yang bisa ditonton.</h1>
    </div>
    </div> --}}
    <div class="hero min-h-screen bg-black">
        <div class="flex flex-col w-full">
            <div class="grid rounded-box ">
                <div class="hero-content text-neutral-conten ">
                    <div class="grid flex-grow card  rounded-box">
                        <img src="{{ $action->image() }}" class="max-w-sm rounded-xl shadow-2xl ml-20 scale-125" />
                    </div>
                    <div class="divider divider-horizontal"></div>
                    <div class="grid card rounded-box "">
                        <h1 class="text font-bold text-6xl text-red-600 mr-96">
                            {{ $action->title }}
                        </h1>
                        <h1 class="text text-xl text-white">Actor: </h1>
                        <h2  class="text text-xl text-white">Production: </h2>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="grid card  rounded-box ">
                <h1 class="text text-white text-xl  ml-10 mr-10">{{ $action->description }}</h1>
            </div>
        </div>
        {{-- <div class="hero-content text-neutral-conten ">
            <div class="grid flex-grow card  rounded-box place-items-center">
                <img src="{{ $action->image() }}" class="max-w-sm rounded-xl shadow-2xl ml-20scale-125" />
            </div>
            <div class="divider divider-horizontal"></div>
            <div class="grid card rounded-box "">
                <h1 class="text font-bold text-6xl text-red-600 mr-20">
                    {{ $action->title }}
                </h1>
                <h1 class="text text-2xl text-white mt-10">
                    {{ $action->description }}
                </h1>
            </div>
        </div> --}}
    </div>
@endsection
