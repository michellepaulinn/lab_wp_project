<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oddysey @yield('title')</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style>
        body{
            background-color: #F3F4F6ff
        }
        .bg-grey{
            background-color: #F3F4F6ff;
        }
        .bg-navy{
            background-color: #374151ff;
        }
        .bg-white{
            background-color: white;
        }
        a{
            color: #374151ff !important;
            text-decoration: none !important;
        }
        .logo-img{
            width: 8vh;
        }
        .card-img{
            width:100%;
            height:7rem;
            object-fit: cover;
        }
        .cart-img{
            width: 10rem;
        }
        .sub{
            align-items: flex-start;
            /* background-color: yellow; */
            color: grey;
        }
        .sub-bold{
            font-weight: bold;
        }
        .form-group{
            margin-block: 0.5rem;
        }
    </style>
</head>
<body>
    {{-- <nav>
        
        <div class="navbar bg-white shadow-sm px-4">
            <div class="nav-detail d-flex gap-4 align-items-center">
                <div class="logo">
                    <img src="{{asset('logo.png')}}" class="logo-img" alt="">
                </div>
                <a href="/">Dashboard</a>
                <a href="/cart">Cart</a>
                @can('admin-nav')
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                @endcan
            </div>
            <div class="nav-profile">
                @guest
                    <h5>GUEST</h5>    
                @endguest
                @auth
                <div class="d-flex">
                    <h3>{{auth()->user()->name}}</h3>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"><i class="bibi-box-arrow-right"></i></button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <div class="logo">
            <img src="{{asset('logo.png')}}" class="logo-img" alt="">
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Dashboard <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            @can('admin-nav')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            @endcan
          </ul>
        </div>
        <div>
            @guest
            <h6>GUEST</h6>    
            @endguest
            @auth
            <div class="d-flex">
                <h6>{{auth()->user()->name}}</h6>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"><i class="bibi-box-arrow-right"></i></button>
                </form>
            </div>
            @endauth
        </div>
      </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>