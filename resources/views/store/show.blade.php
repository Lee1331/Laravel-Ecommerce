@extends('layouts.app')
@section('content')

<div class="flex bg-background-primary w-screen h-screen">
    <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
    <div class="header">
        {{ $pack->name }}
    </div>
    <hr class="pb-6">
</div>
</div>
</div>

@endsection
