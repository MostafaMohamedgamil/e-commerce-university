<?php
include('config.php');
	session_start();
    #لو استقبلت قيم من اب لود عن طريق ميثود بوست نفذ الكلام الي تحت ده
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
    $insert   = "INSERT INTO user (first_name,last_name,email,password,general_id) VALUES ('$first','$last','$EMAIL','$hashedpass',1)";
    mysqli_query($con,$insert);
        header('location: AddProducts.php');
        exit();}
    elseif(mysqli_num_rows($result1)==1)
	{
        header('location: signup.php?msg=2');
	}
}
?>