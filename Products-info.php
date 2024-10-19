    <?php
    include('config.php');
    $ID = $_GET['id'];
    $Type = $_GET['type'];
    $up = mysqli_query($con, "select * from prod where id='$ID' AND type='$Type'");
    $data = mysqli_fetch_array($up);
    ?>
    <title><?php echo $data['name']; ?></title>
    <link rel="icon" href="img/keyboard/1.webp">
    <!-- FONTASOME -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/keyboard1.css">
    </head>

    <body>
        <?php
        include('navbar.php');
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == '2') {
                echo "<h3 class='text-center text-white margin-top50'><i>The Product Added Successfully</i></h3>";
            }
        }
        ?>




        <section class="sec1 ">

            <div class="container  text-center bg-sec3">
                <div class="row gx-5">
                    <div class="col-6">
                        <div class="p-3">
                            <div class="content">
                                <h2>
                                    <?php
                                    echo $data['name'];
                                    ?>
                                </h2>
                                <label for="quantity">
                                    <h5>Quan</h5>
                                </label>
                                <form action="add_to_cart.php" method="post">
                                    <input type="number" name="quantity" min="1" value="1">
                                    <br>
                                    <input type="hidden" name="type" value="<?php echo $Type; ?>">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <button type="submit" class="bg-white btn btn-outline-info">Add Cart</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <img class="w-65" src='<?php echo $data["image"]; ?>' alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="sec2 ">
            <div class="container bg-black p-4">
                <div class="topsec2 ">
                    <h2 class="p-3">PRODUCT DESCRIPTION</h2>
                </div>



                <div class="card mb-3">
                    <img class="w-50 m-auto" src='<?php echo $data["image"]; ?>' alt="">
                    <div class="card-body">
                        <div class="card-text">
                            <?php
                            echo $data['description'];
                            ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>



        <?php
        include('footer.php')
        ?>
    </body>

    </html>