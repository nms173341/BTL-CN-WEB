
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!------header------>
    <div class="header">
        <?php include_once "app/views/header.php"?>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h1><br>Give your Closet</br>A New Style!</h1>
                    <p>Success isn't always about greatness. It's about consistency. <br>Consistent hard work gain success.</p>
                    <a href="<?php echo BASE_URL?>product" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="<?php echo BASE_URL?>public/images/image1.png">
                </div>
            </div>
        </div>
    </div>
    <!-------------featured categories-------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo BASE_URL?>public/images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="<?php echo BASE_URL?>public/images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="<?php echo BASE_URL?>public/images/category-3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-------------featured products-------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <?php foreach ($data['product_feature'] as $key=>$value):?>

                <div class="col-4">
                    <a href="<?php echo BASE_URL?>product/id/<?php echo $value['product_id']?>">
                        <img class="product_feature" src="<?php echo BASE_URL?>public/images/<?php echo $value['image']?>">
                        <h4><?php echo $value['product_name'] ?></h4>
                    </a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>$<?php echo $value['price'] ?></p>
                </div>
            <?php endforeach;?>
        </div>
        <h2 class="title">Lastest Products</h2>
        <div class="row">
            <?php foreach ($data['product_latest'] as $key=>$value):?>

            <div class="col-4">
                <a href="<?php echo BASE_URL?>product/id/<?php echo $value['product_id']?>">
                <img class="product_latest" src="<?php echo BASE_URL?>public/images/<?php echo $value['image']?>">
                <h4><?php echo $value['product_name'] ?></h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>$<?php echo $value['price'] ?></p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <!------offer------>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo BASE_URL?>public/images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 40% larger than Mi Band 3...</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-----testimonial----->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry standard text ever
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="<?php echo BASE_URL?>public/images/user-1.png" alt="">
                    <h3>Ngô Hữu Sơn</h3>
                </div>
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry standard text ever
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                    <h3>Nguyễn Như Đại</h3>
                </div>
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry standard text ever
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="<?php echo BASE_URL?>public/images/user-3.png" alt="">
                    <h3>Bùi Tuấn Anh</h3>
                </div>
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry standard text ever
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                    <h3>Yorn Bunthoeurn</h3>
                </div>
            </div>
        </div>
    </div>
    <!------brands------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="<?php echo BASE_URL?>public/images/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="<?php echo BASE_URL?>public/images/logo-oppo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="<?php echo BASE_URL?>public/images/logo-coca-cola.png" alt="">
                </div>
                <div class="col-5">
                    <img src="<?php echo BASE_URL?>public/images/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="<?php echo BASE_URL?>public/images/logo-philips.png" alt="">
                </div>
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
</body>
</html>
