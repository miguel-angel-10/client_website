<?php
  # check session. starts session if not initialized
  session_start();
  if( session_status() == PHP_SESSION_NONE ) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $email = $_SESSION['email'] ;
  }
  

  # connect to db
  $conn = new PDO( 'mysql:host=localhost;dbname=employees', 'root', '' );
  # test if connected
  if( !$conn ){
    echo 'pas connection';
    print_r( $conn->errorInfo() );
  }

  # prepare sql query
  $sql = $conn->prepare( 'SELECT * FROM employee');

  $sql->execute();

  $result = $sql->fetchAll( PDO::FETCH_ASSOC );

  $conn = NULL;
  $sql = NULL;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/dashboard.css" type="text/css">
<link rel="stylesheet" href="assets/css/clientjardin.css" type="text/css">

  <title>Dashboard</title>
</head>
<body>

  <div class="navbar navig">
    <a class="navbar-brand" href="index.php">M&co</a>
</div>

    <h1>Dashboard</h1>
    <p> <?php echo htmlspecialchars( $email ) ?> </p>
    <p><a class="btn alert-warning" href="logout.php">Déconnexion</a></p>
  
  <section class="containe">
    <aside>
      <h3>USERS</h3>
      <ul>
        <?php foreach ($result as $key => $value) : ?>
          
        
        <li class="users-card">
            <i class="fas fa-user-circle"></i>
        
          <div class="user-description">
            <p class="user-name"> <?php echo $value['emplo_name'] ?> </p>
            <p class="status"> offline</p>
          </div>
        </li>
        <?php endforeach ?>
        
      </ul>
    </aside>

    <div id="container-box" style="width: 100%;">
      <table class="table table-striped table-hover table-sm table-responsive-sm">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col"> Prenom</th>
            <th scope="col">Nom </th>
            <th scope="col">Position </th>
            <th scope="col">email </th>
          </tr>
        </thead>
      <?php foreach( $result as $employee ) : ?>
        <tbody >
    
        <tr>
          <th scope="row"><?php echo $employee['id'] ?></th>
          <td> <?php echo $employee['emplo_name'] ?> </td>
          <td class="table-striped"> <?php echo $employee['emplo_lastname'] ?> </td>
          <td> <?php echo $employee['position'] ?> </td>
          <td> <?php echo $employee['email'] ?> </td>
        </tr>
      <?php endforeach ?>
        </tbody>
      </table>
    </div>
    

  </section>
 

   <?php include( 'templates/footer.php' ); ?>

</body>
</html>





