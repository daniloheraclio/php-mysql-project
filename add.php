<?php 

include('config/db_connect.php');

$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

   if(isset($_POST['submit'])){

      // Check email
      if(empty($_POST['email'])){
         $errors['email'] = 'An email is required <br />';
      } else {
         $email = $_POST['email'];
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
         }
      }

      // Check title
      if(empty($_POST['title'])){
         $errors['title'] = 'A title is required <br />';
      } else {
         $title = $_POST['title'];
         if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'title must be letters and spaces only';
         }
      }

      // Check ingredients
      if(empty($_POST['ingredients'])){
         $errors['ingredients'] = 'At least one ingredient is required <br />';
      } else {
         $ingredients = $_POST['ingredients'];
         if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be comma separeted list';
         }
      }
      
      // array_filter() is a php method.
      // We can pass a callback function but if we didn't, it gonna cycle throw and if
      // all the positions and that array are empty (or false) is gonna return True
      // If not find error is gonna return False

      if(array_filter($erros)){
         // echo 'errors in the form';
      } else {
         // echo 'form is valid';

         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $title = mysqli_real_escape_string($conn, $_POST['title']);
         $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

         // create sql
         $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

         // save to DB and check
         if(mysqli_query($conn, $sql)){
            // success
            // redirect to index.php
            header('Location: index.php');
         } else {
            // show error
            echo 'query error ' . mysqli_error($conn);
         }

      }
      
   }

?>

<!DOCTYPE html>
<html lang="en">

   <?php include('templates/header.php'); ?>

   <section class="container grey-text">
   <h4 class="center">Add a Pizza</h4>
   <form class="white" action="add.php" method="POST">
      <label for="email">Your email:</label>
      <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
      <div class="red-text"> <?php echo $errors['email']; ?> </div>
      <label for="title">Pizza Title:</label>
      <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
      <div class="red-text"> <?php echo $errors['email']; ?> </div>
      <label for="ingredients">Ingredients: (comma separated):</label>
      <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
      <div class="red-text"> <?php echo $errors['email']; ?> </div>
      <div class="center">
         <input type="submit" value=" submit" name="submit" class="btn brand z-depth-0" >
      </div>
   </form>
   </section>

   <?php include('templates/footer.php'); ?>
    
</html>