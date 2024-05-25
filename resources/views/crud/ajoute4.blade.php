<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Systèmes réseaux</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="container mt-5">
    <h1>AJOUTER</h1>
    <form method="post" action="{{route('ajouteRSUS')}}">
        @csrf
        <div class="mb-3">
            <label for="aalsCaidat" class="form-label">AALS/CAIDAT</label>
            <input type="text" class="form-control" id="AALS_CAIDAT" placeholder="Entrez AALS/CAIDAT" name="AALS_CAIDAT">
        </div>
        <div class="mb-3">
            <label for="addressIp" class="form-label">Address IP</label>
            <input type="text" class="form-control" id="addressIp" placeholder="Entrez Address IP" name="ADDRESS_IP">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" placeholder="Entrez Login" name="LOGIN3">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Entrez Password" name="PASSWORD3">
            <input type="number" class="mt-2" min="3" max="3" value="3" name="id_citrix" hidden>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
</body>

</html>