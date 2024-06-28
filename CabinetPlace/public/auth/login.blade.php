<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <!-- Bootstrap CSS -->
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
        <h2 class="text-center mb-4">Connexion</h2>
        
        <form action="/loginauthent_users_formul" method="post" id="loginForm">
          <div class="form-group">
            <label for="loginUsername">Nom d'utilisateur:</label>
            <input
              type="email"
              class="form-control"
              id="loginUsername"
              name="Email"
              required
            />
          </div>
          <div class="form-group">
            <label for="loginPassword">Mot de passe:</label>
            <input
              type="password"
              class="form-control"
              id="loginPassword"
              name="password"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary btn-block">
            Se connecter
          </button>
          <a href="/password_oublie">mot de passe oublié</a>
        </form>
        <p id="login-error-message" class="text-danger text-center mt-3"></p>
        <p class="text-center mt-3">
          <a href="/registerauthent_users_formul">Créer un compte</a>
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
