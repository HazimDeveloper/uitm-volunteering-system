<?php 
session_start();
include 'config.php';

$name = $_SESSION['user_name'];
$sql_user = mysqli_query($connect,"SELECT * FROM user_form WHERE name = '$name'");
$data_user = mysqli_fetch_assoc($sql_user);
$id = $data_user['id'];
$id_event = $_GET['id'];

$select_event = mysqli_query($connect,"SELECT * FROM user_event WHERE id_event = $id_event AND id_user = $id");

if(mysqli_num_rows($select_event) == 0){
$insert_event = mysqli_query($connect,"INSERT INTO `user_event`(`id_event`, `id_user`,`status`) VALUES ('$id_event','$id','joined')");

if($insert_event){
    header("location: event.php");
}else{
    echo "sql error";
}
}else{
    echo "<script>alert('You already join this event!!')</script>"; 
    echo "<script>window.location = 'event.php'</script>"; 
}
?>