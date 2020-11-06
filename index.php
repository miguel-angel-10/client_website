<?php 
  if( session_status() == PHP_SESSION_NONE ) {
    session_start();
   # $_SESSION['email'] = $_POST['email'];
  } else {
    $email = $_SESSION['email'] ;
  }
?>
<!DOCTYPE html>
<html lang="fr">

  
<!-- fichier php  -->

<?php include( 'templates/header.php' ); ?> 


<div class="imgpara">

<div class="image-gal">
  <img src="assets/img/daniel.jpg" alt="">
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis reiciendis reprehenderit dolorem! Quasi dolores iusto nobis corporis quas quidem.
  </p>
</div>

<div class="image-gal">
  <img src="assets/img/tendeuse.jpg" alt="">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi eveniet sapiente rerum similique pariatur nulla quia, ut cupiditate expedita.
  </p>
</div>

<div class="image-gal">
  <img src="assets/img/tuyau.jpg" alt="">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sunt voluptatum esse praesentium voluptatem perspiciatis, blanditiis consequuntur deserunt dolorum doloremque!
  </p>

</div>

</div>
 

  <?php include( 'templates/footer.php' ); ?>

</html>