<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/keyboard.css"> -->

<!-- NAVBAR -->
<?php include('navbar.php');?>

<!-- <body class="bg-secondary"> -->


<title><?php echo $_GET['type'];?></title>

<section class="top d-flex m-4 align-items-center">
    <div class="w-50 m-auto ">
        <h1 class=" text-center text-white"><?php echo $_GET['type'];?></h1>
    </div>
</section>
























<?php 
        include('config.php'); 
        $TYPE=$_GET['type']; 
        $ID=$_GET['id'];
        $var=0;
        $itemperpage=8;
        $query = "select * from prod where type='$TYPE'";
        $num_rows = mysqli_num_rows(mysqli_query($con, $query));
        $total_pages = ceil($num_rows / $itemperpage);
        $result = mysqli_query($con, "select * from prod where  type='$TYPE' AND id > $ID LIMIT 8"); 
        while($row= mysqli_fetch_array($result)){
            $products = array( 
                array( 
                    "image" => $row['image'], 
                    "name" => $row['name'], 
                    "id" => $row['id'], 
                    "price" => $row['price'], 
                    "type"=>$TYPE
                ) 
            ); 
            foreach ($products as $product) { 
                $template = file_get_contents("template.html"); 
                $template = str_replace("{{ image }}", $product["image"], $template); 
                $template = str_replace("{{ name }}", $product["name"], $template); 
                $template = str_replace("{{ID}}",  $product['id'], $template); 
                $template = str_replace("{{ price }}",  $product['price'], $template); 
                $template = str_replace("{{type}}",  $product['type'], $template); 
                echo $template; 
            }
                $var=$product['id'];
        }
        echo"<br><br>";
        for ($i = 1; $i <= $total_pages; $i++) {
        echo"
            <div style='transform: translateX(40rem);  border:2px solid #AF110B;  display:inline-block; margin:2px; width:30px; height:30px'>
            <a style='color:white'
            ' class=' ms-2'  href='? type=$TYPE & id=$var'>$i</a>
            </div>    
            ";
    }
    ?>














<?php 
        include('footer.php')
   ?>