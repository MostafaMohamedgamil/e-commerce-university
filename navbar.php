<!-- bootstrab -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- CSS -->
<link rel="stylesheet" href="css/AboutSer.css">
<nav>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand" href="#">
                <img src="img/photo_2023-12-17_14-11-08.jpg" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- MIDDLE -->
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Main.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Main.php#AboutUs">ABOUT US</a>
                    </li>


                    <span>
                        <li class="nav-item">
                            <a class="nav-link" href="Cart.php">CART</a>
                        </li>
                    </span>

                </ul>

            </div>

            <!-- BUTTON -->
            <?php
            session_start();
            if(!isset($_SESSION['user_id'])){
            ?>
            <div class="button">
                <a href="Users/login.php"> <button class="Login">Login</button>
                </a>
                <a href="Users/Signup.php"> <button class="Signup">Sign up</button>
                </a>
            </div>
            <?php }else{ ?>
            <div class="button">
                <a href="Users/acc.php"> <button class="Login">MY PROFILE</button>
                </a>
                <a href="Users/logout.php"> <button class="Signup">LOG OUT</button>
                </a>
            </div>
            <?php } ?>
        </div>
    </nav>
</nav>

<script src="css/bootstrap.bundle.min.js"></script>