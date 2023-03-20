<<?php
   $hostname = "localhost:3307";
   $username = "root";
   $password = "";
   $dbname = "MYSVS.UITM";
   
   $connect = mysqli_connect($hostname, $username, $password, $dbname)
      OR DIE ("Connection failed!");
   
if(isset($_POST['submit'])){

   $name = $_POST["name"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   $pass = $_POST["password"];
   $cpass = $_POST["cpassword"];
   $user_type = $_POST['user_type'];

  

   $sql = "INSERT INTO user_form (name, email,  address, pass, cpass, user_type)
    VALUES ('$name','$email','$address', '$pass', '$cpass','$user_type')";
    
     $sendsql = mysqli_query($connect, $sql);
     
     if($sendsql){
      echo 
      '
       <script>
        alert("You have successfully registered!");
       </script>
      ';
      header("Location: login_form.php");
     }
     else{
      echo "Query failed!";
     }
    
   }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your full name">
      <input type="email" name="email" required placeholder="enter your email">
    <input type="address" name="address" required placeholder="enter your address">
    <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>