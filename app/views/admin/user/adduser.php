<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Sidebar Dashboard Template </title>
        <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/admin_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <!--Header area start-->
        <header>
            <div class="left_area">
                <h3>RED<span>STORE</span></h3>
            </div>
            <div class="right_area">
                <a href="#" class="logout_btn">Logout</a>
            </div>
        </header>
        <!--Header area end-->
        <!--Sidebar area start-->
        <div class="sidebar">
            <center>
                <img src="<?php echo BASE_URL?>public/images/admin_logo.jpg" class="profile_image" alt="">
                <h4>Admin</h4>
            </center>
            <a href="<?php echo BASE_URL ?>admindashboard"><i class="fas fa-home"></i><span>Dashboard</span> </a>
            <a href="<?php echo BASE_URL ?>adminorder"><i class="fas fa-sliders-h"></i><span>Sale Order</span> </a>
            <a href="<?php echo BASE_URL ?>adminuser" class="active" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
            <a href="<?php echo BASE_URL ?>admincategory"><i class="fas fa-cog"></i><span>Categories</span> </a>
            <a href="<?php echo BASE_URL ?>adminproduct" ><i class="fas fa-stream"></i><span>Products</span> </a>
            <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
        </div>
        <!--Sidebar area end-->
        <!--Admin Content start-->
        <div class="admin_content">
            <div class="button-group">
                <a href="<?php echo BASE_URL ?>adminuser" class="btn-big">Back</a>
            </div>
            <div class="content">
                <h3 class="panel-title">Add new customer</h3>
                <form action="<?php echo BASE_URL ?>adminuser/add" id="user_form" method="post">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="input-first-name">Name</label>
                            <input type="text" name="name" value="" placeholder="Name" id="input-first-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-last-name">Gender</label>
                            <select name="gender" form="user_form">
                                <option value="Male"> Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-email">Email</label>
                            <input type="text" name="email" value="" placeholder="Email" id="input-email" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <label class="control-label" for="input-date">Address</label>
                            <input type="text" name="address" value="" placeholder="Address" id="input-date" class="form-control">
                        </div><br>
                        <div class="form-group">
                            <label class="control-label" for="input-telephone">Phone Number</label>
                            <input type="text" name="phone_number" value="" placeholder="Telephone" id="input-telephone" class="form-control">
                        </div><br><br>
                        <div class="form-group">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--Admin Content end-->
    </body>
</html>
