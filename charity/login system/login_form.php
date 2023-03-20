<<?php
   $hostname = "localhost:3307";
   $username = "root";
   $password = "";
   $dbname = "MYSVS.UITM";
   
   $connect = mysqli_connect($hostname, $username, $password, $dbname)
      OR DIE ("Connection failed!");
   

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user_form WHERE email = '$email' && pass = '$pass'";

    $result= mysqli_query($connect,$sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');
        }else if($row['user_type'] == "user"){
            $_SESSION['user_name'] = $row['name'];
            header("location: user_page.php");
        }
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

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
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
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>