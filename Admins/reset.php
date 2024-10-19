<?php
include('config.php');
if(isset($_POST['reset'])){
    $EMAIL  = $_POST['email'];
    $PASSWORD=$_POST['password'];
    $hashedpass=sha1($PASSWORD);

	//check for exist user email
	$query1="SELECT * FROM user WHERE email LIKE '$EMAIL'";
	$result1=mysqli_query($con,$query1);
	if(mysqli_num_rows($result1)==1)
	{

    $update="update user set password = '$PASSWORD' where email = '$EMAIL'";
    mysqli_query($con,$update);
    header('location:login.php');
    }elseif(mysqli_num_rows($result1)==0){
        header('location: reset password.php?msg=2');
    }
}
?>