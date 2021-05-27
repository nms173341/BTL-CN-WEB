<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

    
        <div class="container">
            <?php include_once "app/views/header.php"?>
        </div>

        <!-- -------------cart item details----------- -->
        <?php if($_SESSION['shopping_cart']!=null)
            {
                $total=0;?>
    <div class="small-container cart-page">
        <table id="tb1">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
                foreach ($_SESSION['shopping_cart'] as $key=>$value):
                    $subtotal=$value['product_price']*$value['product_quantity'];
                    $total+=$subtotal;
            ?>
            <div class="product">
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?php echo BASE_URL."public/images/".$value['product_image']?>" >
                        <div>
                            <p><?php echo $value['product_name']?></p>
                            <small class="product-price" >
                               $<?php echo $value['product_price'] ?>
                            </small>
                            <br>
                            <a href="<?php echo BASE_URL?>cart/removefromcart/<?php echo $value['product_id']?>">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="product-quantity">
                         <input style="text-align: center" readonly type="number" min='1' value="<?php echo $value['product_quantity']?>">
                    </div>
                <td>
                    <div>
                        <div class="product-line-price">$<?php echo $subtotal?></div>
                    </div>
                </td>

            </tr>
            </div>
                <?php endforeach;?>

        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo $total?></td>
                </tr>

            </table>
        </div>
        <a href="<?php echo BASE_URL?>checkout" class="btn" style="align-items: end" > Continue --> </a>
    </div>

    <?php } else
        {?>
                <div class="small-container cart-page" >
                    <?php if (isset($_SESSION['order_success']) && !empty($_SESSION['order_success'])) { ?>
                    <div class="order_success" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['order_success']; ?></div>
                    <?php unset($_SESSION['order_success']);
                    }else{
                    ?>
                    <h1 >Not found product in cart</h1>
                <?php }?>
                </div>

        <?php }?>
    
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

</body>
</html> 