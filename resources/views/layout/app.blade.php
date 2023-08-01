<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title', 'Laravel Template')</title>
</head>

<body>
    @include('partials.header')
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')

    @vite('resources/js/app.js')
    @yield('script-custom')
</body>

</html>
