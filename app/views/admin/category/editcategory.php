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
<?php include_once "app/views/admin/header.php"?>
<!--Header area end-->
<!--Sidebar area start-->
<div class="sidebar">
    <center>
        <img src="<?php echo BASE_URL?>public/images/admin_logo.jpg" class="profile_image" alt="">
        <h4>Admin</h4>
    </center>
    <a href="<?php echo BASE_URL ?>admindashboard" ><i class="fas fa-home"></i><span>Dashboard</span> </a>
    <a href="<?php echo BASE_URL ?>adminorder"><i class="fas fa-sliders-h"></i><span>Sale Order</span> </a>
    <a href="<?php echo BASE_URL ?>adminuser" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
    <a href="<?php echo BASE_URL ?>admincategory" class="active"> <i class="fas fa-cog"></i><span>Categories</span> </a>
    <a href="<?php echo BASE_URL ?>adminproduct" ><i class="fas fa-stream"></i><span>Products</span> </a>
    <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
</div>
<!--Sidebar area end-->
<!--Admin Content start-->
<div class="admin_content">
    <div class="button-group">
        <a href="<?php echo BASE_URL ?>admincategory" class="btn-big">Back</a>
    </div>
    <div class="content">
        <h3 class="panel-title">Edit category <?php echo $data['category'][0]['name']?></h3>

        <form action="<?php echo BASE_URL?>admincategory/save" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label" for="input-first-name">Category Name</label>
                    <input type="text" name="name" value="<?php echo $data['category'][0]['name']?>" placeholder="Category Name" id="input-category-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-last-name">Description</label>
                    <input type="text" name="description" value="<?php echo $data['category'][0]['description']?>" placeholder="Description" id="input-description" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <input type="hidden" name="category_id" value="<?php echo $data['category'][0]['category_id']?>">
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
