<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Laravel 11 LiveWire')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/livewire-icon.jpg') }}" type="image/jpg" />

    <link href="{{ asset('theme/plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <div class="main">

            <main class="content">
                @yield('content')
            </main>

        </div>
    </div>

    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('theme/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
