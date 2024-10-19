<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <!-- <link rel="stylesheet" href="AddProducts.css"> -->
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./css/EditProducts.css">
</head>

<body>
    <?php
    $ID = $_GET['id'];
    $up = mysqli_query($con, "select * from prod where id = '$ID'");
    $data = mysqli_fetch_array($up);
    ?>
    <section>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Edit Products</h2>
                <input type="text" name="id" value='<?php echo $data['id'] ?>'>
                <br>
                <input type="text" name="name" value="<?php echo $data['name'] ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price'] ?>">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Update Photo</label>
                <button name="update">Edit Product</button>
                <br><br>
                <div class="an">
                    <a href="products.php">View All Products</a>
                </div>
            </form>
        </div>
    </section>
    <script src="./style/bootstrap.bundle.min.js"></script>
</body>

</html>