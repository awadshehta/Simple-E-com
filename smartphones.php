<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['smartphones'])){

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
    <h1>smartphones</h1>
</div>
    <div class="shop-content1">


    <a href="my_product.php?product_id=1" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/1/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">iPhone 9</h2>
                    <span class="price"> 549</span>

                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/1/1.jpg">
                    <input type="hidden" name="title" value="iPhone 9">
                    <input type="hidden" name="description" value="An apple mobile which is nothing like apple">
                    <input type="hidden" name="price" value="549">
                    <input type="hidden" name="discountpercentage" value="12.96">
                    <input type="hidden" name="rating" value="4.69">
                    <input type="hidden" name="stock" value="94">
                    <input type="hidden" name="brand" value="Apple">
                    <input type="hidden" name="category" value="smartphones">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=2" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/2/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">iPhone X</h2>
                    <span class="price"> 899</span>

                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/2/1.jpg">
                    <input type="hidden" name="title" value="iPhone X">
                    <input type="hidden" name="description" value="SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...">
                    <input type="hidden" name="price" value="899">
                    <input type="hidden" name="discountpercentage" value="17.94">
                    <input type="hidden" name="rating" value="4.44">
                    <input type="hidden" name="stock" value="34">
                    <input type="hidden" name="brand" value="Apple">
                    <input type="hidden" name="category" value="smartphones">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=21" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/3/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Samsung Universe 9</h2>
                    <span class="price"> 1249</span>

                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/3/1.jpg">
                    <input type="hidden" name="title" value="Samsung Universe 9">
                    <input type="hidden" name="description" value="Samsung's new variant which goes beyond Galaxy to the Universe">
                    <input type="hidden" name="price" value="1249">
                    <input type="hidden" name="discountpercentage" value="15.46">
                    <input type="hidden" name="rating" value="4.09">
                    <input type="hidden" name="stock" value="36">
                    <input type="hidden" name="brand" value="Samsung">
                    <input type="hidden" name="category" value="smartphones">

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=4" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/4/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">OPPOF19</h2>
                    <span class="price"> 280</span>

                    <input type="hidden" name="id" value="4">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/4/1.jpg">
                    <input type="hidden" name="title" value="OPPOF19">
                    <input type="hidden" name="description" value="OPPO F19 is officially announced on April 2021.">
                    <input type="hidden" name="price" value="280">
                    <input type="hidden" name="discountpercentage" value="17.91">
                    <input type="hidden" name="rating" value="4.3">
                    <input type="hidden" name="stock" value="123">
                    <input type="hidden" name="brand" value="OPPO">
                    <input type="hidden" name="category" value="smartphones">\

                    <button type="submit" name="submit">
                        <i class="bx bx-shopping-bag add-cart"></i>
                    </button>
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=5" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/5/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Huawei P30</h2>
                    <span class="price"> 499</span>

                    <input type="hidden" name="id" value="5">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/5/1.jpg">
                    <input type="hidden" name="title" value="Huawei P30">
                    <input type="hidden" name="description" value="Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.">
                    <input type="hidden" name="price" value="499">
                    <input type="hidden" name="discountpercentage" value="10.58">
                    <input type="hidden" name="rating" value="4.09">
                    <input type="hidden" name="stock" value="32">
                    <input type="hidden" name="brand" value="Huawei">
                    <input type="hidden" name="category" value="smartphones">

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