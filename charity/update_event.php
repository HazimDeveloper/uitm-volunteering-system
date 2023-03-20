<?php 
session_start();
include 'config.php';

$name = $_SESSION['user_name'];
$sql_user = mysqli_query($connect,"SELECT * FROM user_form WHERE name = '$name'");
$data_user = mysqli_fetch_assoc($sql_user);
$id = $data_user['id'];
$id_event = $_GET['id'];
$insert_event = mysqli_query($connect,"INSERT INTO `user_event`(`id_event`, `id_user`) VALUES ('$id_event','$id')");

if($insert_event){
    header("location: event.php");
}else{
    echo "sql error";
}
?>