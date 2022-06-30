<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
      
   


    <title>ADMINISTRATOR</title>

  </head>
    <body>

    
      <div id="app">
        <admin-component></admin-component>
      </div>
   
    
   
        
    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>