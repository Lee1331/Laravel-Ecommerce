@extends('layouts.app')

@section('content')
    <div class="flex bg-background-primary w-screen h-screen">
        <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="card">
                    <div class="card-header pb-2"><h1>Create Account</h1></div>
                    <hr class="pb-6">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row pb-3">
                                <label for="name" class="text-xl sm:text-2xl md:text-2xl">{{ __('Name') }}</label>

                                <div class="flex items-center py-2">
                                    <input id="name" type="text" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="John Smith" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="email" class="text-xl sm:text-2xl md:text-2xl">{{ __('E-Mail Address') }}</label>

                                <div class="flex items-center py-2">
                                    <input id="email" type="email" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="JohnSmith@gmail.com" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="password" class="text-xl sm:text-2xl md:text-2xl">{{ __('Password') }}</label>

                                <div class="flex items-center py-2">
                                    <input id="password" type="password" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('password') is-invalid @enderror" name="password" placeholder="************" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-6">
                                <label for="password-confirm" class="text-xl sm:text-2xl md:text-2xl">{{ __('Confirm Password') }}</label>

                                <div class="flex items-center py-2">
                                    <input id="password-confirm" type="password" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control" name="password_confirmation" placeholder="************" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="flex justify-between">
                                    <button type="submit" class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">
                                        {{ __('Register') }}
                                    </button>
                                    <a class="px-4 py-2 hover:text-copy-ternary" href="{{ route('login') }}">
                                        {{ __('Already have an Account?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
