<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Switch</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="logo.jpeg" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container mt-5">
        <h1>Ajouter un équipement réseau</h1>
        <form method="post" action="{{route('switchajoute')}}">
            @csrf
            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input type="text" class="form-control" id="division" name="Division">
            </div>
            <div class="mb-3">
                <label for="nom-hote" class="form-label">Nom hôte</label>
                <input type="text" class="form-control" id="nom-hote" name="Nom_hôte">
            </div>
            <div class="mb-3">
                <label for="adresse-mac" class="form-label">Adresse Mac</label>
                <input type="text" class="form-control" id="adresse-mac" name="Adresse_Mac">
            </div>
            <div class="mb-3">
                <label for="port-mural" class="form-label">Port mural</label>
                <input type="text" class="form-control" id="port-mural" name="Port_mural">
            </div>
            <div class="mb-3">
                <label for="interface" class="form-label">Interface</label>
                <input type="text" class="form-control" id="interface" name="Interface">
            </div>
            <div class="mb-3">
                <label for="vlan" class="form-label">VLAN</label>
                <input type="text" class="form-control" id="vlan" name="VLAN">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="Motdepasse" class="form-label">Motdepasse</label>
                <input type="text" class="form-control" id="Motdepasse" name="Motdepasse">
                <input type="number" class="mt-2" id="number-input" name="id_equipement" hidden>
                <input type="number" class="mt-2" id="number-input2" name="id_div" hidden>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>

</html>
<script>
    // Récupération des éléments input
    const textInput = document.getElementById('division');
    const numberInput = document.getElementById('number-input');
    const numberInput2 = document.getElementById('number-input2');
    // Écouteur d'événement pour détecter les changements dans l'input text
    textInput.addEventListener('input', function() {
        // Comparaison de la valeur de l'input text avec une valeur spécifique
        if (textInput.value === 'SSICTD') {
            numberInput.value = 11;
            numberInput2.value = 1;
        }
        if (textInput.value === 'SPS') {
            numberInput.value = 1;
            numberInput2.value = 2;
        }
        if (textInput.value === 'DAAJ') {
            numberInput.value = 3;
            numberInput2.value = 3;
        }
        if (textInput.value === 'DCT') {
            numberInput.value = 21;
            numberInput2.value = 4;
        }
        if (textInput.value === 'DBM') {
            numberInput.value = 2;
            numberInput2.value = 5;
        }
        if (textInput.value === 'DAI') {
            numberInput.value = 6;
            numberInput2.value = 6;
        }
        if (textInput.value === 'DAEC') {
            numberInput.value = 9;
            numberInput2.value = 7;
        }
        if (textInput.value === 'DAS') {
            numberInput.value = 34;
            numberInput2.value = 9;
        }
        if (textInput.value === 'INDH') {
            numberInput.value = 10;
            numberInput2.value = 10;
        }
        if (textInput.value === 'DPE') {
            numberInput.value = 13;
            numberInput2.value = 11;
        }
        if (textInput.value === 'DUE') {
            numberInput.value = 12;
            numberInput2.value = 12;
        }
        if (textInput.value === 'DAR') {
            numberInput.value = 8;
            numberInput2.value = 13;
        }
        if (textInput.value === 'DARJ') {
            numberInput.value = 7;
            numberInput2.value = 14;
        }
        if (textInput.value === 'Cellule pétition') {
            numberInput.value = 19;
            numberInput2.value = 15;
        }
        if (textInput.value === 'Promotion nationale') {
            numberInput.value = 16;
            numberInput2.value = 16;
        }
    });
</script>