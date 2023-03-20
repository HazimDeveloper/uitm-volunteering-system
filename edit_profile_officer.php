<?php
session_start();

include 'config.php';
$id_officer = $_SESSION['id_officer'];

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $staff_id = $_POST['staff_id'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $uitm_branches = $_POST['uitm_branches'];
    $address = $_POST['address'];
    // $desc = $_POST['description'];

$update_event = mysqli_query($connect,"UPDATE `officer` SET `staff_id`='$staff_id',`username`='$username',`email`='$email',`department`='$department',`uitm_branches`='$uitm_branches',`address`='$address' WHERE id_officer = $id_officer");

if($update_event){
    header("location: officer_page.php");
}else{
    echo "sql error";
}

}

$select_event = mysqli_query($connect,"SELECT * FROM officer WHERE id_officer = $id_officer");
$res_event = mysqli_fetch_assoc($select_event);
// var_dump($res)
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
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="date" name="username" value="<?= $res_event['username']?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Staff ID</label>
    <input type="text" class="form-control" id="date" name="staff_id" value="<?= $res_event['staff_id'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="date" name="email" value="<?= $res_event['email'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department</label>
    <input type="text"  class="form-control" id="time-start" value="<?= $res_event['department'] ?>" name="department" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">UITM Branches</label>
    <input type="text"  class="form-control" name="uitm_branches" value="<?= $res_event['uitm_branches'] ?>" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <textarea class="form-control" placeholder="Your Address" name="address" id="floatingTextarea2" style="height: 100px"><?= $res_event['address'] ?></textarea>
    <!-- <input type="text" name="place"  class="form-control" id="exampleInputPassword1" value="<?= $res_event['address'] ?>" required> -->
  </div>
  <a href="officer_page.php" class="btn btn-primary">Cancel</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
</form>
</div>
</div><!-- /.container -->
</body>
</html>