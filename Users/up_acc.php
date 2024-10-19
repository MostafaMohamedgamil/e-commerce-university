<?php
include('config.php');
session_start();
if(isset($_POST['update'])){
    $ID    = $_SESSION['user_id'];
    $FNAME  = $_POST['fname'];
    $LNAME  = $_POST['lname'];
    $EMAIL = $_POST['email'];
    $ADDRESS = $_POST['address'];
    $NUMBER = $_POST['number'];
    $update   = "update user set first_name='$FNAME',last_name='$LNAME' , email='$EMAIL' , address='$ADDRESS', Number='$NUMBER' where id=$ID";
    mysqli_query($con,$update);
}
header('location:../Main.php');
?>