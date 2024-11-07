<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Serveurs</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="icon" href="logo.jpeg" type="image/x-icon">
  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <style>
    .img1 {
      width: 28px;
    }

    .img2 {
      width: 28px;
    }
  </style>
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="border border-primary">
                <h1 class="text-center text-primary">Serveurs</h1>
            </div>
        </div>
        <div class="col-12 col-md-2 mt-2 text-md-end text-center">
            <a href="{{route('Déconnection')}}">
                <button type="button" class="btn btn-warning">Déconnexion</button>
            </a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form method="post" action="{{route('serveursshow')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Sélectionner une option :</label>
                    <select name="choix" class="form-select" id="exampleFormControlSelect1">
                        <option value="Serveur Active Directory1">Serveur Active Directory1</option>
                        <option value="Serveur Active Directory2">Serveur Active Directory2</option>
                        <option value="Serveur Messagerie Exchange">Serveur Messagerie Exchange</option>
                        <option value="Serveur Administration Kaspersky">Serveur Administration Kaspersky</option>
                        <option value="Serveur WSUS">Serveur WSUS</option>
                        <option value="Serveur Proxy">Serveur Proxy</option>
                        <option value="Serveur WEB">Serveur WEB</option>
                        <option value="Serveur Base de données">Serveur Base de données</option>
                        <option value="Serveur RSUS">Serveur RSUS</option>
                        <option value="Serveur BEC">Serveur BEC</option>
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" name="envoye" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-start">
        <div class="col-12 col-md-8">
            <a href="{{route('ajoute5')}}">
                <button type="button" class="btn btn-primary w-50 mb-3">Ajouter</button>
            </a>
        </div>
    </div>
</div>

<div class="mt-5">
    <div class="row justify-content-center w-100">
        <div class="col-11 table-responsive-md">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Nomenclature</th>
                        <th scope="col">Adresse IP</th>
                        <th scope="col">Nom d'utilisateur console</th>
                        <th scope="col">Mot de passe console</th>
                        <th scope="col">Nom d'utilisateur domaine</th>
                        <th scope="col">Mot de passe domaine</th>
                        <th scope="col">Guide d'utilisation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($_POST['envoye']))
                    @foreach($serveurs as $serveur)
                    <tr>
                        <td>{{$serveur->Nomenclature}}</td>
                        <td>{{$serveur->Adresse_IP}}</td>
                        <td>{{$serveur->Nom_dutilisateur_console}}</td>
                        <td>{{$serveur->Motdepasse_console}}</td>
                        <td>{{$serveur->Nom_dutilisateur_domaine}}</td>
                        <td>{{$serveur->Motdepasse_domaine}}</td>
                        <td>
                            <a href="{{$serveur->Guide_dutilisation}}" download>
                                <button type="button" class="btn btn-success w-100">Télécharger</button>
                            </a>
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route('modifie5',$serveur->id)}}" class="mt-3">
                                <img src="/modifier.png" class="img1" alt="Modifier">
                            </a>
                            <form action="{{route('serveurdelete',$serveur->id)}}" method="post" class="ms-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn mt-1">
                                    <img src="/supprimer.png" class="img2" alt="Supprimer">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <a href="{{route('guide')}}">
            <button type="button" class="btn btn-primary w-50">Guide</button>
            </a>
        </div>
        <div class="col-12 col-md-6">
        <button type="button" class="btn btn-success w-50" onclick="window.print()">Télécharger</button>
        </div>
    </div>
</div>

</body>
</html>
<script>
  // Récupérer le select
  const selectCitrix = document.getElementById('exampleFormControlSelect1');

  // Écouter les changements de sélection
  selectCitrix.addEventListener('change', function() {
    // Sauvegarder la valeur sélectionnée dans le stockage local
    localStorage.setItem('selectedOption', this.value);
  });

  // Restaurer l'option sélectionnée lors du chargement de la page
  const selectedOption = localStorage.getItem('selectedOption');
  if (selectedOption) {
    selectCitrix.value = selectedOption;
  }
  function printPage() {
            window.print();
   }
</script>