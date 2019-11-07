@extends('layouts.app')
@section('content')
    <div class=" bg-background-primary w-screen min-h-screen">
        <div class="w-full text-copy-secondary p-6 lg:px-12 lg:pt-12  flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="header">
                    {{ $pack->name }}
                </div>
                <hr class="pb-6">
            </div>
        </div>

        <div class=" w-full sm:h-1-2 flex flex-wrap px-12 pb-6 pt-0">
            <pack-show-component src="{{  asset('storage/' . $pack->cover_image) }}" name="{{ $pack->name }}" description="{{ $pack->description }}" author="{{ $pack->author->name }}" :tags="{{ json_encode($pack->tags()->get()->pluck('name')->toArray())  }}" :amount="{{ $pack->amount }}"></pack-show-component>
        </div>
    </div>
@endsection
