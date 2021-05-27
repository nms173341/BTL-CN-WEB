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
<div class="header">


    <div class="container">
        <?php include_once "app/views/header.php"?>
        <div class="row">
            <div class="col-2">
                <h1><br>About Us Page</br></h1>
                <p>Some text about who we are and what we do.</p>
                <a href="product.html" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="<?php echo BASE_URL?>public/images/image1.png">
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
                <p>yone@gmail.com</p>
                <div class="rating">
                    <p class="about-title">CEO & Founder</p>
                </div>
                <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                <h3>Yorn Bunthoeurn</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry standard text ever
                </p>
                <p>huuson@gmail.com</p>
                <div class="rating">
                    <p class="about-title">CTO</p>
                </div>
                <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                <h3>Ngô Hữu Sơn</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry standard text ever
                </p>
                <p>tuananh@gmail.com</p>
                <div class="rating">
                    <p class="about-title">CMO</p>
                </div>
                <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                <h3>Bùi Tuấn Anh</h3>
            </div>
            <div class="col-4">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry standard text ever
                </p>
                <p>nhudai@gmail.com</p>
                <div class="rating">
                    <p class="about-title">Member</p>
                </div>
                <img src="<?php echo BASE_URL?>public/images/user-2.png" alt="">
                <h3>Nguyễn Như Đại</h3>
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