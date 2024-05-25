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
  </style>
</head>

<body>
  <header class="mt-5">
    <div>
      <p class="text-center large-text text-primary">Gestion des mots de passe <br> et guides utilisateurs</p>
    </div>
  </header>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Connexion
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('log_in') }}">
              @csrf
              <div class="mb-3">
                <label for="login" class="form-label">login</label>
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
              <button type="submit" class="btn btn-primary mt-3 ">Se connecter</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>