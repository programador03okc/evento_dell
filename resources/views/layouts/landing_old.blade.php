<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    
   
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/faviconn.png')}}">

    <title>PORTAFOLIO DELL Y CASO DE ÉXITO</title>
    @yield('style')

    @yield('head')

  </head>
  <body>
      @yield('content')
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('js/app.js')}}" ></script>
      @yield('script')
  </body>
</html>