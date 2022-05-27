<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link href="/sass/app.scss" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    





    <title>arm26</title>
  </head>
  <body>
   <div id="app"><example-component></example-component></div>
   


        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
      
  
      
      
   
        
    
   

  <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>