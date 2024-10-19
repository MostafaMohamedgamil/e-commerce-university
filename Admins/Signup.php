<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <meta name="description" content="Sign up page">

    <!-- Bootstrab -->
    <link rel="stylesheet" href="../Users/css/bootstrap.min.css">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../Users/css/Signup.css">

</head>

<body>
    <div id="main_body" class="container">
        <?php 
                if(isset($_GET['msg']))
                {
                    if($_GET['msg']=='2')
                    {
                        echo "<h3 class='text-center text-black margin-top50'><i>User Email Already Taken!</i></h3>";
                    }
                }
             ?>
    </div>
    <section>



        <div class="left">
            <h2>Create new account</h2>
            <form action="insert_data.php" method="post">

                <div>
                    <input type="text" name="first_name" required placeholder="First name">
                    <br>
                    <input type="text" name="last_name" required placeholder="Last name">
                </div>

                <div class="email">
                    <input type="email" name="email" required placeholder="Email address">
                </div>

                <div class="password">
                    <input type="password" name="password" required placeholder="Password" minlength="6">
                </div>

                <div class="bottom">

                    <button type="submit" name="upload">Sign up now</button>
                    <br>
                    <a href="login.php" title="log in">Already have an account?</a>

                </div>
            </form>
        </div>
    </section>





    <script src="../Users/css/bootstrap.bundle.min.js"></script>

</body>

</html>