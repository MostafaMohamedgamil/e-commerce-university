<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Products</title>
    <!-- bootstrap css code -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
       <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="products.css"> 
    </head>

<body>
    <div class="container">
    <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 10px;">
    <?php
    include('config.php');
    $result=mysqli_query($con,"select * from prod");
    while($row= mysqli_fetch_array($result))
    {
        echo "
                <div class='card 'style='width: 18rem; marbin-' >
                        <img src='$row[image]' class='card-img-top' alt='$row[id]'>
                    <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>
                            <div class='d-flex justify-content-center gap-2 align-items-center  '>
                            <a href='EditProducts.php ? id=$row[id]' class='btn btn-primary'>Edit Products</a>
                            <a href='DeleteProduct.php ? id=$row[id]' class='btn btn-danger'>Delete Products</a>
                            </div>
                    </div>
                </div>
            ";
        }
        ?>
        </div>
    </div>



    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>

    <script src="../css/bootstrap.bundle.min.js"></script>
</body>

</html>