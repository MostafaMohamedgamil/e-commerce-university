<link rel="stylesheet" href="css/all.min.css">
<!-- bootstrab -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- css -->
<link rel="stylesheet" href="css/style.css">

<title>Team Hub</title>
<?php include('navbar.php');?>

<div class="content">
    <div class="row">

        <div class="col-6 part1 ">

            <div class="text ">
                <h1><span>
                        HOLIDAY BOUNDLES
                        <br>
                        GAMING PERIPHERALS
                    </span>
                    <br>
                    UP TO <span class="span2">50%</span> OFF
                </h1>
                <a href="#prod"> <button type="button" class="btn btn-primary my-4 px-3 py2">SHOP NOW</button>
                </a>
            </div>


        </div>
        <div class="col-6">
            <div class="image">
                <img src="img/redragon_usa-20231217-0001.jpg" alt="">

            </div>

        </div>

    </div>

</div>
</div>
</div>
</div>
<!-- product -->
<section id="prod" class="sec2">
    <div class="container text-center">
        <h2 class="mb-5">Products</h2>
        <div class="row ">
            <div class="col-4 ">
                <div class="  product  position-relative">
                    <a href='Products-Template.php? type=MOUSE & id=0'>
                        <img src="img/mouse.avif" alt="">
                        <img class="position-absolute" src="img/product.avif" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4 ">
                <div class=" product   position-relative2">
                    <a href='Products-Template.php? type=HEADSET & id=0'>
                        <img src="img/HEADSET.avif" alt="">
                        <img class="position-absolute" src="img/product.avif" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class=" product   position-relative3">
                    <a href='Products-Template.php? type=KEYBOARD & id=0'>
                        <img src="img/KEYBOARD.avif" alt="">
                        <img class="position-absolute" src="img/product.avif" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<a href=""></a>




<!-- ABOUT US -->
<section id="AboutUs" class="AboutUs p-5">
    <div class="container">
        <div class="topSec text-center mb-5">
            <h2 class="mb-4">About Us</h2>
            <p> Our store specializing in gaming peripherals, particularly keyboards, mice, and headsets. we
                offer a wide variety of products at competitive prices.</p>
        </div>


        <div class="content">
            <div class="row">

                <div class="col-6">
                    <div class="imgeLeft">
                        <img class="w-100" src="img/redragon_usa-20231217-0001.jpg" alt="pic">
                    </div>
                </div>

                <div class="col-6">
                    <div class="contentRight">
                        <div class="contentRightTop mb-5">
                            <h3 class="mb-4">Gear Up for Glory: Unleash Your Gaming Potential
                            </h3>
                            <pre style='color:white' ;>
Dominate the leaderboard with high-octane gaming peripherals built for victory.
From precision-crafted keyboards that respond to your every command to 
laser-focused mice that track your every twitch, we offer a wide arsenal of 
weapons to elevate your gameplay.

Immerse yourself in the action with thunderous headsets that transport you to the
heart of the battle. Hear footsteps before they're even visible, pinpoint enemy
locations with pinpoint accuracy, and communicate strategies with crystal clarity.

Whether you're a seasoned veteran or a rising star, we have the gear to take you
to the next level. Explore curated collections for every playstyle and budget,and
customize your setup with modular options for ultimate control.

Join the ranks of champions. Uncap your potential. Gear up at TEAM HUB BOUTIQUE
today.
</pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</section>



<section id="OurServices" class="container bg-black">
    <h2 class="text-center m-3"></h2>
    <video controls width="100%" height="85%" autoplay muted loop>
        <!-- <source src="video_2023-12-18_01-09-07.mp4" type="video/mp4">
        <source src="video_2023-12-18_01-09-07.ogg" type="video/mp4"> -->
        <source src="video_2023-12-20_00-05-41.mp4" type="video/mp4">
        <source src="video_2023-12-20_00-05-41.ogg" type="video/mp4">
    </video>
</section>


<footer>
    <?php
        include('footer.php')
    ?>
</footer>
</body>

</html>