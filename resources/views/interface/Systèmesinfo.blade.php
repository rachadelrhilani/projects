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
      <div class="col-md-11">
        <div class="border border-primary">
          <h1 class="text-center text-primary">Systèmes d'information</h1>
        </div>
      </div>
      <div class="col-md-1 mt-2"><a href="{{route('Déconnection')}}"><button type="button" class="btn btn-warning">Déconnexion</button></a></div>
    </div>
  </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
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
            <input type="submit" class="btn btn-primary mt-3" name="envoye" value="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-start">
      <div class="col-md-12">
        <div class="row w-100">
          <div class="col-8">
            <a href="{{route('ajoute6')}}"><button type="button" class="btn btn-primary me-2 w-50">Ajouter</button></a>
          </div>
          <div class="col-4"> <input type="text" class="form-control w-100" placeholder="Rechercher...">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <div class="row justify-content-center w-100">
      <div class="col-md-11">
        <table class="table border">
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
              <td class="d-flex">
                <a href="{{route('modifie6',$info->id)}}" class="mt-3"><img src="/modifier.png" class="img1" alt=""></a>
                <form action="{{route('deletesysinfo', $info->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn mt-1"><img src="/supprimer.png" class="img2" alt=""></button>
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
    <div class="row justify-content-start">
      <div class="col-md-12">
        <div class="row w-100">
          <div class="col-8 mE-3 mb-3">
            <a href="{{ route('guide') }}">
              <button type="button" class="btn btn-primary me-2 w-25">Guide</button>
            </a>
          </div>
          <div class="col-4"> <a href="/guide.docx"><button type="button" class="btn btn-success me-2 w-50">télecharger</button></a>
          </div>
        </div>
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
</script>