@extends('layouts.app')

@section('content')
<div class="flex bg-background-primary w-screen h-screen">
    <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="header">
                Create Pack
            </div>
                <hr class="pb-6">
                <div class="card-body">
                    <form method="POST" action="{{ route('author.packs.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row pb-3">
                            <label for="name" class="text-xl sm:text-2xl md:text-2xl">{{ __('Name') }}</label>

                            <div class="flex items-center py-2">
                                <input id="name" type="text" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Pack" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label for="description" class="text-xl sm:text-2xl md:text-2xl">{{ __('Description') }}</label>

                            <div class="flex items-center py-2">
                                <textarea id="description" rows="5" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('description') is-invalid @enderror" name="description" placeholder="Lorem Ipsum..." required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row pb-3">
                            <label for="name" class="text-xl sm:text-2xl md:text-2xl">{{ __('Amount') }}</label>

                            <div class="flex items-center py-2">
                                <input id="amount" type="number" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('amount') is-invalid @enderror" name="amount" placeholder="£0.00" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pb-3 text-background-ternary">
                            <label for="cover_image">Cover Image</label>
                            <input type="file" class="flex" id="cover_image" name="cover_image" required>
                        </div>

                        <div class="form-group row pb-6 ">
                            <label for="amount" class="text-xl sm:text-2xl md:text-2xl">{{ __('Tags') }}</label>
                            <div class="flex content-center justify-between">
                                {{-- @foreach ($tags as $tag)
                                    <div>
                                        <label class="text-xl sm:text-2xl md:text-2xl mr-2">{{ $tag->name }}</label>
                                        <input id="amount" type="number" class="py-1 px-2 mr-4 leading-tight" name="amount" placeholder="£0.00">
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="px-4 py-2 w-48 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">
                                {{ __('Upload Pack') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
