<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- ---------header----------- -->
<div class="container">
     <?php include_once "app/views/header.php"?>
</div>

<!-- ---------contact page----------- -->

<div class="account-page">
    <div class="container">
        <div class="row">

            <div class="contact-form-container">
                <div class="form-btn">
                    <span>Contact Us</span>
                </div>

                <form id="contact-form" action="<?php echo BASE_URL ?>contact/addcontact" method="post">
                    <input type="text" name="name" value="<?php if(isset($data['name'])) {echo $data['name'];}?>" placeholder="Your name">
                    <input type="email" name="email" value="<?php if(isset($data['email'])) {echo $data['email'];}?>" placeholder="Email">
                    <input type="hidden" name="status" value="0">
                    <div >
                        <textarea id="contact-message" name="message" style="height:200px;width: 400px" maxlength="255" placeholder="Your message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>
                <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                    <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                    <?php
                    unset($_SESSION['success_message']);
                }
                ?>

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

<!-- ----------js for toggle form----------- -->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function Register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function Login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }

</script>
</body>
</html>
