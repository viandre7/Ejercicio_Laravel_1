<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>
        @yield('title', 'Aprendible')
    </title>

    <style>
       
    </style>

</head>
<body>
    
    <div id="app" class="d-flex flex-column h-screem justify-content-between">
        <header>
            @include('/partials/nav')
            @include('partials.mensaje-session')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow" >
            Streamwin | Copyright {{ date('Y')}}
        </footer>
    </div>
   
</body>
</html>