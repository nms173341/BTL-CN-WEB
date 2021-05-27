<link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/style.css">
<div class="navbar">
    <div class="logo">
        <a href="<?php echo BASE_URL?>index"><img src="<?php echo BASE_URL?>public/images/logo.png" width="125px"></a>
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="<?php echo BASE_URL?>index">Home</a></li>
            <li><div class="dropdown">
                    <a href="<?php echo BASE_URL?>product">Products</a>
                    <?php if(isset($data['category'])){ ?>
                    <div class="dropdown-content">
                        <?php foreach ($data['category'] as $key=>$value):?>
                            <a style="text-align: center" href="<?php echo BASE_URL?>product/category/<?php echo $value['category_id']?>"><?php echo $value['name']?></a>
                        <?php endforeach;?>
                    </div>
                    <?php }?>
                </div>
            </li>
            <li><a href="<?php echo BASE_URL?>aboutus">About US</a></li>
            <li><a href="<?php echo BASE_URL?>contact">Contact</a></li>
            <?php if(isset($data['name'])) {
                echo '<li>'.$data['name'].'</li>';
                echo '<li><a href="'.BASE_URL.'login/logout">Logout</a></li>';
            }else{
                echo '<li><a href="'.BASE_URL.'login">Login</a></li>';
                echo '<li><a href="'.BASE_URL.'register">Register</a></li>';;
            }
            ?>
        </ul>
    </nav>
    <a href="<?php echo BASE_URL?>cart"><img src="<?php echo BASE_URL?>public/images/cart.png" width="22px" height="22px"></a>
    <img src="<?php echo BASE_URL?>public/images/menu.png" class="menu-icon" onclick="menutoggle()">
</div>

