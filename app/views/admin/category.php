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

<!--Admin Content Start-->
<div class="admin_content">
    <div class="button-group">
        <a href="<?php echo BASE_URL?>admincategory/addnew" class="btn-big">New Category</a>
    </div>
    <div class="content">
        <h3 class="panel-title"><i class="fa fa-list"></i> Category List</h3>

        <form action="#" method="post" enctype="multipart/form-data" id="form-customer">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td class="text-left">ID</td>
                    <td class="text-left">Category Name</td>
                    <td class="text-left">Description</td>
                    <td class="text-left">Action</td>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['category'])){?>

                    <?php foreach ($data['category'] as $key=>$value):?>
                        <tr>
                            <td class="text-left"><?php echo $value['category_id'] ?></td>
                            <td class="text-left"><?php echo $value['name'] ?></td>
                            <td class="text-left"><?php echo $value['description'] ?></td>
                            <td class="text-left">
                                <a href="<?php echo BASE_URL?>admincategory/remove/<?php echo $value['category_id']?>">Delete</a>
                                <a href="<?php echo BASE_URL?>admincategory/edit/<?php echo $value['category_id']?>">Edit</a>
                            </td>
                        </tr>
                <?php endforeach; }?>
                </tbody>
            </table>
        </form>
    </div>
</div>
<!--Admin Content End-->
</body>
</html>
