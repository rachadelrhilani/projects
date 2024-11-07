<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Systèmes d'information</title>

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
                <h1 class="text-center text-primary">Systèmes d'information</h1>
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
            <form method="post" action="{{route('sysinfo')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Sélectionner une option :</label>
                    <select name="choix" class="form-select" id="exampleFormControlSelect1">
                        <option value="SSICTD">SSICTD</option>
                        <option value="DAI">DAI</option>
                        <option value="DAAJ">DAAJ</option>
                        <option value="DCT">DCT</option>
                        <option value="DBM">DBM</option>
                        <option value="Cellule pétition">Cellule pétition</option>
                        <option value="DAR">DAR</option>
                        <option value="SPS">SPS</option>
                        <option value="Promotion nationale">Promotion nationale</option>
                        <option value="DAEC">DAEC</option>
                        <option value="INDH">INDH</option>
                        <option value="DAS">DAS</option>
                        <option value="DPE">DPE</option>
                        <option value="DUE">DUE</option>
                    </select>
                    <input type="submit" class="btn btn-primary mt-3" name="envoye" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-start">
        <div class="col-12 col-md-8">
            <a href="{{route('ajoute6')}}">
                <button type="button" class="btn btn-primary w-50 mb-3">Ajouter</button>
            </a>
        </div>
    </div>
</div>

<div class="mt-5">
    <div class="row justify-content-center w-100">
        <div class="col-11 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Division</th>
                        <th scope="col">Lien</th>
                        <th scope="col">Login administrateur</th>
                        <th scope="col">Mot de passe administrateur</th>
                        <th scope="col">Login utilisateur</th>
                        <th scope="col">Mot de passe utilisateur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @if(isset($_POST['envoye']))
                @foreach($infos as $info)
                <tbody>
                    <tr>
                        <td>{{$info->Système_dinformation}}</td>
                        <td>{{$info->Lien}}</td>
                        <td>{{$info->Login_administrateur}}</td>
                        <td>{{$info->Motdepasse_administrateur}}</td>
                        <td>{{$info->Login_utilisateur}}</td>
                        <td>{{$info->Motdepasse_utilisateur}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route('modifie6',$info->id)}}" class="mt-3">
                                <img src="/modifier.png" class="img1" alt="Modifier">
                            </a>
                            <form action="{{route('deletesysinfo', $info->id)}}" method="post" class="ms-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn mt-1">
                                    <img src="/supprimer.png" class="img2" alt="Supprimer">
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <a href="{{ route('guide') }}">
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