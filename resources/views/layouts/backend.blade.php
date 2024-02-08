<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$settings->title}}</title>

    <!-- Favicons -->
    <link href="{{asset('images/settings/'.$settings->favicon)}}" rel="icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        /* .nav-link{
            font-weight:bold;
        } */
        .navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
            color: #34b7a7;
            font-weight: 600;
        }
    </style>

  </head>
  <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/settings/'.$settings->logo)}}" alt="logo" style="height: 60px;" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{'/'==request()->path()?'active':''}}" aria-current="page" href="{{url('/welcome-index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'about'==request()->path()?'active':''}}" href="{{ url('/about-index') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'blogs'==request()->path()?'active':''}}" href="{{ url('/blogs') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'categories'==request()->path()?'active':''}}" href="{{ url('/categories') }}">Blog Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'services'==request()->path()?'active':''}}" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'skills-index'==request()->path()?'active':''}}" href="{{ url('/skill-index') }}">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{'contact-index'==request()->path()?'active':''}}" href="{{ url('/contact-index') }}">Contact</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <form method="POST" action="{{ route('logout') }}">
                            <li><a class="dropdown-item" href="{{ url('/settings') }}">Account Setting</a> </li>
                            @csrf
                            <li><a class="dropdown-item" href="route('logout')"
                                onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                            </li>
                    {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                        </form>
                    </ul>
                </li>

            </div>
            </div>
        </nav>

        @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
