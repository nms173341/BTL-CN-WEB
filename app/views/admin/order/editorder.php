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
<!--Admin Content start-->
<div class="admin_content">
    <div class="button-group">
        <a href="<?php echo BASE_URL ?>adminorder" class="btn-big">Back</a>
        <?php if($data['order'][0]['status']==0){?>
            <a href="<?php echo BASE_URL ?>adminorder/complete/<?php echo $data['order'][0]['order_id']?>" class="btn-big">Complete</a>
        <?php }?>

    </div>
    <div class="content">
        <h3 class="panel-title">Order #<?php echo $data['order'][0]['order_id']?></h3>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Customer Name</label>
                    <input type="text" readonly name="name" value="<?php echo $data['order'][0]['name'] ?>" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Customer Email</label>
                    <input type="text" readonly name="email" value="<?php echo $data['order'][0]['email'] ?>" id="input-email" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Phone Number</label>
                    <input type="text" readonly name="phone_number" value="<?php echo $data['order'][0]['phone_number'] ?>" id="input-phone-number" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Address</label>
                    <input type="text" readonly name="address" value="<?php echo $data['order'][0]['address'] ?>" id="input-address" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Shipping Method</label>
                    <input type="text" readonly name="shipping_method" value="<?php echo $data['order'][0]['shipping_method']==1?'Ship to my address':'Pickup from store'?>" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Payment Method</label>
                    <input type="text" readonly name="payment_method" value="<?php switch ($data['order'][0]['payment_method']){
                        case 1: echo "Offline";
                        break;
                        case 2: echo "Bank Transfer";
                        break;
                        case 3: echo "Paypal Payment";
                        break;
                    }
                    ?>" id="input-address" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Subtotal</label>
                    <input type="text" readonly name="subtotal" value="<?php echo $data['order'][0]['subtotal'] ?>" id="input-subtotal" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Ship Fee</label>
                    <input type="text" readonly name="ship" value="<?php echo $data['order'][0]['shipping'] ?>" id="input-ship" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-order-id">Total</label>
                    <input type="text" readonly name="total" value="<?php echo $data['order'][0]['total'] ?>" id="input-total" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                </div>
                <br>
                <div class="form-group">

                    <label >Order Detail #<?php echo $data['order'][0]['order_id']?></label>
                    <br><br>
                    <table id="tb1">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                        </tr>
                        <?php foreach ($data['order_detail'] as $key=>$value):
                            $subtotal=$value['price']*$value['product_quantity'];
                            $total+=$subtotal;
                            ?>
                            <div class="product">
                                <tr>
                                    <td>
                                        <div class="cart-info">
                                            <img class="product_img" src="<?php echo BASE_URL."public/images/".$value['image']?>" >
                                            <div>
                                                <p><?php echo $value['product_name']?></p>
                                                <small class="product-price" >
                                                    <?php echo $value['price'] ?>
                                                </small>
                                                <br>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-quantity">
                                            <p><?php echo $value['product_quantity']?></p>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        <?php endforeach;?>
                    </table>
                </div>
                <br><br>

            </div>


    </div>
</div>

<!--Admin Content end-->
</body>
</html>
