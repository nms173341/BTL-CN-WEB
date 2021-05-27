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
    <a href="<?php echo BASE_URL ?>admincategory" > <i class="fas fa-cog"></i><span>Categories</span> </a>
    <a href="<?php echo BASE_URL ?>adminproduct" ><i class="fas fa-stream"></i><span>Products</span> </a>
    <a href="<?php echo BASE_URL ?>admincontact" class="active"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
</div>
<!--Sidebar area end-->
<!--Admin Content Start-->
<div class="admin_content">
    <div class="content">
        <h3 class="panel-title"><i class="fa fa-list"></i> Contact List From Customer</h3>
        <form action="#" method="post" enctype="multipart/form-data" id="form-customer">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td class="text-left">Contact ID</td>
                    <td class="text-left">Customer Name</td>
                    <td class="text-left">Email</td>
                    <td class="text-left">Message</td>
                    <td class="text-left">Created At</td>
                    <td class="text-left">Status</td>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['contact'])){?>
                        <?php foreach ($data['contact'] as $key=>$value):?>
                <tr>
                    <td class="text-left"><?php echo $value['contact_id']?></td>
                    <td class="text-left"><?php echo $value['name']?></td>
                    <td class="text-left"><?php echo $value['email']?></td>
                    <td class="text-left"><?php echo $value['message']?></td>
                    <td class="text-left"><?php echo $value['created_at']?></td>
                    <td class="text-left">
                        <?php if($value['status']==1) {?>
                        <select>
                            <option value="1" selected >Complete</></option>
                            <option value="0" > Pending</option>
                        </select>
                        <?php } else{ ?>
                        <select>
                            <option value="1"> Complete</option>
                            <option value="0" selected> Pending</option>
                        </select>
                        <?php }?>
                    </td>
                </tr>
                <?php endforeach;}?>
                </tbody>
            </table>
        </form>
    </div>
</div>

<!--Admin Content End-->
</body>
</html>
