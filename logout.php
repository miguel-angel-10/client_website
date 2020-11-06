<?php
  session_start();
  session_unset();
  session_destroy();
  header( 'location: index.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Loggout</title>
</head>
<body>

  <div class="container">
    <div class="alert alert-success" role="alert">
       Déconnecté(e) Succesfully!
    </div>
  </div>
  
</body>
</html>