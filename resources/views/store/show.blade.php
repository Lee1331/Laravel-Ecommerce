@extends('layouts.app')
@section('content')
{{--
<div class=" bg-background-primary w-screen h-screen">
    <div class="w-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="header">
                {{ $pack->name }}
            </div>
            <hr class="pb-6">
        </div>
    </div>
    <div class="w-full sm:h-1-2 flex flex-wrap px-12 pt-12 pb-6 text-copy-secondary block">
        <div class=" w-full lg:w-1/3 lg:ml-auto h-45vh md:h-1/2 bg-background-accent-1 pr-6">
            <div class="h-full object-fill overflow-hidden bg-cover bg-center content-center" style="background-image: url({{ asset('img/cassette.jpeg') }});"></div>
        </div>

        <div class="w-full lg:w-1/3 lg:mr-auto h-1/2 md:h-half sm:h-45vh bg-background-accent-1 md:pl-6 pr-0 md:pr-12 lg:pr-0 xl:pr-12">
            <div class="inline-block text-left break-words pt-3 sm:pt-0">
                <h1 class="text-2xl md:text-3xl pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
            </div>
            <div class="w-full md:w-auto flex flex-wrap lg:text-left break-words text-lg">

                <h3 class="pb-3 mr-6 text-2xl"> £{{ $pack->amount }}</h3>

                @foreach ($pack->tags as $tag)
                    <h3 class="pb-3 mr-3">{{ $tag->name }}</h3>
                @endforeach
            </div>

            <hr class="pb-6">

            <div class="w-full md:w-auto inline-block lg:text-left break-words text-lg pb-6  text-copy-ternary">
                <h3 class="pb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
            </div>
            <button class="px-4 py-2 w-48 border rounded border-white hover:bg-background-accent1 bg-background-secondary shadow">Add to Cart</button>
        </div>
    </div>
</div> --}}

<div class=" bg-background-primary w-screen ">
    <div class="w-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="header">
                {{ $pack->name }}
            </div>
            <hr class="pb-6">
        </div>
    </div>
    {{-- <div class=" w-full flex flex-wrap px-12 pt-6 pb-12"> --}}
    <div class=" w-full sm:h-1-2 flex flex-wrap px-12 pb-6">

        <pack-show-component src="{{ asset('img/packs/drumEssentials2.jpeg') }}" name="{{ $pack->name }}" author="{{ $pack->owner->name }}" :tags="{{ json_encode($pack->tags()->get()->pluck('name')->toArray())  }}" :amount="{{ $pack->amount }}"></pack-show-component>
    </div>
</div>
@endsection
