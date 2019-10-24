@extends('layouts.app')
@section('content')

    {{-- Deals/Alerts banner --}}
    <div class="mb-4 flex bg-background-secondary">
        <div class="w-screen
        h-third md:h-quarter bg-left-top lg:bg-left flex justify-center" >
                <div class="w-full h-full lg:w-3/4 text-copy-secondary flex content-center flex-wrap px-12 sm:px-6">
                    <div class="w-full">
                        <h1 class="banner-header-text pb-3 text-bold">Deals/Alerts</h1>
                    </div>
                    <div class="w-full">
                        <h3 class="text-xl sm:text-2xl md:text-2xl pb-3">Unlock the secrets of our signature sounds</h3>
                    </div>
                </div>
            </div>
    </div>

    <div class="w-full py-6 flex content-center pb-6">
        <div class="w-full h-full text-copy-primary flex-wrap px-12 sm:px-6 justify-center ">
            {{-- <div class="w-full flex justify-around pb-2">
                <h1>Our Picks</h1>
                <a href="{{ route('catalog.index') }}">
                    <h1>View All...</h1>
                </a>
            </div> --}}
            <div class="w-full flex justify-around pb-2">
                <h1 class="text-xl sm:text-2xl md:text-2xl pb-3">Drum Bundles</h1>
            </div>
            <div class="w-full flex flex-wrap justify-center">
                <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
            </div>
        </div>
    </div>

    @include('partials.dots')

    <div class="w-full py-6 flex content-center pb-6">
            <div class="w-full h-full text-copy-primary flex-wrap px-12 sm:px-6 justify-center ">
                {{-- <div class="w-full flex justify-around pb-2">
                    <h1>Our Picks</h1>
                    <a href="{{ route('catalog.index') }}">
                        <h1>View All...</h1>
                    </a>
                </div> --}}
                <div class="w-full flex justify-around pb-2">
                    <h1 class="text-xl sm:text-2xl md:text-2xl pb-3">Collections</h1>
                </div>
                <div class="w-full flex flex-wrap justify-center">
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                </div>
            </div>
        </div>

    @include('partials.dots')

    <div class="w-full py-6 flex content-center pb-6">
            <div class="w-full h-full text-copy-primary flex-wrap px-12 sm:px-6 justify-center ">
                {{-- <div class="w-full flex justify-around pb-2">
                    <h1>Our Picks</h1>
                    <a href="{{ route('catalog.index') }}">
                        <h1>View All...</h1>
                    </a>
                </div> --}}
                <div class="w-full flex justify-around pb-2">
                    <h1 class="text-xl sm:text-2xl md:text-2xl pb-3">Bass Bundles</h1>
                </div>
                <div class="w-full flex flex-wrap justify-center">
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials1.jpeg')}}"></pack-component>
                    <pack-component src="{{asset('img/packs/drumEssentials2.jpeg')}}"></pack-component>
                </div>
            </div>
        </div>
    </div>
@endsection
