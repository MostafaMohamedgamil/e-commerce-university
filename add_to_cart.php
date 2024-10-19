<?php
session_start();
include('config.php');
    $ID = $_POST['id'];
    $TYPE = $_POST['type'];
    $QUAN = $_POST['quantity'];
    $up=mysqli_query($con,"select * from prod where id = '$ID'");
    $data=mysqli_fetch_array($up);
    $query="SELECT * FROM cart WHERE prod_id = '$data[id]'";
    $result=mysqli_query($con,$query);
	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{
        $row=mysqli_fetch_assoc($result);
    mysqli_query($con,"UPDATE cart  SET quantity=quantity+1 WHERE prod_id = '$ID'");
    }else{
    mysqli_query($con,"insert into cart (prod_id,user_id,quantity) values ('$data[id]',$_SESSION[user_id],$QUAN)");
    }
    header("location:Products-info.php? id=$ID & type=$TYPE & msg=2")
?>