<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shop Cart</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>


<body class="bg-black">
    <?php
    include('navbar.php');
    // @session_start();
    include('config.php');
    $up = mysqli_query($con, "select * from cart where user_id = $_SESSION[user_id]");
    $num_rows = mysqli_num_rows($up);
    if ($num_rows == 0) {
        echo "<h3 class='text-center text-white margin-top50'><i>Your cart is currently empty.</i></h3>";
    } else {
    ?>
    <section>
        <div class="container">
            <h1 class="text-center m-5 " style="color:white;">Your Cart</h1>
            <table class=" table-bordered bg-black "
                style="border-color:lead; width:80%; color:aliceblue; margin:auto;">
                <thead>
                    <tr class="text-center">
                        <th class="w-25 p-2">Name</th>
                        <th class="w-25">Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $total = 0;
                        while ($data = mysqli_fetch_array($up)) :
                            $up2 = mysqli_query($con, "select * from prod where id = '$data[prod_id]'");
                            $data2 = mysqli_fetch_array($up2); ?>
                    <tr class="text-center" style="vertical-align: middle;">
                        <td><?php echo $data2['name']; ?> </span></td>
                        <td><img src="<?php echo $data2['image']; ?>" alt="<?php echo $data2['id']; ?>"
                                style="width: 70%;"></td>
                        <td style="font-size: 20px;"><?php echo $data['quantity']; ?></td>
                        <td style="font-size: 20px;"><?php echo $data2['price']; ?></td>
                        <td>
                            <?php 
                            echo "<button class='btn btn-danger'> <a style='text-decoration: none; color:white' href='Delete_from_cart.php?prod_id=$data[prod_id]'>Remove</a></button>
                            " ?>
                        </td>
                    </tr>
                    <?php @$subtotal += ($data2['price'] * $data['quantity']);
                    @$total=$subtotal+35;
                         endwhile;?>
                    <br>
                    <tr>
                        <td colspan="3" style="font-size: 20px;"> <?php echo "Subtotal:" ?> </td>
                        <td class="text-center" style="font-size: 20px;"> <?php echo $subtotal . "\$"?> </td>
                        <td rowspan="3" class="text-center">
                            <?php echo "<button class='btn btn-danger'> <a style='text-decoration: none; color:white' href='Delete_from_cart.php?user_id=$_SESSION[user_id]'>Remove All</a></button>
" ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-size: 20px;"> <?php echo "Tax:" ?> </td>
                        <td class="text-center" style="font-size: 20px;"> <?php echo "35\$"?> </td>

                    </tr>
                    <tr>
                        <td colspan="3" style="font-size: 20px;"> <?php echo "Total:" ?> </td>
                        <td class="text-center" style="font-size: 20px;"> <?php echo "$total"."\$"?> </td>

                    </tr>
                </tbody>
            </table>
            <br>
        </div>
        <?php } ?>
        <center>
            <button class="btn btn-warning text-center">Proceed to Checkout</a></button>
        </center>
    </section>
    <?php 
        include('footer.php')
   ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>