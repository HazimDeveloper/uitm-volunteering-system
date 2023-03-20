<?php 
session_start();
include 'config.php';

$id_officer = $_SESSION['id_officer'];
$select_data_event = mysqli_query($connect,"SELECT * FROM event WHERE id_officer = $id_officer");
$i =1;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
  

  <title>Officer Page</title>
  </head>
  <body>

<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark mb-2">
  <span class="navbar-brand mb-0 h1 text-light">Welcome Officer</span>
  <a href="login_officer.php" class="btn btn-primary">Logout</a>
</nav>

<a href="create_event.php" class="btn btn-success m-3">Create Event</a>
   
  <table id="example" class="table table-striped table-bordered ml-0 ">
        <thead>
            <tr>
                <th>No . </th>
                <th>Image Event</th>
                <th>Date</th>
                <th>Time Start</th>
                <th>Time End</th>
                <th>Place</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($select_data_event)) {?>
            <tr>
                <td><?= $i?></td>
                <td><img src="img/<?= $row['img_event'] ?>" width="100px" height="100px" alt=""> </td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['time_start'] ?></td>
                <td><?= $row['time_end'] ?></td>
                <td><?= $row['place'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['status'] ?></td>
         
        </tr>
    <?php 
$i++;
} ?>    
    </tbody>
        <tfoot>
            <tr>
                <th>No . </th>
                <th>Image Event </th>
                <th>Date</th>
                <th>Time Start</th>
                <th>Time End</th>
                <th>Place</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>