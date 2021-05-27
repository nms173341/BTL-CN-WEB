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
            <a href="<?php echo BASE_URL ?>admindashboard"><i class="fas fa-home"></i><span>Dashboard</span> </a>
            <a href="<?php echo BASE_URL ?>adminorder"><i class="fas fa-sliders-h"></i><span>Sale Order</span> </a>
            <a href="<?php echo BASE_URL ?>adminuser" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
            <a href="<?php echo BASE_URL ?>admincategory"><i class="fas fa-cog"></i><span>Categories</span> </a>
            <a href="<?php echo BASE_URL ?>adminproduct" class="active"><i class="fas fa-stream"></i><span>Products</span> </a>
            <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
        </div>
        <!--Sidebar area end-->
        <!--Admin Content Start-->
        <div class="admin_content">
            <div class="button-group">
                <a href="<?php echo BASE_URL?>adminproduct/addnew" class="btn-big">New Product</a>
            </div>
            <div class="content">
                <h3 class="panel-title"><i class="fa fa-list"></i> Product List</h3>

                    <form action="" method="post" enctype="multipart/form-data" id="form-product">
                                <table>
                                    <thead>
                                    <tr>
                                        <td class="text-left">Product ID</td>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left">Category ID</td>
                                        <td class="text-left">Price</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-left">Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($data['product'])){
                                        foreach ($data['product'] as $key=>$value):
                                    ?>

                                    <tr>
                                        <td class="text-center"> <?php echo $value['product_id']?>
                                        </td>
                                        <td class="text-left"> <img style="width: 150px" src="<?php echo BASE_URL."public/images/".$value['image']?>" class="img-thumbnail"> </td>
                                        <td class="text-left"><?php echo $value['product_name'] ?></td>
                                        <td class="text-left"><?php echo $value['category_id'] ?></td>
                                        <td class="text-left"> <?php echo $value['price'] ?>
                                        </td>
                                        <td class="text-left"> <span class="label label-warning"><?php echo $value['quantity'] ?></span> </td>
                                        <td class="text-left" >
                                            <a href="<?php echo BASE_URL ?>adminproduct/edit/<?php echo $value['product_id'] ?>">Edit</a>
                                            <a href="<?php echo BASE_URL ?>adminproduct/remove/<?php echo $value['product_id'] ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;
                                    }?>
                                    </tbody>
                                </table>
                        </form>
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            <div class="col-sm-6 text-right">Showing 1 to 19 of 19 (1 Pages)</div>
                        </div>
                </div>
            </div>
        </div>
        <!--Admin Content End-->
    </body>
</html>
