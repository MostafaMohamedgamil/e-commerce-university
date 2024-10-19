<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset password</title>
    <meta name="description" content="Reset password page">

    <!-- Bootstrab -->
    <link rel="stylesheet" href="../Users/css/bootstrap.min.css">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../Users/css/RestPassword.css">
</head>

<body>
    <?php 
                if(isset($_GET['msg']))
                {
                    if($_GET['msg']=='2')
                    {
                        echo "<h3 class='text-center text-black margin-top50'><i>User Email Not Found!</i></h3>";
                    }
                }
             ?>
    <section>
        <form action="reset.php" method="post">
            <h3>
                Reset your password
            </h3>
            <div class="inEM-Pass">
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="password" name="password" placeholder="Password" required minlength="6">
            </div>
            <div class="bu d-flex justify-content-center">
                <input type="submit" value="reset password" name="reset">
            </div>
            <div class="ReturnLogin d-flex justify-content-center">
                <a href="login.php" title="Return to login">Return to login</a>
            </div>
        </form>
    </section>
</body>

</html>