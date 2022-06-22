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
    </style>
</head>
<body>
    <nav>
        <div class="navbar bg-white shadow-sm px-4">
            <div class="nav-detail d-flex gap-4 align-items-center">
                <div class="logo">
                    <img src="{{asset('logo.png')}}" class="logo-img" alt="">
                </div>
                <a href="/">Dashboard</a>
                <a href="/cart">Cart</a>
                <a href="">{{--Admin--}}</a>
            </div>
            <div class="nav-profile">
                
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>