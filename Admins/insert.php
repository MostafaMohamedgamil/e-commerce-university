<?php
if(isset($_POST['upload'])){
    include('config.php');
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $DESCRIPTION = $_POST['description'];
    #ببعت الصوره
    $IMAGE        = $_FILES['image'];
    #الفورمات بتاعها
    $image_format = $_FILES["image"]["tmp_name"];
    #ب اسمها 
    $image_name   = $_FILES['image']['name'];
    #ديما الصور بتتبعت عن طريق فايل
    #بخزنها ف الملف بتاعي بقي 
    $image_up = "images/".$image_name;
    $insert   = "INSERT INTO prod (name,price,image,description,type) VALUES ('$NAME','$PRICE','$image_up','$DESCRIPTION','$_POST[type]')";
    #الي حصل ف انسيرت كونكت مع الداتا بيز كون و نفذ الكلام الي موجود ف انسرت
    mysqli_query($con,$insert);
    #Check if photo uploaded or not
    if(move_uploaded_file($image_format,$image_up)){
        echo"<script>alert('done')</script>";
    }else{
        echo"<script>alert('wrong')</script>";
    }
}
header('location:AddProducts.php')
?>