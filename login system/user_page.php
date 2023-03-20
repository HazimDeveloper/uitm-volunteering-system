<?php
	$hostname = "localhost:3307";
	$username = "root";
	$password = "";
	$dbname = "mysvs.uitm";
			
	//connect to phpmyadmin
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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome </h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>