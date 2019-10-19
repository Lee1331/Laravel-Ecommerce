<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="theme-light">
    <div id="app">
        {{-- default laravel auth --}}
        {{-- @if(Route::has('login'))
            <nav class="sticky top-0 right-0 mr-4 w-full h-10vh bg-background-primary">
                <div class="p-8">
                    @auth
                        <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-copy-secondary uppercase">{{ __('Home') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-copy-secondary uppercase pr-6">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-copy-secondary uppercase">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif --}}

        @if(Route::has('login'))
            @auth
                <navbar-component :auth="true"></navbar-component>
            @else
                <navbar-component :auth="false"></navbar-component>
            @endauth
        @endif

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
