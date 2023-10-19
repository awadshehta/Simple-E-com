<?php
session_start();
include("connection.php");
//session_unset();
//echo "Welcome " . $_SESSION["user"]["username"];
$user_id = $_SESSION["user"]["user_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/myPage.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        if(isset($_REQUEST["removeMsg"])) {
            echo "
            <p style='color:red;border-redius:20px;text-align:center'>".$_REQUEST["removeMsg"]."</p>
            ";
        }
        ?>
    </div>
    <div class="disappear">
        <div class="cart-title">
            <div>
                <h2>Cart of <span><?=$_SESSION["user"]["username"]?></span></h2>
            </div>
            <div class="total">
                <span class="total-txt">Total Amount</span>
                <span class="total-amount">
                <?php 
                    $total_price_sql = "SELECT SUM(items.price) As total FROM items WHERE items.user_id ='$user_id'";
                    $result = mysqli_query($conn, $total_price_sql);
                    while($row = $result->fetch_assoc()) {
                        echo $row["total"];
                    }
                ?>    
                &nbsp;<span></span></span>
                <a href="index.php" class="continue-shopping">Continue Shopping</a>
            </div>
        </div>
        <ul>
            <!-- <li>
                <div class="item">
                <input type="hidden" value="1" id="itemId">
                    <a href="#" title="Logitech 920-009415 MX Keys Advanced Illuminated Wireless Keyboard"><img alt="Logitech 920-009415 MX Keys Advanced Illuminated Wireless Keyboard" src="https://images-na.ssl-images-amazon.com/images/I/71534uC%2BJfL._AC_SX679_.jpg"></a>
                    <div class="item-details"><span class="item-name"><a href="#">Logitech 920-009415 MX Keys Advanced Illuminated Wireless Keyboard</a></span>
                    <span class="price">AED 360</span></div>
                    <button class="delete" id="1" onclick="deletePrompt(this)" title="Remove item">×</button>
                </div>
            </li> -->
            <?php
                $select_items_sql="SELECT T.id, T.user_id, T.product_id, T.thumbnail, T.description, T.price FROM items AS T WHERE T.user_id = '$user_id'";
                $select = mysqli_query($conn, $select_items_sql);
                // echo mysqli_num_rows($select); 
                // echo $user_id;
                
                
                while($row = $select->fetch_assoc()) {
                    echo '
                            <li>
                                <div class="item">
                                    <input type="hidden" name="id" value="'. $row["id"] .'" id="itemId">
                                    <a href="my_product.php?product_id='. $row["product_id"] .'" title="Logitech 920-009415 MX Keys Advanced Illuminated Wireless Keyboard"><img alt="Logitech 920-009415 MX Keys Advanced Illuminated Wireless Keyboard" src="'. $row["thumbnail"] .'"></a>
                                    <div class="item-details"><span class="item-name"><a href="my_product.php?product_id='. $row["product_id"] .'">' . $row["description"] . '</a></span>
                                    <span class="price">' . $row["price"] . '</span></div>
                                    <button class="delete" id="1" onclick="deletePrompt(this)" title="Remove item">
                                    <a href="remove_item.php?id='.$row["id"].'" style="text-decoration:none;color:#525252">
                                    ×
                                    </a>
                                    </button>
                                </div>
                            </li>
                    ';
                }
            ?>
        </ul>
        <div class="checkout">
            <a href="checkout.php" class="check">Proceed to Checkout</a>
            <!-- <button>Proceed to Checkout</button> -->
        </div>
    </div>
</body>
</html>