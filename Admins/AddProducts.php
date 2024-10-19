<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrab -->
    <link rel="stylesheet" href="../Admins/style/bootstrap.min.css">
    <!-- CSS style -->
    <link rel="stylesheet" href="styleProudct.css">
    <title>Add Products</title>
</head>

<body class="bg-black">
    <section class="d-flex">
        <img src="TH.png" alt="Team Hub Logo" width="400px">
        <div class="main  d-flex align-items-center m-auto  ">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Adding Products</h2>
                <br>
                <input type="text" name="name" placeholder="Product Name">
                <input type="text" name="price" placeholder="Price">
                <div class="textarea">
                    <textarea class="textarea1 toEdit" name="description" placeholder="Description" required rows="6" cols="60"></textarea>
                    <br>
                    <select name="type" class="m-3 select" required>
                        <option>KEYBOARD</option>
                        <option>HEADSET</option>
                        <option>MOUSE</option>
                    </select>
                </div>
                <div class="bus ">
                    <input type="file" id="file" name="image" style="display: none;">
                    <label for="file">Upload Photo</label>
                    <button name="upload">Upload The Product</button>
                    <br><br>
                    <div class="an">
                        <a href="products.php">View All Products</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="../Admins/style/bootstrap.bundle.min.js"></script>
</body>

</html>