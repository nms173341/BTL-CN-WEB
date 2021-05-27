<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <!-------------header-------->
        <div class="container">
            <?php include_once "app/views/header.php"?>
        </div>
    
    <!-------------featured products-------->
    <div class="small-container">
        <div class="row row-2">
            <h2><?php if(isset($data['name_category'])) {echo $data['name_category'];} else {echo "All Products ";}?></h2>
        </div>
        <div class="row">
            <?php if(isset($data['product']))
            {
                foreach ($data['product'] as $key=>$value):
                    ?>
                    <div class="col-4">
                        <form action="<?php echo BASE_URL?>cart/addtocart" method="post">
                            <input type="hidden" value="<?php echo $value['image']?>" name="product_image">
                            <input type="hidden" value="<?php echo $value['product_name']?>" name="product_name">
                            <input type="hidden" value="<?php echo $value['price']?>" name="product_price">
                            <input type="hidden" value="<?php echo $value['product_id']?>" name="product_id">
                            <input type="hidden" value="1" name="product_quantity">
                            <a href="<?php echo BASE_URL?>product/id/<?php echo $value['product_id']?>">
                            <img class="product_img"src="<?php echo BASE_URL."public/images/".$value['image']?>">
                            <h4><?php echo $value['product_name']?></h4>
                            </a>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o" ></i>
                            </div>
                            <p>$<?php echo $value['price']; ?></p>
                            <input type="submit" class="btn" name="addtocart" value="Add To Cart">
                        </form>
                    </div>
            <?php endforeach;}?>
        </div>
        <div class="page-btn">
            <?php for($i=1;$i<=$data['number_page'];$i++)
            {?>
                <a href="<?php echo BASE_URL?>product/index/<?php echo $i?>"><span><?php echo $i?></span></a>
            <?php }?>
            <a href="<?php echo BASE_URL ?>/product/index/<?php echo $data['current_page']+1 ?>"><span>&#8594</span></a>
        </div>
    </div>
    
    <!-- --------footer--------- -->
        <?php include_once "app/views/footer.php";?>

    <!-- --------js for toggle menu------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if (MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>