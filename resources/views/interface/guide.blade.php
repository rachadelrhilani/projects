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
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="border border-primary">
          <h1 class="text-center text-primary">Systèmes réseaux</h1>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="mt-5 ms-5">
        <h3>Guide 1</h3>
        <a href="/guide1.pdf" class="btn btn-primary" download>Télécharger Guide 1 PDF</a>
    </div>
    <div class="mt-5 ms-5">
        <h3>Guide 2</h3>
        <a href="/guide2.pdf" class="btn btn-primary" download>Télécharger Guide 2 PDF</a>
    </div>
    <div class="mt-5 ms-5">
        <h3>Guide 3</h3>
        <a href="/guide3.pdf" class="btn btn-primary" download>Télécharger Guide 3 PDF</a>
    </div>
</div>
</body>
</html>