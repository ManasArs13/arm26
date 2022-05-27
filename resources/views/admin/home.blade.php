<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" />
      
   


    <title>Administrator</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
        <div class="container">
            
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="" width="80">
                26.ru
            </a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="#">Добавить пост</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Добавить категорию</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Добавить пользователя</a>
              </li>
            </ul>
            
            <button class="btn btn-danger" type="submit">ВЫХОД</button>
            
          </div>
        
        </div>
      </nav>
   
   
   
   
   
   
    <div class="container">
        
    
      <div id="app"><example-component></example-component></div>

       <div class="row">
           <div class="col-3 border border-primary">
              @include('admin.navi')
           </div>
           <div class="col-9">

            @yield('content')






           </div>
       </div>
   </div>




   



      
      
      
   
        
  
   <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>