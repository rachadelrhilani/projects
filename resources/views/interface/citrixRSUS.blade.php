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
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="border border-primary">
                <h1 class="text-center text-primary">Systèmes réseaux</h1>
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
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between">
                <a href="{{route('go')}}">
                    <button type="button" class="btn btn-primary mb-2 w-100 w-md-auto">Switch</button>
                </a>
                <a href="{{route('citrix')}}">
                    <button type="button" class="btn btn-primary mb-2 w-100 w-md-auto">Ancien citrix</button>
                </a>
                <a href="{{route('citrixBEC')}}">
                    <button type="button" class="btn btn-primary mb-2 w-100 w-md-auto">Citrix BEC</button>
                </a>
                <a href="{{route('citrixRSUS')}}">
                    <button type="button" class="btn btn-primary mb-2 w-100 w-md-auto">Citrix RSUS</button>
                </a>
                <a href="{{route('archi')}}">
                    <button type="button" class="btn btn-primary mb-2 w-100 w-md-auto">Architecture Réseau</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <a href="{{route('ajoute4')}}">
                <button type="button" class="btn btn-primary w-50">Ajouter</button>
            </a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">AALS/CAIDAT</th>
                            <th scope="col">ADDRESS IP</th>
                            <th scope="col">LOGIN</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citrixes as $citrix)
                        <tr>
                            <td>{{ $citrix->AALS_CAIDAT }}</td>
                            <td>{{ $citrix->ADDRESS_IP }}</td>
                            <td>{{ $citrix->LOGIN3 }}</td>
                            <td>{{ $citrix->PASSWORD3 }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{route('modifie4', $citrix->id)}}" class="me-2">
                                    <img src="/modifier.png" class="img1" alt="Modifier">
                                </a>
                                <form action="{{route('RSUSDelete', $citrix->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn p-0">
                                        <img src="/supprimer.png" class="img2" alt="Supprimer">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $citrixes->links()}}
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
  function printPage() {
            window.print();
   }
</script>