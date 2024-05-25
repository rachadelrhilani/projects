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
        <h1>modifier un équipement réseau</h1>
        <form method="post" action="{{route('switchupdate',$switch->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input type="text" class="form-control" id="division" name="Division" value="{{$switch->Division}}">
            </div>
            <div class="mb-3">
                <label for="nom-hote" class="form-label">Nom hôte</label>
                <input type="text" class="form-control" id="nom-hote" name="Nom_hôte" value="{{$switch->Nom_hôte}}">
            </div>
            <div class="mb-3">
                <label for="adresse-mac" class="form-label">Adresse Mac</label>
                <input type="text" class="form-control" id="adresse-mac" name="Adresse_Mac" value="{{$switch->Adresse_Mac}}">
            </div>
            <div class="mb-3">
                <label for="port-mural" class="form-label">Port mural</label>
                <input type="text" class="form-control" id="port-mural" name="Port_mural" value="{{$switch->Port_mural}}">
            </div>
            <div class="mb-3">
                <label for="interface" class="form-label">Interface</label>
                <input type="text" class="form-control" id="interface" name="Interface" value="{{$switch->Interface}}">
            </div>
            <div class="mb-3">
                <label for="vlan" class="form-label">VLAN</label>
                <input type="text" class="form-control" id="vlan" name="VLAN" value="{{$switch->VLAN}}">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">login</label>
                <input type="text" class="form-control" id="login" name="login" value="{{$switch->login}}">
            </div>
            <div class="mb-3">
                <label for="Motdepasse" class="form-label">Motdepasse</label>
                <input type="text" class="form-control" id="Motdepasse" name="Motdepasse" value="{{$switch->Motdepasse}}">
            </div>
            <button type="submit" class="btn btn-primary">modifier</button>
        </form>
    </div>
</body>
</html>