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
  <h1>Gestion des Accès</h1>
  <form method="post" action="{{route('ajouteinfo')}}">
    @csrf
    <div class="mb-3">
      <label for="systemeInfo" class="form-label">Division</label>
      <input type="text" class="form-control" id="systemeInfo" placeholder="Division" name="Système_dinformation">
    </div>
    <div class="mb-3">
      <label for="lien" class="form-label">Lien</label>
      <input type="text" class="form-control" id="lien" placeholder="Lien" name="Lien">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="loginAdmin" class="form-label">Login administrateur</label>
          <input type="text" class="form-control" id="loginAdmin" placeholder="Login administrateur" name="Login_administrateur">
        </div>
        <div class="mb-3">
          <label for="mdpAdmin" class="form-label">Mot de passe administrateur</label>
          <input type="password" class="form-control" id="mdpAdmin" placeholder="Mot de passe administrateur" name="Motdepasse_administrateur">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="loginUser" class="form-label">Login utilisateur</label>
          <input type="text" class="form-control" id="loginUser" name="Login_utilisateur" placeholder="Login utilisateur">
        </div>
        <div class="mb-3">
          <label for="mdpUser" class="form-label">Mot de passe utilisateur</label>
          <input type="password" class="form-control" id="mdpUser" placeholder="Mot de passe utilisateur" name="Motdepasse_utilisateur">
          <input type="number" class="mt-2" id="number-input" name="id_equipement" hidden>
          <input type="number" class="mt-2" id="number-input2" name="id_div" hidden>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
  </form>
</div>
</body>
</html>
<script>
  // Récupération des éléments input
const textInput = document.getElementById('systemeInfo');
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
        numberInput.value = 17;
        numberInput2.value = 2;
    }
    if (textInput.value === 'DAAJ') {
        numberInput.value =  22;
        numberInput2.value = 3;
    }
    if (textInput.value === 'DCT') {
        numberInput.value =  21;
        numberInput2.value = 4;
    }
    if (textInput.value === 'DBM') {
        numberInput.value =  20;
        numberInput2.value = 5;
    }
    if (textInput.value === 'DAI') {
        numberInput.value =  23;
        numberInput2.value = 6;
    }
    if (textInput.value === 'DAEC') {
        numberInput.value =  15;
        numberInput2.value = 7;
    }
    if (textInput.value === 'DAS') {
        numberInput.value =  34;
        numberInput2.value = 9;
    }
    if (textInput.value === 'INDH') {
        numberInput.value =  14;
        numberInput2.value = 10;
    }
    if (textInput.value === 'DPE') {
        numberInput.value =  13;
        numberInput2.value = 11;
    }
    if (textInput.value === 'DUE') {
        numberInput.value =  12;
        numberInput2.value = 12;
    }
    if (textInput.value === 'DAR') {
        numberInput.value =  18;
        numberInput2.value = 13;
    }
    if (textInput.value === 'DARJ') {
        numberInput.value =  35;
        numberInput2.value = 14;
    }
    if (textInput.value === 'Cellule pétition') {
        numberInput.value =  19;
        numberInput2.value = 15;
    }
    if (textInput.value === 'Promotion nationale') {
        numberInput.value =  16;
        numberInput2.value = 16;
    }
});

</script>