<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('stylesection')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="{{ mix('js/alpine.js') }}"></script>
</head>

<body>
    <div class="px-4 md:px-16 py-4 border-t-2 md:border-t-4 border-blue-500">
        <div class="container mx-auto md:w-9/12">
            <div class="mb-8">
                @if(\Route::currentRouteName() == 'home')<h4 class="text-3xl font-bold">Amarendra Sharma</h4>@endif
                <div class="mb-3">
                    <a href="/"
                        class="no-underline mr-4 font-semibold {{ (\Route::currentRouteName() == 'home') ? 'text-black underline':'text-gray-500'}}">Home</a>
                    <a href="/resume"
                        class="mr-4 font-semibold  no-underline hover:text-black {{ (\Route::currentRouteName() == 'resume') ? 'text-black underline':'text-gray-500'}}">Resume</a>
                    {{-- <a
                        class="mr-4 font-semibold no-underline hover:text-black {{ (\Route::currentRouteName() == 'project') ? 'text-black underline':'text-gray-500'}}">Projects
                    </a>
                    <a
                        class=" font-semibold no-underline hover:text-black {{ (\Route::currentRouteName() == 'links') ? 'text-black underline':'text-gray-500'}}">Links</a>
                    --}}
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>