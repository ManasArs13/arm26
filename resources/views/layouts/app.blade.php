<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ARM26.ru</title>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />


</head>

<body>
    <header class="p-2 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a class="navbar-brand" href="http://arm26/">
                    <img src="http://arm26/img/logo.png" alt="" width="70">
                </a>

                <ul class="nav col-lg-auto mb-2 justify-content-between mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link link-dark" href="{{ route('mypage.create') }}">Создать услугу</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link link-dark" href="{{ route('mypage.index') }}">Мои предложения</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-dark" href="http://arm26/about">О проекте</a>
                    </li>

                </ul>

                @if (Route::has('login'))
                @auth


                
                <a class="btn btn-outline-dark" href="{{ route('logout') }}">ВЫХОД</a>

                
                    
                    @else

                    <div class="dropdown text-end">
                      <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                          id="dropdownMenuButton1" aria-expanded="false">ВХОД / РЕГИСТРАЦИЯ</button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                       
                  <div class="top-right links">
                    <li><a class="dropdown-item" href="{{ route('login') }}">ВХОД</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a></li>
                  </div>

                </ul>
              </div>
                    @endauth
                
            
                        
                    
                
                @endif
            </div>
        </div>
    </header>

    <div class="body">
        @yield('content')
    </div>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">© 2022 / Arm26.ru</p>
      
          <a href="http://arm26/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="http://arm26/img/logo.png" class="m-3" alt="" width="60">
          </a>
      
          <ul class="nav col-md-4 justify-content-end">

            <li class="nav-item"><a href="http://arm26/about" class="nav-link px-2 text-muted">О проекте</a></li>
            <li class="nav-item"><a href="http://arm26/admin" class="nav-link px-2 text-muted">Настройки</a></li>
          </ul>
        </footer>
      </div>






    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
