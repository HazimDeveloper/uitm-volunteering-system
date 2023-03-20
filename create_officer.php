<?php
session_start();

include 'config.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cnfrm_pass = $_POST['cnfrm-pass'];

$select_officer = mysqli_query($connect,"SELECT * FROM officer WHERE email = '$email'");

if(mysqli_num_rows($select_officer) == 0){

$insert_officer = mysqli_query($connect,"INSERT INTO `officer`(`id_officer`, `username`, `email`, `pass`) VALUES ('','$username','$email','$pass')");

    if($insert_officer){
        header("location: admin_page.php");
    }else{
        echo "sql error";
    }
}else{
    echo "email already used";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create Event</title>
</head>
<style>
    form {
  width: 340px;
  max-width: 100%;
  border: 1px solid #ccc;
  padding: 1rem;
  background-color: #fff;
}

form:has(input:invalid) {
  /* border-color: #f44336; */
  outline: 0;
  box-shadow: 0 0 0 0.25rem #f4433677;
}

body {    
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;  
  flex-wrap: wrap;
  gap: 2rem;  
  min-height: 100vh;
  margin: 0;
  padding: 1rem;
  color: #333;
  font-family: 'Roboto', sans-serif;
  background-color: #eee;
}
</style>
<body>
    <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="username"  class="form-control" id="time-start" name="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email"  class="form-control" id="time-start" name="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  class="form-control" id="time-start" name="pass" required>
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password"  class="form-control" id="time-start" name="cnfrm-pass" required>
  </div>
  <a href="admin_page.php" class="btn btn-primary">Cancel</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div><!-- /.container -->
</body>
</html>