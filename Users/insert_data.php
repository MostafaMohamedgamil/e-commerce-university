<?php
include('config.php');
	session_start();
if(isset($_POST['upload'])){
    $first  = $_POST['first_name'];
    $last  = $_POST['last_name'];
    $EMAIL  = $_POST['email'];
    $PASSWORD  = $_POST['password'];
    $hashedpass=sha1($PASSWORD);

	//check for already registerd user
	$query1="SELECT * FROM user WHERE email LIKE '$EMAIL'";
	$result1=mysqli_query($con,$query1);
	if(mysqli_num_rows($result1)==0)
	{
	//push data to the DB
    $_SESSION['fname']=$first;
    $_SESSION['lname']=$last;
    $_SESSION['email']=$EMAIL;
    $insert   = "INSERT INTO user (first_name,last_name,email,password) VALUES ('$first','$last','$EMAIL','$hashedpass')";
    $result=mysqli_query($con,$insert);
    $query="SELECT * FROM user WHERE email LIKE '$EMAIL'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
    $_SESSION['user_id']=$row['id'];
    header('location:../Main.php?');
    } elseif(mysqli_num_rows($result1)==1)
	{
        header('location: signup.php?msg=2');
	}
}
?>