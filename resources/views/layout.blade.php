<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app-gea.css')}}">
    <title>Test Gea - @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('clients.index')}}">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('vehicule.index')}}">Voitures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('mecaniciens.index')}}">Mécaniciens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/nvClient">Nouveau client</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/nvVoiture">Nouvelle voiture</a>
            </li>
           
        </ul>

    </div>
</nav>

<main class="container mt-3">
    @include('alert')
    @yield('content')
</main>


<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app-gea.js')}}"></script>

@yield('scripts')
</body>
</html>
