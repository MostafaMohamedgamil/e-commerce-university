<?php
    include 'config.php';
    session_start();
    $ID    = $_SESSION['user_id'];
    $up=mysqli_query($con,"select * from user where id = '$ID'");
    $data=mysqli_fetch_array($up);
    
?>

<title>Your Profile</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/acc.css">

<body>
    <center>
        <div>
            <h1>My Profile</h1>
        </div>
        <section class="profile-info">
            <h2>Personal Information</h2>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td align="right">
                        <?php echo "$data[first_name]"?>
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td align="right">
                        <?php echo "$data[last_name]"?>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td align="right">
                        <?php echo $data['email']?>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td align="right"><?php echo $data['address']?></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td align="right"><?php echo $data['Number']?> </td>
                </tr>

            </table>
            <br>
            <button class="btn btn-danger text-center"><a href="update_acc.php">Edit Profile</a></button>
        </section>
    </center>

</body>

</html>