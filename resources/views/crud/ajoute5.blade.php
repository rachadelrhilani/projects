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
  <h1>Gestion des Utilisateurs</h1>
  <form method="Post" action="{{route('ajouteserveur')}}">
    @csrf
    <div class="mb-3">
      <label for="nomenclature" class="form-label">Nomenclature</label>
      <input type="text" class="form-control" id="nomenclature" name="Nomenclature">
    </div>
    <div class="mb-3">
      <label for="adresseIP" class="form-label">Adresse IP</label>
      <input type="text" class="form-control" id="adresseIP" name="Adresse_IP">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nomConsole" class="form-label">Nom d'utilisateur console</label>
          <input type="text" class="form-control" id="nomConsole" name="Nom_dutilisateur_console">
        </div>
        <div class="mb-3">
          <label for="mdpConsole" class="form-label">Mot de passe console</label>
          <input type="password" class="form-control" id="mdpConsole" name="Motdepasse_console">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nomDomaine" class="form-label">Nom d'utilisateur domaine</label>
          <input type="text" class="form-control" id="nomDomaine" name="Nom_dutilisateur_domaine">
        </div>
        <div class="mb-3">
          <label for="mdpDomaine" class="form-label">Mot de passe domaine</label>
          <input type="password" class="form-control" id="mdpDomaine" name="Motdepasse_domaine">
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="guideUtilisation" class="form-label">Guide d'utilisation</label>
      <input type="file" name="Guide_dutilisation"/>
      <input type="number" class="mt-2" id="number-input" name="id_equipement" hidden>
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
  </form>
</div>
</div>
</body>
</html>
<script>
  // Récupération des éléments input
const textInput = document.getElementById('nomenclature');
const numberInput = document.getElementById('number-input');
// Écouteur d'événement pour détecter les changements dans l'input text
textInput.addEventListener('input', function() {
    if (textInput.value === 'Serveur BEC') {
        numberInput.value =  24;
    }
    if (textInput.value === 'Serveur RSUS') {
        numberInput.value =  25;
    }
    if (textInput.value === 'Serveur Base de données') {
        numberInput.value =  26;
    }
    if (textInput.value === 'Serveur WEB') {
        numberInput.value =  27;
    }
    if (textInput.value === 'Serveur Proxy') {
        numberInput.value =  28;
    }
    if (textInput.value === 'Serveur WSUS') {
        numberInput.value =  29;
    }
    if (textInput.value === 'Serveur Administration Kaspersky') {
        numberInput.value =  30;
    }
    if (textInput.value === 'Serveur Messagerie Exchange') {
        numberInput.value =  31;

    }
    if (textInput.value === 'Serveur Active Directory2') {
        numberInput.value =  32;
    }
    if (textInput.value === 'Serveur Active Directory1') {
        numberInput.value =  33;
 
    }
});

</script>