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

    <!-- ---------account page----------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo BASE_URL?>public/images/image1.png" width=100%>
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="Login()">Login</span>
                            <span onclick="Register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="<?php echo BASE_URL?>login/authentication_login" method="post">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <button type="submit"  class="btn" >Login</button>
                            <a href="">Forgot Password</a>
                        </form>

                        <form id="RegForm" action="<?php echo BASE_URL?>register/adduser" method="post">
                            <input required  type="text" name="name" placeholder="Name">
                            <input type="text" name="gender" placeholder="Gender">
                            <input required type="text" name="email" placeholder="Email">
                            <input required type="password" name="password" placeholder="Password">
                            <input required type="text" name="phone_number" placeholder="Phone Number">
                            <input required type="text" name="address" placeholder="Address">
                            <button type="submit" class="btn">Register</button>
                        </form>
                        <?php if (isset($_SESSION['login_error']) && !empty($_SESSION['login_error'])) { ?>
                            <div class="login_error" style="margin-bottom: 20px;font-size: 20px;color: red;"><?php echo $_SESSION['login_error']; ?></div>
                            <?php unset($_SESSION['login_error']);}?>

                    </div>
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