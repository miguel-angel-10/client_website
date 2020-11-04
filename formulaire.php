<!-- formulaire page -->
<?php
  
  if( isset(  $_POST['submit']  ) ) {
    echo $_POST['email'].'<br/>';
    echo $_POST['password'];

    # check si email et valid
  }

?>

<!DOCTYPE html>
<html lang="fr">

  <?php include( 'templates/header.php' ); ?>

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