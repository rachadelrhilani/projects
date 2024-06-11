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
    <div class="row justify-content-start">
      <div class="col-md-12">
        <div class="row w-100">
          <div class="col-8">
            <a href="{{route('ajoute2')}}"><button type="button" class="btn btn-primary me-2 w-50">Ajouter</button></a>
          </div>
          <div class="col-4">
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
              <th scope="col">Entité</th>
              <th scope="col">Chef Entity</th>
              <th scope="col">Login</th>
              <th scope="col">Nouveau login</th>
              <th scope="col">Password</th>
              <th scope="col">Colaborateur</th>
              <th scope="col">Login</th>
              <th scope="col">Nouveau Login</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $citrixes as $citrix )
            <tr>
              <td>{{ $citrix->Entité }}</td>
              <td>{{ $citrix->Chef_Entity }} </td>
              <td>{{ $citrix->Login }} </td>
              <td>{{ $citrix->Nouveau_login1 }} </td>
              <td>{{ $citrix->Password1 }} </td>
              <td>{{ $citrix->Colaborateur }} </td>
              <td>{{ $citrix->Login2 }} </td>
              <td>{{ $citrix->Nouveau_Login2 }} </td>
              <td>{{ $citrix->Password2 }}</td>
              <td class="d-flex">
                <a href="{{route('modifie2',$citrix->id)}}" class="mt-3"><img src="/modifier.png" class="img1" alt=""></a>
                <form action="{{route('delete_ancien', $citrix->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn mt-1"><img src="/supprimer.png" class="img2" alt=""></button>
                </form>
              </td>
              @endforeach
            </tr>
          </tbody>
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
         <!--  telechargement -->
          <div class="col-4"> <button type="button" class="btn btn-success me-2 w-50" onclick="window.print()">télecharger</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
  function printPage() {
            window.print();
   }
</script>