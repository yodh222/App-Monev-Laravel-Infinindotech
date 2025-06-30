<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Argon Template Setup --}}
    <script src="{{ asset('assets/js/argon-dashboard-tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard-tailwind.css') }}" />

    {{-- Nucleo Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}" />

    {{-- Perfect Scrollbar --}}
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}" />
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    {{-- Font Awesomes --}}
    <script src="https://kit.fontawesome.com/ac8a45e20d.js" crossorigin="anonymous"></script>

</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-200 text-slate-500">
    <div class="absolute w-full bg-amber-500 min-h-75"></div>
    <x-core.sidebar />
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl pt-4">
        @yield('navbar')
        @yield('content')
        <x-core.footer />
    </main>
</body>

</html>
