<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> inscription</title>
    <!-- Bootstrap CSS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"
      integrity="sha512-43iShtbiyImxjjU4a9rhXBy7eKtIsrpll8xKhe1ghKqh5NyfME8phZs5JRFZpRBe1si44WM3tNmnqMym7JRmDQ=="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"
      integrity="sha512-43iShtbiyImxjjU4a9rhXBy7eKtIsrpll8xKhe1ghKqh5NyfME8phZs5JRFZpRBe1si44WM3tNmnqMym7JRmDQ=="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css"
      integrity="sha512-aqT9YD5gLuLBr6ipQAS+72o5yHKzgZbGxEh6iY8lW/r6gG14e2kBTAJb8XrxzZrMOgSmDqtLaF76T0Z6YY2IHg=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css"
      integrity="sha512-aqT9YD5gLuLBr6ipQAS+72o5yHKzgZbGxEh6iY8lW/r6gG14e2kBTAJb8XrxzZrMOgSmDqtLaF76T0Z6YY2IHg=="
      crossorigin="anonymous"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div
      class="container d-flex align-items-center justify-content-center vh-100"
    >
      <div class="card shadow p-4">
        <h2 class="text-center mb-4">Inscription</h2>

      
        
        <form
          action="/registerauthent_users_formul"
          method="post"
          id="registerForm"
        >
          <div class="form-group">
            <label for="registerUsername">email:</label>
            <input
              type="email"
              class="form-control"
              id="Email"
              name="Email"
              required
            />
          </div>
          <div class="form-group">
            <label for="registerPassword">Mot de passe:</label>
            <input
              type="password"
              class="form-control"
              id="registerPassword"
              name="password"
              required
            />
          </div>
          <button type="submit" class="btn btn-success btn-block">
            S'inscrire
          </button>
        </form>
        <p id="register-error-message" class="text-danger text-center mt-3"></p>
        <p class="text-center mt-3">
          <a href="/inscrauthent_users_formul">Déjà un compte ? Se connecter</a>
        </p>
      </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
