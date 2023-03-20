<?php
session_start();

include 'config.php';
   

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = '$email' && password = '$pass'";

    $result= mysqli_query($connect,$sql);

    if(mysqli_num_rows($result) > 0){

            header('location: admin_page.php');
          
    }else{
        $error[] = 'incorrect email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
<link rel="stylesheet" href="login system/css/style.css">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login Admin</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
	  <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
     
   </form>

</div>

</body>
</html>