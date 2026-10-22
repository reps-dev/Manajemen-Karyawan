<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="app-shell d-flex align-items-stretch">
        @include('layouts.navbar')

        <main class="main-content flex-grow-1">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>