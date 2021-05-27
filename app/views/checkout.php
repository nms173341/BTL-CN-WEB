<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán| Ecommerce Website</title>
    <link rel="stylesheet" href="<?php echo BASE_URL?>public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<div class="container">
    <?php include_once "app/views/header.php"?>
</div>

<!-------------featured products-------->
<form id="checkout_form" method="post" action="<?php echo BASE_URL?>checkout/placeorder">
<div class="small-container">
    <div class="row-tt">
        <div class="col-3">
            <div class="cusInfo">
                <h3>Shipping Information</h3>
                <hr>
                <div class="form">
                    <input required type="text" value="<?php echo isset($data['email']) ? $data['email']:'';?>" placeholder="Email" name="email">
                    <input type="text" value="<?php echo isset($data['name']) ? $data['name']:'';?>" placeholder="Name" name="name">
                    <input required type="text" value="<?php echo isset($data['phone_number']) ? $data['phone_number']:'';?>" placeholder="Phone number" name="phone_number">
                    <input required type="text" value="<?php echo isset($data['address']) ? $data['address']:'';?>" placeholder="Address" name="address">
                    <input type="hidden" value="<?php echo isset($data['user_id']) ? $data['user_id']:'';?>"  name="user_id">
                    <select name="city" form="checkout_form" >
                        <option>Province/City</option>
                        <option value="1">Hanoi</option>
                        <option value="2">HCM</option>
                        <option value="3">Hai Phong</option>
                    </select>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-3">
            <div class="cusInfo">
                <h3>Shipping Methods</h3>
                <hr>
                <div class="form">
                    <select id="typeTrans" onchange="transportFunc()" name="shipping_method" form="checkout_form">
                        <option value="1">Ship to my address</option>
                        <option value="2">Pickup from store </option>
                    </select>
                </div>
                <h3>Payment Method</h3>
                <br>
                <label class="tt-radio-box" > Offline
                    <input required type="radio" name="payment_method" value="1">
                    <span class="checkmark-radio"></span>
                </label>
                <label class="tt-radio-box"> Bank Transfer
                    <input required type="radio" name="payment_method" value="2">
                    <span class="checkmark-radio"></span>
                </label>
                <label class="tt-radio-box"> Paypal Payment
                    <input required type="radio" name="payment_method"  value="3">
                    <span class="checkmark-radio"></span>
                </label>
            </div>
        </div>
        <div class="col-3">
            <div class="cusInfo">
                <h3>Order Summary</h3>
                <hr>

                <table>
                    <tr>
                        <td>
                            Cart Subtotal
                        </td>
                        <td>
                            <input id = "predict" type="hidden" value="<?php echo $data['subtotal'] ?>" name="subtotal">
                            <p id="predict_value"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Shipping
                        </td>
                        <td>
                            <input id="ship" type="hidden" value="" name="shipping">
                            <p id="ship_value"></p>
                        </td>
                    </tr>
                </table>
                <hr>
                <table>
                    <tr>
                        <td>Order Total</td>
                        <td>
                            <input id="real" type="hidden" value="" name="total">
                            <p id="real_value"></p>
                        </td>

                    </tr>
                </table>
                <hr>
                <button type="submit" class="btn">Place Order</button>
            </div>
        </div>
    </div>
</div>
</form>
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
            let predict = document.getElementById("predict").value;
            document.getElementById("predict_value").innerHTML = predict;
            let ship = 20;
            let realP = Number(predict) + Number(ship);
            document.getElementById("ship_value").innerHTML = ship;
            document.getElementById("real_value").innerHTML = realP;
            document.getElementById("ship").value = ship;
            document.getElementById("real").value = realP;
            function transportFunc(){
                let typeTrans = document.getElementById("typeTrans").value;

                console.log(predict)
                let realP = document.getElementById("real").value;
                let ship = document.getElementById("ship").value;
                console.log( predict, ship, realP)
                console.log(typeTrans);
                if (typeTrans == 1){
                    ship = 20;
                    realP = Number(predict) + Number(ship);
                    console.log(realP, typeof(real));
                    document.getElementById("ship_value").innerHTML = ship;
                    document.getElementById("real_value").innerHTML =  realP;
                    document.getElementById("ship").value = ship;
                    document.getElementById("real").value = realP;
                }
                if (typeTrans == 2){
                    ship = 0;
                    realP = predict;
                    document.getElementById("ship_value").innerHTML = ship;
                    document.getElementById("real_value").innerHTML = realP;
                    document.getElementById("ship").value = ship;
                    document.getElementById("real").value = realP;
                }
                document.getElementById("predict_value").innerHTML = predict;
            }
        </script>
</body>
</html>