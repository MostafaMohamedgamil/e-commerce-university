<?php
    include('config.php');
    $ID = $_GET['id'];
    $up=mysqli_query($con,"delete from prod where id = '$ID'");
    header('location:Products.php')
?>