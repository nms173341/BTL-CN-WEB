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
<?php include_once "app/views/admin/header.php"?>
<!--Header area end-->
<!--Sidebar area start-->
<div class="sidebar">
    <center>
        <img src="<?php echo BASE_URL?>public/images/admin_logo.jpg" class="profile_image" alt="">
        <h4>Admin</h4>
    </center>
    <a href="<?php echo BASE_URL ?>admindashboard" class="active"><i class="fas fa-home"></i><span>Dashboard</span> </a>
    <a href="<?php echo BASE_URL ?>adminorder"><i class="fas fa-sliders-h"></i><span>Sale Order</span> </a>
    <a href="<?php echo BASE_URL ?>adminuser" ><i class="fas fa-address-book"></i><span>Customer</span> </a>
    <a href="<?php echo BASE_URL ?>admincategory"><i class="fas fa-cog"></i><span>Categories</span> </a>
    <a href="<?php echo BASE_URL ?>adminproduct" ><i class="fas fa-stream"></i><span>Products</span> </a>
    <a href="<?php echo BASE_URL ?>admincontact"><i class="fas fa-envelop"></i><span>Contact us</span> </a>
</div>
<!--Sidebar area end-->
<!--Admin Content Start-->
<div class="admin_content">
        <h2 class="dash-title">Overview</h2>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="tile tile-primary">
                    <div class="tile-heading">Total Orders 
                        <span class="pull-right">
                    </div>
                    <div class="tile-body"><i class="fa fa-shopping-cart"></i>
                        <h2 class="pull-right"><?php echo $data['order_amount']?></h2>
                    </div>
                    <div class="tile-footer"><a href="<?php echo BASE_URL ?>adminorder">View more...</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="tile tile-primary">
                    <div class="tile-heading">Total Product 
                        <span class="pull-right">
                    </div>
                    <div class="tile-body"><i class="fa fa-credit-card"></i>
                        <h2 class="pull-right"><?php echo $data['product_amount']?></h2>
                    </div>
                    <div class="tile-footer"><a href="<?php echo BASE_URL ?>adminproduct">View more...</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="tile tile-primary">
                    <div class="tile-heading">Total Customers 
                        <span class="pull-right">
                    </div>
                    <div class="tile-body"><i class="fa fa-user"></i>
                        <h2 class="pull-right"><?php echo $data['user_amount']?></h2>
                    </div>
                    <div class="tile-footer"><a href="<?php echo BASE_URL ?>adminuser">View more...</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="tile tile-primary">
                    <div class="tile-heading">Peoples 
                    </div>
                    <div class="tile-body">
                        <i class="fa fa-users"></i>
                        <h2 class="pull-right">1.5k</h2>
                    </div>
                    <div class="tile-footer"><a href="">View more...</a></div>
                </div>
            </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Latest Orders</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">Order ID</td>
                                <td>Customer Name</td>
                                <td>Status</td>
                                <td>Date Added</td>
                                <td class="text-right">Total</td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <?php if(isset($data['order'])){?>
                        <tbody>
                            <?php foreach ($data['order'] as $key=>$value):?>

                            <tr>
                                <td class="text-right"><?php echo $value['order_id']?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['status']==1? 'Complete':"Pending" ?></td>
                                <td><?php echo $value['created_at'] ?></td>
                                <td class="text-right"><?php echo $value['total'] ?></td>
                                <td class="text-right"><a href="<?php echo BASE_URL ?>adminorder/edit/<?php echo $value['order_code']?>" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>

</div>
<!--Admin Content End-->
</body>
</html>
