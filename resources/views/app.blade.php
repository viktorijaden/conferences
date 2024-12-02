<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

</head>
<style>
    html * {
        font-family: 'Cinzel';
        font-weight: 500;
        text-decoration-line: none !important;
    }
    body{
        padding-top: 125px;
    }
    .navbar {
        background-color: rgb(176, 190, 149) !important;
        transition: top 0.4s;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }
    .nav-item{
        font-size: 28px;
    }
    .title:hover{
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.5),
        0 0 20px rgba(255, 255, 255, 0.5);
        color: rgb(234, 243, 241);
    }
    .nav-item:hover{
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.5),
        0 0 20px rgba(255, 255, 255, 0.5);
    }
    .footer{
        background-color: #9cb086;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px 0;
        color: white;
    }
</style>
<body>

<nav id="navbar" class="navbar sticky-top navbar-dark navbar-expand-lg">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ms"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="col d-flex justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Pagrindinis</a>
                    </li>
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('client') }}">Konferencijos</a>
                    </li>
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('worker') }}">Darbuotojas</a>
                    </li>
                    @if (auth()->check())
                        @if (auth()->user()->admin)
                            <li class="nav-item pe-2 ps-2">
                                <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">Administratorius</a>
                            </li>
                        @endif
                    @endif
                     @if (auth()->check())
                    <li class="nav-item pe-2 ps-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Atsijungti {{auth()->user()->name}}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

</nav>

<div>@yield('content')</div>

<footer class="footer">Viktorija Denisevičiūtė PIT-22-NL</footer>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="https://kit.fontawesome.com/6ec9c7cfba.js" crossorigin="anonymous"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
