<?php

session_start();
include 'config.php';

$select_data_suggest = mysqli_query($connect,"SELECT * FROM volunteer_user");
$i =1;

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $event = $_POST['event'];
  $describe = $_POST['describe'];

  $insert_event = mysqli_query($connect,"INSERT INTO `event`(`id_event`, `id_officer`, `img_event`, `date`, `time_start`, `time_end`, `place`, `title`, `description`, `status`) VALUES ('','','','','','','','$event','$describe','available') ");

  if($insert_event){
header("location: officer_page.php");
  }else{
    echo "sql error";
  }
}
?>
<html>
  <head>
    <meta />
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" > 
</head>
  <style>
    body{
  margin: 0;
}

h1{
  font-family: Montserrat, sans-serif;
}
.post-container{
  width: 50%;
  height: 100%;
  margin: 0px auto 0px auto;
  background-color: #fffafa;
  font-size: 20px;
}
.post-container .date{
  font-family: Roboto, sans-serif;
  color: #008080;
}
.post-container .post-content{
  width: 90%;
  font-family: Open Sans, sans-serif;
  font-weight: normal;
}
.post-container .post{
  margin-left: 50px;
  padding-top: 20px;
  padding-left: 50px;
}
  </style>
  <body>
    
  
    <div class="post-container">
        <div class="" >
        <h1> Suggested Event From User</h1>  
    <a href="officer_page.php" class="btn btn-primary ml-3" >Back</a>
  <hr>
  </div>
  <?php while($row = mysqli_fetch_assoc($select_data_suggest)) {?>
  <div class="post">
    <form action="" method="POST">
      <input type="text" class="name form-control mb-3" name="name" value="<?= $row['name'] ?>" id="">
      <input type="text" class="name form-control mb-3" name="event" value="<?= $row['event'] ?>" id="">
        <!-- <p class="name"></p><p> -->

        <!-- </p><h1></h1> -->
        <div class="post-content">
          <input type="text" name="describe" class="form-control mb-3"  value="<?= $row['describe'] ?>" id="">
          <input type="text" name="link" class="form-control mb-3" value="<?= $row['link'] ?>" id="">
          <!-- <p></p> -->
          <!-- <p></p>	 -->
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
          </form>
        </div>
      </h1></div>
      <hr />
      <?php } ?>        
      
    </div>        
  </body>
</html>