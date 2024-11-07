<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="logo.jpeg" type="image/x-icon">
  <style>
    .large-text {
      font-size: 30px;
    }
    .custom-logo {
    max-width: 150px; /* Limite la taille maximale de l'image */
    width: 100%; /* S'adapte à la largeur du conteneur */
  }
  </style>
</head>

<body>

<header class="mt-5">
  <div class="container">
    <div class="row align-items-center m-3">
      <div class="col-12 col-md-9 text-center text-md-start">
        <p class="fw-bold">
          Royaume du Maroc<br>Ministère de l'intérieur<br>Province de Safi<br>SSICTD
        </p>
      </div>
      <div class="col-12 col-md-3 text-center">
        <img class="m-3 mt-2 img-fluid custom-logo" src="/logo.jpeg" alt="logo" />
      </div>
    </div>
    <div>
      <p class="text-center large-text text-primary">
        Gestion des mots de passe <br> et guides utilisateurs
      </p>
    </div>
  </div>
</header>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card">
        <div class="card-header text-center">
          Connexion
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('log_in') }}">
            @csrf
            <div class="mb-3">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
              @error('login')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
              @error('password')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>