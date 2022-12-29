@extends('homepage.app_about')
@section('content')
    </div>
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
                        <h1 class="text text-md text-white">Actor: </h1>
                        <h2 class="text text-md text-white">Production: </h2>
                        <h2 class="text text-md text-white">Tayang In: </h2>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="grid card  rounded-box ">
                <h1 class="text text-white text-xl  ml-10 mr-10">{{ $action->description }}</h1>
            </div>
        </div>
    </div>
@endsection
