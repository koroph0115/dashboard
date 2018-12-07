<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard/main.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

<!-- la sidebar -->
<div class="sidebar d-flex flex-column  position-fixed " id="side-bar">
    <div class="side-item">Dashboard</div>
    <div class="side-item d-inline-block">
        <img src="{{asset('svg/403.svg')}}" alt=""
             class="rounded-circle img-fluid">
        <span class="ml-2 text-white font-weight-bold">Admin</span>
    </div>
    <div class="side-item"><a href="#" class="nav-item actived">Tableau de
            bord</a></div>
    <div class="side-item"><a href="#" class="nav-item ">User</a></div>
    <div class="side-item"><a href="#" class="nav-item">Roles</a></div>
    <div class="side-item"><a href="#" class="nav-item">Parametre</a></div>
    <div class="side-item"><a href="#" class="nav-item">deconnexion</a></div>
</div>
<!-- fin sidebar -->

<div class="app " id="app-container">
    <!-- la barre de navigation -->
    <nav class=" navbar navbars position-sticky shadow-sm">
        <button class="btn btn-light" id="btn-toggle">
            <span id="btn-icon" class="icon-list2"></span>
            <!-- <span class="icon-arrow-right2" ></span> -->
        </button>
        <!--  <div class="nav-item d-inline-block">
            <nav aria-label="breadcrumb " class="my-3">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>
        </div> -->
        <div class="nav-item ">
            <div class="dropdown">
                <img class="img-fluid rounded-circle dropdown-toggle"
                     src="{{asset('svg/404.svg')}}"
                     heigth="50px"
                     id="dropdownMenuButton" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false"/>
                <span class="navbar-signal"></span>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another</a>
                    <a class="dropdown-item" href="#">Something</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- fin de la barre de navigation -->

    <!-- main -->
    <main class="container-alpha">
        @yield('content')
    </main>
    <!-- fin main -->

    <!-- footer-->
    <div class="admin-footer">
        @include('admin.component.footer')
    </div>
    <!-- fin footer-->
</div>

</body>

</html>
