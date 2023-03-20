<?php 
session_start();
include 'config.php';

$name = $_SESSION['user_name'];
$sql_user = mysqli_query($connect,"SELECT * FROM user_form WHERE name = '$name'");
$data_user = mysqli_fetch_assoc($sql_user);
$id_user = $data_user['id'];
$id_event = $_GET['id_event'];

$delete_event = mysqli_query($connect,"UPDATE `user_event` SET status = 'cancel' WHERE id_event = $id_event AND id_user = $id_user");

if($delete_event){

    header("location: event.php");
}else{
    echo "SQL error";
}