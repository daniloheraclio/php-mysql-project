<?php 

   // if(isset($_GET['submit'])){
   //    echo $_GET['email'];
   //    echo $_GET['title'];
   //    echo $_GET['engredients'];
   // }

   if(isset($_POST['submit'])){
      echo $_POST['email'];
      echo $_POST['title'];
      echo $_POST['engredients'];
   }

?>

<!DOCTYPE html>
<html lang="en">

   <?php include('templates/header.php'); ?>

   <section class="container grey-text">
   <h4 class="center">Add a Pizza</h4>
   <form class="white" action="add.php" method="POST">
      <label for="email">Your email:</label>
      <input type="text" name="email">
      <label for="title">Pizza Title:</label>
      <input type="text" name="title">
      <label for="engredients">Ingredients: (comma separated):</label>
      <input type="text" name="engredients">
      <div class="center">
         <input type="submit" value=" submit" name="submit" class="btn brand z-depth-0" >
      </div>
   </form>
   </section>

   <?php include('templates/footer.php'); ?>
    
</html>