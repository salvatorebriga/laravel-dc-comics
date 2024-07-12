<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7711c3f1fc.js" crossorigin="anonymous"></script>
    <title> DC Comics </title>
    @vite('resources/js/app.js')
  </head>

  <body>
    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}

    @include('shared.header')
    @yield('main')
    @include('shared.footer')

  </body>

</html>
