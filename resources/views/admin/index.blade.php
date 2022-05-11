<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



  
      
   

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    @include('layouts.style')






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
                <a class="nav-link" href="#">Создать услугу</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Найти специалиста</a>
              </li>
            </ul>
            
            <button class="btn btn-danger" type="submit">ВЫХОД</button>
            
          </div>
        
        </div>
      </nav>
   
   
   
   
   
   
    <div class="container">
        
    


       <div class="row">
           <div class="col-3 border border-primary">
              @include('admin.navi')
           </div>
           <div class="col-9 border border-primary">

            @yield('content')






           </div>
       </div>
   </div>




   



      
      
      
   
        
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>