<?php
    include('config.php');
    if($ID = $_GET['prod_id']){
    $up=mysqli_query($con,"delete from cart where prod_id = '$ID'");
}elseif($ID = $_GET['user_id']){
    $up=mysqli_query($con,"delete from cart where user_id = '$ID'");}
    header('location:Cart.php')
?>