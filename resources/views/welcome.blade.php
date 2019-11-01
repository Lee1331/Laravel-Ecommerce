@extends('layouts.app')
@section('content')

    {{-- Landing page banner --}}
        <div class="mb-4 flex bg-background-primary">
            <div class="w-screen h-screen sm:h-s-half object-fill overflow-hidden bg-left-top lg:bg-left flex justify-center opacity-50 bg-no-repeat bg-cover bg-auto" style="background-image: url({{ asset('img/cassette.jpeg') }});">
                    <div class="w-full lg:w-3/4 h-full text-copy-secondary p-6 lg:p-12 ">
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <h1 class="text-2xl sm:text-4xl md:text-4xl pb-3">Welcome to our new site!</h1>
                            <h3 class="text-xl sm:text-2xl md:text-2xl">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </h3>
                            <h3 class="text-xl sm:text-xl md:text-2xl pb-3">when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                            <button class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-background-secondary shadow">Store</button>
                            <button class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content container 1 --}}
            {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
            {{-- <div class=" w-full sm:h-half flex flex-wrap px-12 pt-12 pb-6"> --}}
            <div class=" w-full sm:h-1-2 flex flex-wrap px-12 pt-12 pb-6">
                <div class=" w-full lg:w-1/3 lg:ml-auto h-45vh md:h-1/2 bg-background-accent-1 pr-6">
                    <div class="h-full object-fill overflow-hidden bg-cover bg-center content-center" style="background-image: url({{ asset('img/cassette.jpeg') }});"></div>
                </div>

                {{-- look at adding a grid to instead of the line below - when the screen is small give the h3 div w-full --}}
                <div class="w-full lg:w-1/3 lg:mr-auto h-1/2 md:h-half sm:h-45vh bg-background-accent-1 md:pl-6 pr-0 md:pr-12 lg:pr-0 xl:pr-12">
                    <div class="inline-block text-left break-words">
                        <h1 class="text-2xl md:text-3xl pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    </div>
                    <div class="w-full md:w-auto inline-block lg:text-left break-words text-lg">
                        <h3 class="pb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                        <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                    </div>
                </div>
            </div>

            @include('partials.dots')

            {{-- Content container 2 --}}
            {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
            <div class="w-full flex flex-wrap px-12 pt-6 pb-6">
                {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
                {{-- <div class="w-full lg:w-1/3 lg:ml-auto h-1/2 md:h-half sm:h-45vh bg-background-accent-1 md:pr-6 pl-0 md:pl-12 lg:pl-0 xl:pl-12 hidden lg:block"> --}}
                <div class="w-full lg:w-1/3 lg:ml-auto h-1/2  sm:h-45vh bg-background-accent-1 md:pr-6 pl-0 md:pl-12 lg:pl-0 xl:pl-12 hidden lg:block">
                    <div class="inline-block text-right break-words">
                        <h1 class="text-2xl md:text-3xl pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    </div>
                    <div class="w-full md:w-auto inline-block text-right break-words text-lg">
                        <h3 class="pb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                        <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 lg:mr-auto h-45vh md:h-1/2 bg-background-accent-1 pl-6">
                    <div class="h-full object-fill overflow-hidden bg-cover bg-center content-center" style="background-image: url({{ asset('img/cassette.jpeg') }});"></div>
                </div>

                {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
                {{-- <div class="w-full lg:w-1/3 lg:ml-auto h-1/2 md:h-half sm:h-45vh bg-background-accent-1 md:pr-12 pl-0 md:pl-12 lg:pl-0 xl:pl-12 block lg:hidden"> --}}
                <div class="w-full lg:w-1/3 lg:ml-auto h-1/2  sm:h-45vh bg-background-accent-1 md:pr-12 pl-0 md:pl-12 lg:pl-0 xl:pl-12 block lg:hidden">
                    <div class="inline-block text-right break-words">
                        <h1 class="text-2xl md:text-3xl pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    </div>
                    <div class="w-full md:w-auto inline-block text-right break-words text-lg">
                        <h3 class="pb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                        <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                    </div>
                </div>
            </div>

            @include('partials.dots')

            {{-- Content container 1 --}}
            {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
            {{-- <div class=" w-full md:h-half flex flex-wrap px-12 pt-6 pb-12"> --}}
            <div class=" w-full flex flex-wrap px-12 pt-6 pb-12">
                <div class=" w-full lg:w-1/3 lg:ml-auto h-45vh md:h-1/2 bg-background-accent-1 pr-6">
                    <div class="h-full object-fill overflow-hidden bg-cover bg-center content-center" style="background-image: url({{ asset('img/cassette.jpeg') }});"></div>
                </div>

                {{-- setting the height on the child elements instead to prevent the svg dots from overlaping with the container when the view height changes --}}
                {{-- <div class="w-full lg:w-1/3 lg:mr-auto h-1/2 md:h-half sm:h-45vh bg-background-accent-1 md:pl-6 pr-0 md:pr-12 lg:pr-0 xl:pr-12"> --}}
                <div class="w-full lg:w-1/3 lg:mr-auto h-1/2 sm:h-45vh bg-background-accent-1 md:pl-6 pr-0 md:pr-12 lg:pr-0 xl:pr-12">
                    <div class="inline-block text-left break-words">
                        <h1 class="text-2xl md:text-3xl pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                    </div>
                    <div class="w-full md:w-auto inline-block lg:text-left break-words text-lg">
                        <h3 class="pb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                        <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                    </div>
                </div>
            </div>


            {{-- </div> --}}
        {{-- </div> --}}
    </div>
@endsection
