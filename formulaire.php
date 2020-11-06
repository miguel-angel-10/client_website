<!-- formulaire page -->
<?php

  if( isset(  $_POST['submit']  ) ) {

    # check session. starts session if not initialized
    if( session_status() == PHP_SESSION_NONE ) {
      session_start();
      $_SESSION['email'] = $_POST['email'];
    }

    header( 'location: dashboard.php' ); 

  } else {
    header( 'location: dashboard.php' );
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/formulaire.css">
</head>

 <form class="form-signin" action="formulaire.php" method="POST" >
  <h1 class="h3 mb-3 font-weight-normal">Connectez vous</h1>

  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="ex. prenom@mail.com" required autofocus>

  <label for="inputPassword" class="sr-only">Mot de pass</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de pass" required>

  <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Connexion">
  
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>


  
</body>
</html>