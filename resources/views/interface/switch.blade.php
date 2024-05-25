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
          <h1 class="text-center text-primary">Systèmes réseaux</h1>
        </div>
      </div>
      <div class="col-md-1 mt-2"><a href="{{route('Déconnection')}}"><button type="button" class="btn btn-warning">Déconnexion</button></a></div>
    </div>
  </div>
  <div class="mt-5">
    <div class="row justify-content-center w-100">
      <div class="col-md-12 w-75">
        <div class="d-flex justify-content-between">
          <a href="{{route('go')}}"><button type="button" class="btn btn-primary">Switch</button></a>
          <a href="{{route('citrix')}}"><button type="button" class="btn btn-primary">Ancien citrix</button></a>
          <a href="{{route('citrixBEC')}}"><button type="button" class="btn btn-primary">Citrix BEC</button></a>
          <a href="{{route('citrixRSUS')}}"><button type="button" class="btn btn-primary">Citrix RSUS</button></a>
          <a href="{{route('archi')}}"><button type="button" class="btn btn-primary">Architecture Réseau</button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form method="POST" action="{{route('switchshow')}}">
          @csrf
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">Sélectionner une option :</label>
            <select name="choix" class="form-select" id="exampleFormControlSelect1">
              <option value="Fédérateur">Fédérateur</option>
              <option value="Salle de saisie">Salle de saisie</option>
              <option value="Passeport">Passeport</option>
              <option value="DBM-Bureau chef de division">DBM-Bureau chef de division</option>
              <option value="DBM-bureau CP">DBM-bureau CP</option>
              <option value="Bureau d'ordre 1">Bureau d'ordre 1</option>
              <option value="Bureau d'ordre 2">Bureau d'ordre 2</option>
              <option value="Promotion nationale">Promotion nationale</option>
              <option value="DAEC">DAEC</option>
              <option value="INDH">INDH</option>
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
            <a href="{{route('ajoute1')}}"><button type="button" class="btn btn-primary me-2 w-50">Ajouter</button></a>
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
              <th scope="col">Nom hôte</th>
              <th scope="col">Adresse Mac</th>
              <th scope="col">Port mural</th>
              <th scope="col">Interface</th>
              <th scope="col">VLAN</th>
              <th scope="col">login</th>
              <th scope="col">Motdepasse</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @if(isset($_POST['envoye']))
          @foreach($switches as $switch)
          <tbody>
            <tr>
              <td>{{$switch->Division}}</td>
              <td>{{$switch->Nom_hôte}}</td>
              <td>{{$switch->Adresse_Mac}}</td>
              <td>{{$switch->Port_mural}}</td>
              <td>{{$switch->Interface}}</td>
              <td>{{$switch->VLAN}}</td>
              <td>{{$switch->login}}</td>
              <td>{{$switch->Motdepasse}}</td>
              <td class="d-flex">
                <a href="{{route('modifie1',$switch->id)}}" class="mt-3"><img src="/modifier.png" class="img1" alt=""></a>
                <form action="{{route('switchdelete',$switch->id)}}" method="post">
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
          <a href="{{route('guide')}}"><button type="button" class="btn btn-primary me-2 w-25">Guide</button></a>
          </div>
          <div class="col-4"> <button type="button" class="btn btn-success me-2 w-50">télecharger</button>
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