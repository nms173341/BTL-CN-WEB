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
    <a href="<?php echo BASE_URL ?>adminorder" class="active"><i class="fas fa-sliders-h"></i><span>Sale Order</span> </a>
    <a href="<?php echo BASE_URL ?>adminuser" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
    <a href="<?php echo BASE_URL ?>admincategory" > <i class="fas fa-cog"></i><span>Categories</span> </a>
    <a href="<?php echo BASE_URL ?>adminproduct" ><i class="fas fa-stream"></i><span>Products</span> </a>
    <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
</div>
<!--Sidebar area end-->
<!--Admin Content Start-->
<div class="admin_content">

    <div class="content">
        <h3 class="panel-title"><i class="fa fa-list"></i> Order List</h3>

        <form action="#" method="post" enctype="multipart/form-data" id="form-customer">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td class="text-left">Order ID</td>
                    <td class="text-left">Order Code</td>
                    <td class="text-left">User ID</td>
                    <td class="text-left">Name</td>
                    <td class="text-left">Email</td>
                    <td class="text-left">Phone Number</td>
                    <td class="text-right">Address</td>
                    <td class="text-right">Status</td>
                    <td class="text-right">Action</td>
                </tr>
                </thead>
                <?php if(isset($data['order'])){?>
                <tbody>
                <?php foreach ($data['order'] as $key=>$value):?>
                <tr>
                    <td class="text-left"><?php echo $value['order_id']?></td>
                    <td class="text-left"><?php echo $value['order_code']?></td>
                    <td class="text-left"><?php echo $value['user_id']?></td>
                    <td class="text-left"><?php echo $value['name']?></td>
                    <td class="text-left"><?php echo $value['email']?></td>
                    <td class="text-left"><?php echo $value['phone_number']?></td>
                    <td class="text-right"><?php echo $value['address']?></td>
                    <td class="text-right"><?php echo $value['status']==1?"Complete":"Pending"?></td>
                    <td>
                        <a href="<?php echo BASE_URL ?>adminorder/edit/<?php echo $value['order_code'] ?>">Details</a>
                        <a href="<?php echo BASE_URL ?>adminorder/remove/<?php echo $value['order_id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <?php  }?>
            </table>
        </form>
    </div>
</div>

<!--Admin Content End-->
</body>
</html>
