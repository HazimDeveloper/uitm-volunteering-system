<?php
session_start();

include 'config.php';
$id_event = $_GET['id_event'];

if(isset($_POST['submit'])){

    $img = $_POST['img-event'];
    $date = $_POST['date'];
    $time_start = $_POST['time-start'];
    $time_end = $_POST['time-end'];
    $place = $_POST['place'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

$update_event = mysqli_query($connect,"UPDATE `event` SET `img_event`='$img',`date`='$date',`time_start`='$time_start',`time_end`='$time_end',`place`='$place',`title`='$title',`description`='$desc' WHERE id_event = $id_event");

if($update_event){
    header("location: officer_page.php");
}else{
    echo "sql error";
}

}

$select_event = mysqli_query($connect,"SELECT * FROM event WHERE id_event = $id_event");
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
    <label for="exampleInputEmail1" class="form-label">Image Event</label>
    <input type="file" class="form-control" id="date" name="img-event" value="<?= $res_event['img_event']?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" value="<?= $res_event['date'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Time Start</label>
    <input type="time"  class="form-control" id="time-start" value="<?= $res_event['time_start'] ?>" name="time-start" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Time End</label>
    <input type="time"  class="form-control" name="time-end" value="<?= $res_event['time_end'] ?>" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Place</label>
    <input type="text" name="place"  class="form-control" id="exampleInputPassword1" value="<?= $res_event['place'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputPassword1" value="<?= $res_event['title'] ?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="<?= $res_event['description'] ?>" required>
  </div>
  <a href="officer_page.php" class="btn btn-primary">Cancel</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div><!-- /.container -->
</body>
</html>