<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['skincare'])){

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
    <h1>skincare</h1>
</div>
    <div class="shop-content1">


    <a href="my_product.php?product_id=16" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/16/1.png" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Hyaluronic Acid Serum</h2>
                    <span class="price"> 19</span>

                    <input type="hidden" name="id" value="16">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/16/1.png">
                    <input type="hidden" name="title" value="Hyaluronic Acid Serum">
                    <input type="hidden" name="description" value="L'OrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid">
                    <input type="hidden" name="price" value="19">
                    <input type="hidden" name="discountpercentage" value="13.31">
                    <input type="hidden" name="rating" value="4.83">
                    <input type="hidden" name="stock" value="110">
                    <input type="hidden" name="brand" value="L'Oreal Paris">
                    <input type="hidden" name="category" value="skincare">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=17" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/17/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Tree Oil 30ml</h2>
                    <span class="price"> 12</span>

                    <input type="hidden" name="id" value="17">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/17/1.jpg">
                    <input type="hidden" name="title" value="Tree Oil 30ml">
                    <input type="hidden" name="description" value="Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,">
                    <input type="hidden" name="price" value="12">
                    <input type="hidden" name="discountpercentage" value="4.09">
                    <input type="hidden" name="rating" value="4.52">
                    <input type="hidden" name="stock" value="78">
                    <input type="hidden" name="brand" value="Hemani Tea">
                    <input type="hidden" name="category" value="skincare">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=18" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/18/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Oil Free Moisturizer 100ml</h2>
                    <span class="price"> 40</span>

                    <input type="hidden" name="id" value="18">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/18/1.jpg">
                    <input type="hidden" name="title" value="Oil Free Moisturizer 100ml">
                    <input type="hidden" name="description" value="Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid &amp; sunscreen.">
                    <input type="hidden" name="price" value="40">
                    <input type="hidden" name="discountpercentage" value="13.1">
                    <input type="hidden" name="rating" value="4.56">
                    <input type="hidden" name="stock" value="88">
                    <input type="hidden" name="brand" value="Dermive">
                    <input type="hidden" name="category" value="skincare">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=19" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/19/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Skin Beauty Serum.</h2>
                    <span class="price"> 46</span>

                    <input type="hidden" name="id" value="19">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/19/1.jpg">
                    <input type="hidden" name="title" value="Skin Beauty Serum.">
                    <input type="hidden" name="description" value="Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m">
                    <input type="hidden" name="price" value="46">
                    <input type="hidden" name="discountpercentage" value="10.68">
                    <input type="hidden" name="rating" value="4.42">
                    <input type="hidden" name="stock" value="54">
                    <input type="hidden" name="brand" value="ROREC White Rice">
                    <input type="hidden" name="category" value="skincare">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=20" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/20/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Freckle Treatment Cream- 15gm</h2>
                    <span class="price"> 70</span>

                    <input type="hidden" name="id" value="20">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/20/1.jpg">
                    <input type="hidden" name="title" value="Freckle Treatment Cream- 15gm">
                    <input type="hidden" name="description" value="Fair &amp; Clear is Pakistan's only pure Freckle cream which helpsfade Freckles, Darkspots and pigments. Mercury level is 0%, so there are no side effects.">
                    <input type="hidden" name="price" value="70">
                    <input type="hidden" name="discountpercentage" value="16.99">
                    <input type="hidden" name="rating" value="4.06">
                    <input type="hidden" name="stock" value="140">
                    <input type="hidden" name="brand" value="Fair &amp; Clear">
                    <input type="hidden" name="category" value="skincare">

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