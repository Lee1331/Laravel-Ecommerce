@extends('layouts.app')

@section('content')
    <div class="mb-4 flex bg-background-primary">
        <div class="w-full h-full text-copy-secondary p-6 lg:p-12 flex justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div class="card-header pb-2"><h1>Login</h1></div>

                <hr class="pb-6">
                <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row pb-3">
                                <label for="email" class="text-xl sm:text-2xl md:text-2xl">{{ __('E-Mail Address') }}</label>
                                <div class="flex items-center py-2">
                                    <input id="email" type="email" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="JohnSmith@gmail.com" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="text-xl sm:text-2xl md:text-2xl">{{ __('Password') }}</label>
                                <div class="flex items-center py-2">
                                    <input id="password" type="password" class="appearance-none bg-transparent border-none w-full text-copy-primary py-1 px-2 leading-tight focus:outline-none form-control @error('password') is-invalid @enderror" name="password" placeholder="************" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row pb-6">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="flex justify-between">
                                    <button type="submit" class="px-4 py-2 w-24 border rounded border-white hover:bg-background-accent1 bg-transparent shadow">
                                        {{ __('Login') }}
                                    </button>
                                    
                                    <div class="inline-block flex content-center">
                                        @if (Route::has('password.request'))
                                        <a class="px-4 py-2 hover:text-copy-ternary" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                        <a class="px-4 py-2 hover:text-copy-ternary" href="{{ route('register') }}">
                                            {{ __('New? Register Now!') }}
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
