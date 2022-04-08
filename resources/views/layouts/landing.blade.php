<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootsrap 5  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Training HTTI</title>
    <!-- owl -->
    <link rel="stylesheet" href="{{asset('css/owl/owl.carousel.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/owl/owl.theme.default.min.css')}}">
  
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/owl/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl/owl.carousel.js')}}"></script>
    <script src="{{asset('js/owl/highlight.js')}}"></script>
    <script src="{{asset('js/owl/app.js')}}"></script>
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>
    <div id="app">
      
          @if(session()->has('username'))
          
        <nav class="navbar up navbar-expand-md fixed-top navbar-light d-none bg-light d-lg-block ">
            <div class="container mt-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p><b>Training.id</b></p>
                </a>
                <div class="d-flex">
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/dashboard')}}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('/profil')}}">Profil</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                       
                    </span>
                    </div>
                </div>
            </div>
            
        </nav>

        <nav class="navbar navbar-light bg-light border-top navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom ">
           
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="{{url('/dashboard')}}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        <p class="menu">Dashboard</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{url('/profil')}}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                         <p class="menu">Profil</p>
                    </a>
                </li>
            </ul>
        </nav>
        @else
            <nav class="navbar up navbar-expand-md fixed-top navbar-light bg-light d-lg-block ">
            <div class="container mt-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p><b>Training.id</b></p>
                </a>
            </div>
        </nav>
        
      @endif
        <div class="pb-5">
                @yield('content') 
        </div>
       
      
    </div>
    
</body>
</html>
