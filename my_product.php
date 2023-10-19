<?php
include("connection.php");
$product_id = $_REQUEST["product_id"];
$data = file_get_contents("js/product.json");
$data = json_decode($data, true);
$images = $data["products"][$product_id-1]["images"];
// echo "<pre>";
// print_r ($images);
// echo "</pre>";
// echo $product_id;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/myProduct.css">
    </head>
        <body>
            <div class="pop-up clearfix">
                    <div class="pics">
                        <span class="main-img"><img src="<?=$data["products"][$product_id-1]["images"][0]?>"></span>
                        <div class="additional-img">
                            <?php
                            foreach($images as $image) {
                            ?>
                            <img src="<?=$image?>">
                            <?php
                            }
                            ?>
                            <!-- <img src="https://i.dummyjson.com/data/products/1/1.jpg">
                            <img src="https://i.dummyjson.com/data/products/1/2.jpg">
                            <img src="https://i.dummyjson.com/data/products/1/3.jpg">
                            <img src="https://i.dummyjson.com/data/products/1/4.jpg"> -->
                        </div>
                    </div>
            
                <div class="product">
              
                    <h3 class="category"><?=$data["products"][$product_id-1]["category"]?></h3>
                    <span class="category"><?=$data["products"][$product_id-1]["title"]?></span>
                  
                    <span class="stock"><?=$data["products"][$product_id-1]["stock"]?></span>
                    <h1><?=$data["products"][$product_id-1]["brand"]?></h1>
            
                    <div class="block-price-rating clearfix">
                    
                        <div class="block-price clearfix">
                            <div class="price-new clearfix">
                                <span class="price-new-dollar"><?=$data["products"][$product_id-1]["price"]?> $</span> 
                            </div>

                        </div>
                      
                        <div class="block-rating clearfix">
                      
                            <span class="review"><?=$data["products"][$product_id-1]["rating"]?> Reviews</span>
                            <span class="rating"><img src="http://thrivedigital.wpengine.com/wp-content/uploads/2015/03/Review-Stars.png"></span>
                        </div>
                    </div>
                    <div class="descr">
                        <p><?=$data["products"][$product_id-1]["description"]?></p>
                    </div> 

                    
                    <form action="add_cart.php" method="post">
                        <input type="hidden" name="id" value="<?=$data["products"][$product_id-1]["id"]?>">
                        <input type="hidden" name="title" value="<?=$data["products"][$product_id-1]["title"]?>">
                        <input type="hidden" name="description" value="<?=$data["products"][$product_id-1]["description"]?>">
                        <input type="hidden" name="price" value="<?=$data["products"][$product_id-1]["price"]?>">
                        <input type="hidden" name="discountpercentage" value="<?=$data["products"][$product_id-1]["discountPercentage"]?>">
                        <input type="hidden" name="rating" value="<?=$data["products"][$product_id-1]["rating"]?>">
                        <input type="hidden" name="stock" value="<?=$data["products"][$product_id-1]["stock"]?>">
                        <input type="hidden" name="brand" value="<?=$data["products"][$product_id-1]["brand"]?>">
                        <input type="hidden" name="category" value="<?=$data["products"][$product_id-1]["category"]?>">
                        <input type="hidden" name="image" value="<?=$data["products"][$product_id-1]["images"][0]?>">
                        <?php
                            $select_sql = "SELECT * FROM items WHERE product_id='$product_id'";
                            $result = mysqli_query($conn, $select_sql);
                            if($row = $result->fetch_assoc()) {
                                // while($row = $result->fetch_assoc()) {
                                    ?>
                                    <a href="index.php" class="btn_link">Go to Home Page</a>
                                    <?php
                                // }
                            }
                            else{
                        ?>
                            <input type="submit" class="btn" value="Add to cart">
                        <?php
                            }
                        ?>
                            
                        

                    </form>

                    <div class="block-footer clearfix">
                        <div class="block-links">
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>