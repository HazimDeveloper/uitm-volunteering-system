<?php 
session_start();
include 'config.php';

$id_event = $_GET['id_event'];
$select_data_event = mysqli_query($connect,"SELECT *,user_event.status as a FROM user_event  JOIN event ON user_event.id_event = event.id_event JOIN user_form ON user_event.id_user = user_form.id WHERE user_event.id_event = $id_event");
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
  

  <title>List Student</title>
  </head>
  <body>

<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark mb-2">
  <span class="navbar-brand mb-0 h1 text-light">List Student Join Event</span>
  <a href="officer_page.php" class="btn btn-primary">Back</a>
</nav>

   
  <table id="example" class="table table-striped table-bordered ml-0 ">
        <thead>
            <tr>
                <th>No . </th>
                <th>Title Event</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Campus</th>
                <th>Phone</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($select_data_event)) {?>
            <tr>
                <td><?= $i?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['sID'] ?></td>
                <td><?= $row['campus'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['course_name'] ?></td>
                <td><?= $row['course_code'] ?></td>
                <td><?= $row['a'] ?></td>
        </tr>
    <?php 
$i++;
} ?>    
    </tbody>
        <tfoot>
            <tr>
                <th>No . </th>
                <th>Title Event</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Campus</th>
                <th>Phone</th>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
    <input type="button" id="btnExport" class="btn btn-dark text-light text-center ml-3" value="Convert To PDF" onclick="Export()" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('example'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>