<?php
include('config.php');
if(isset($_POST['update'])){
    $ID    = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE        = $_FILES['image'];
    $image_format = $_FILES["image"]["tmp_name"];
    $image_name   = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update   = "update prod set name='$NAME' , price='$PRICE' , image='$image_up' where id=$ID";
    mysqli_query($con,$update);
    #Check if photo uploaded or not
    if(move_uploaded_file($image_format,$image_up)){
        echo"<script>alert('done')</script>";
    }else{
        echo"<script>alert('wrong')</script>";
    }
}
header('location:Products.php')
?>