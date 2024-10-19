<?php
include('config.php');
session_start();
if(isset($_SESSION['Username']))
{
header('location: Main.php');
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $useremail=$_POST['user-email'];
    $password=$_POST['user-password'];
    $hashedpass=sha1($password);
    
    $query="SELECT * FROM user WHERE email ='$useremail' AND password ='$hashedpass' ";

	//running the serch in DB and storing in $result
	$result=mysqli_query($con,$query);

	//function to return the number of rows in $result

	$num_rows=mysqli_num_rows($result);
	if($num_rows==1)
	{
        //correct login
		//retriving session name
		$row=mysqli_fetch_assoc($result);
        $_SESSION['fname']=$row['first_name'];
		$_SESSION['lname']=$row['last_name'];
		$_SESSION['email']=$row['email'];
		$_SESSION['user_id']=$row['id'];
        if($row['general_id']==1){
        header('location: ../Admins/products.php');
        exit();
    }else{
        header('location: ../Main.php');
    }
    }
	else
	{	
        //incorrect login
		//redirect
		header('Location: login.php');
	}

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Log in page">

    <!-- Bootstrab -->
    <link rel="stylesheet" href="../Users/css/bootstrap.min.css">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../Users/css/login.css">
</head>

<body>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> // To Send The Data To This Page
            <div>
                <span>
                    <h3>Log in</h3>
                </span>
            </div>

            <div class="ooo">
                <input type="email" name="user-email" placeholder="Email" required>
            </div>

            <div class="ooo">
                <input type="password" name="user-password" placeholder="Password" required minlength="6">
            </div>
            <div class="login">
                <input type="submit" value="Log in" name="Login">
            </div>
            <div class="need">
                <span> Need an account? </span>
                <a href="Signup.php" title="Sign up">Sign up</a>
            </div>
        </form>
        <span>
            <a href="reset password.php" title="Forgotten password"><small>Forgot password?</small></a>
        </span>
    </section>
</body>

</html>