<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['gorceris'])){

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php')?>
    <style>
        .shop-content1{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px,auto));
            gap: 3rem;
            margin: 14px;
        }
    </style>
    <style>
        .product-box {
	position: relative;
    margin-bottom: 50px;
    padding: 13px;
    box-shadow: 1px -1px 5px  rgba(0, 0, 0, 0.343) ;
    cursor: pointer;
}

.product-box:hover  .product-img {
    transform: scale(1.1,1.1);
    transition: all 0.3s ease;


}


.product-img {
	width: 100%;
	height: 200px;
	margin-bottom: 0.5rem;
  	object-fit:contain;
}
.product-title {
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 0.5rem;
}
    </style>
</head>
<body>
<?php include('topbar.php')?>

<?php include('header.php');
$user_id = $_SESSION["user"]["user_id"];
?>

<?php include('banner.php')?>

<?php include('about.php')?>
<div class="products">
    <h1>gorceris</h1>
</div>
<div class="shop-content1">


    <a href="my_product.php?product_id=21" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/21/1.png" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">- Daal Masoor 500 grams</h2>
                    <span class="price"> 20</span>

                    <input type="hidden" name="id" value="21">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/21/1.png">
                    <input type="hidden" name="title" value="- Daal Masoor 500 grams">
                    <input type="hidden" name="description" value="Fine quality Branded Product Keep in a cool and dry place">
                    <input type="hidden" name="price" value="20">
                    <input type="hidden" name="discountpercentage" value="4.81">
                    <input type="hidden" name="rating" value="4.44">
                    <input type="hidden" name="stock" value="133">
                    <input type="hidden" name="brand" value="Saaf &amp; Khaas">
                    <input type="hidden" name="category" value="groceries">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=22" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                    if(!empty($user_id)) {
                        echo "?user_id=" . $user_id . "";
                    }
                    ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/22/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Elbow Macaroni - 400 gm</h2>
                    <span class="price"> 14</span>

                    <input type="hidden" name="id" value="22">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/22/1.jpg">
                    <input type="hidden" name="title" value="Elbow Macaroni - 400 gm">
                    <input type="hidden" name="description" value="Product details of Bake Parlor Big Elbow Macaroni - 400 gm">
                    <input type="hidden" name="price" value="14">
                    <input type="hidden" name="discountpercentage" value="15.58">
                    <input type="hidden" name="rating" value="4.57">
                    <input type="hidden" name="stock" value="146">
                    <input type="hidden" name="brand" value="Bake Parlor Big">
                    <input type="hidden" name="category" value="groceries">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=23" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                    if(!empty($user_id)) {
                        echo "?user_id=" . $user_id . "";
                    }
                    ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/23/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Orange Essence Food Flavou</h2>
                    <span class="price"> 14</span>

                    <input type="hidden" name="id" value="23">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/23/1.jpg">
                    <input type="hidden" name="title" value="Orange Essence Food Flavou">
                    <input type="hidden" name="description" value="Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item">
                    <input type="hidden" name="price" value="14">
                    <input type="hidden" name="discountpercentage" value="8.04">
                    <input type="hidden" name="rating" value="4.85">
                    <input type="hidden" name="stock" value="26">
                    <input type="hidden" name="brand" value="Baking Food Items">
                    <input type="hidden" name="category" value="groceries">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=24" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                    if(!empty($user_id)) {
                        echo "?user_id=" . $user_id . "";
                    }
                    ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/24/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">cereals muesli fruit nuts</h2>
                    <span class="price"> 46</span>

                    <input type="hidden" name="id" value="24">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/24/1.jpg">
                    <input type="hidden" name="title" value="cereals muesli fruit nuts">
                    <input type="hidden" name="description" value="original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji">
                    <input type="hidden" name="price" value="46">
                    <input type="hidden" name="discountpercentage" value="16.8">
                    <input type="hidden" name="rating" value="4.94">
                    <input type="hidden" name="stock" value="113">
                    <input type="hidden" name="brand" value="fauji">
                    <input type="hidden" name="category" value="groceries">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=25" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                    if(!empty($user_id)) {
                        echo "?user_id=" . $user_id . "";
                    }
                    ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/25/1.png" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Gulab Powder 50 Gram</h2>
                    <span class="price"> 70</span>

                    <input type="hidden" name="id" value="25">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/25/1.png">
                    <input type="hidden" name="title" value="Gulab Powder 50 Gram">
                    <input type="hidden" name="description" value="Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds">
                    <input type="hidden" name="price" value="70">
                    <input type="hidden" name="discountpercentage" value="13.58">
                    <input type="hidden" name="rating" value="4.87">
                    <input type="hidden" name="stock" value="47">
                    <input type="hidden" name="brand" value="Dry Rose">
                    <input type="hidden" name="category" value="groceries">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>



</div>
<?php //include('products.php')?>

<?php include('contact.php')?>

<?php include('footer.php')?>



<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cart.js"></script>
<script src="js/api.js"></script>

</body>
</html>