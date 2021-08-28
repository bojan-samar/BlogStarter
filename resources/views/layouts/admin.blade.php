<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,900" rel="stylesheet">


    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    @livewireStyles

    <!-- Page Meta -->
    @if (isset($meta))
        {{ $meta }}
    @endif

</head>

    <body class="antialiased h-screen">

        <div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak
            @keydown.window.escape="sidemenu = false">

            <x-admin.layouts.sidebar></x-admin.layouts.sidebar>

            <div class="flex-1 flex-col relative z-0 overflow-y-auto pb-8">

                <x-admin.layouts.header></x-admin.layouts.header>

                <div class="py-8 bg-gray-100 rounded-xl m-1 md:mx-4" style="min-height: 88%;border-radius: 0.8rem;">
                    <div class="px-2 md:px-10 md:container mx-auto {{ $class }}">
                        {{ $slot }}
                    </div>
                </div>

            </div>

        </div>

        @stack('scripts')
        @livewireScripts
        @livewire('alert')
    </body>

</html>
