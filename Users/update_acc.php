<?php
    include 'config.php';
    session_start();
    $ID    = $_SESSION['user_id'];
    $up=mysqli_query($con,"select * from user where id = '$ID'");
    $data=mysqli_fetch_array($up);
    
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/up.css">
<section>
    <center>
        <form action="up_acc.php" method="post">
            <h3>
                Edit Your Account Profile
            </h3>
            <div class="profile-info">
                <input type="text" name="fname" value='<?php echo "$data[first_name]"?>' required>
                <br>
                <input type="text" name="lname" value="<?php echo $data['last_name']?>" required>
                <br>
                <input type="email" name="email" value="<?php echo $data['email']?>" required>
                <br>
                <input type="text" name="address" value="<?php echo $data['address']?>" required>
                <br>
                <input type="text" name="number" value="<?php echo $data['Number']?>" required>
            </div>
            <div class="update">
                <input type="submit" value="Update Profile " name="update">
            </div>
            <div class="">
                <button class="btn btn-danger text-center"><a href="../Main.php" title="">Return to Account
                        Page</a></button>
            </div>
        </form>
    </center>
</section>