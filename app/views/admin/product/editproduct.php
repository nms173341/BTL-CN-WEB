<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Sidebar Dashboard Template </title>
        <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/admin_style.css">
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
            <a href="<?php echo BASE_URL ?>adminuser" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
            <a href="<?php echo BASE_URL ?>admincategory"><i class="fas fa-cog"></i><span>Categories</span> </a>
            <a href="<?php echo BASE_URL ?>adminproduct" class="active"><i class="fas fa-stream"></i><span>Products</span> </a>
            <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
        </div>
        <!--Sidebar area end-->
        <!--Admin Content start-->
        <div class="admin_content">
            <div class="button-group">
                <a href="<?php echo BASE_URL ?>adminproduct" class="btn-big">Back</a>
            </div>
            <div class="content">
                <h3 class="panel-title">Edit product <?php echo $data['product'][0]['product_name']?></h3>
                <form action="<?php echo BASE_URL ?>adminproduct/save" method="post" id="product_form">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="input-name">Product Name</label>
                            <input type="text" name="product_name" value="<?php echo $data['product'][0]['product_name']?>" placeholder="Product Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-image">Image</label>
                            <input type="text" name="image" value="<?php echo $data['product'][0]['image']?>" placeholder="image" id="input-model" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-price">Price</label>
                            <input type="text" name="price" value="<?php echo $data['product'][0]['price']?>" placeholder="Price" id="input-price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-quantity">Quantity</label>
                            <input type="text" name="quantity" value="<?php echo $data['product'][0]['quantity']?>" placeholder="Quantity" id="input-quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-description">Description</label>
                            <input type="text" name="description" value="<?php echo $data['product'][0]['description']?>" placeholder="Description" id="input-quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-category">Category</label>
                            <select  name="category_id" id="category" form="product_form">
                                <?php foreach ($data['category'] as $key=>$value):?>
                                <option value="<?php echo $value['category_id']?>"><?php echo $value['name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div><br><br><br>
                        <input type="hidden" name="product_id" value="<?php echo $data['product'][0]['product_id']?>">
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
