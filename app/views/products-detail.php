
<?php if(isset($data['product_detail'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

        <div class="container">
            <?php include_once "app/views/header.php"?>
        </div>


    <!-------------single product details-------->
    <div class="small-container">
        <form action="<?php echo BASE_URL?>cart/addtocart" method="post">
        <div class="small-container single-product">
            <div class="row">

                    <input type="hidden" value="<?php echo $data['product_detail'][0]['image']?>" name="product_image">
                    <input type="hidden" value="<?php echo $data['product_detail'][0]['product_name']?>" name="product_name">
                    <input type="hidden" value="<?php echo $data['product_detail'][0]['price']?>" name="product_price">
                    <input type="hidden" value="<?php echo $data['product_detail'][0]['product_id']?>" name="product_id">

                    <div class="col-2">
                    <img src="<?php echo BASE_URL."public/images/".$data['product_detail'][0]['image']?>" width="100%" id="productImg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="<?php echo BASE_URL."public/images/".$data['product_detail'][0]['image']?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="<?php echo BASE_URL."public/images/".$data['product_detail'][0]['image']?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="<?php echo BASE_URL."public/images/".$data['product_detail'][0]['image']?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="<?php echo BASE_URL."public/images/".$data['product_detail'][0]['image']?>" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <p>Home/T-Shirt</p>
                    <h1><?php echo $data['product_detail'][0]['product_name'] ?></h1>
                    <h4><?php echo $data['product_detail'][0]['price']?>$</h4>
                    <select>
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                    <input type="number" value="1" min='1' name="product_quantity">
                    <input type="submit" class="btn " name="addtocart" value="Add To Cart">
                    <h3>Product Details  <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>
                        <?php echo $data['product_detail'][0]['description']  ?>
                    </p>
                </div>

            </div>
        </div>
        </form>
        <!-- --------title---------- -->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View more</p>
            </div>
        </div>
        <!-- ------------product----------- -->
        <div class="row">
            <div class="col-4">
                <img src="<?php echo BASE_URL?>public/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="<?php echo BASE_URL?>public/images/product-4.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="<?php echo BASE_URL?>public/images/product-3.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="<?php echo BASE_URL?>public/images/product-2.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>

                </div>
                <p>$50.00</p>
            </div>
        </div>

    </div>

    <!-- --------footer--------- -->

    <?php include_once "app/views/footer.php"?>

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

    <!-- ---------js for product gallery---------- -->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");

        smallImg[0].onclick = function(){
            productImg.src=smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            productImg.src=smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            productImg.src=smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            productImg.src=smallImg[3].src;
        }
    </script>
</body>
</html>
<?php }?>