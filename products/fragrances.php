<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['fragrances'])){

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

<?php include('header.php')?>

<?php include('banner.php')?>

<?php include('about.php')?>
<div class="products">
    <h1>fragrances</h1>
</div>
<form method="post">
    <div class="shop-content1">
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/11/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">perfume Oil</h2>
        <span class="price"> 13</span>

        <input type="hidden" name="id" value="11">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/11/1.jpg">
        <input type="hidden" name="title" value="perfume Oil">
        <input type="hidden" name="description" value="Mega Discount, Impression of Acqua Di Gio by GiorgioArmani concentrated attar perfume Oil">
        <input type="hidden" name="price" value="13">
        <input type="hidden" name="discountpercentage" value="8.4">
        <input type="hidden" name="rating" value="4.26">
        <input type="hidden" name="stock" value="65">
        <input type="hidden" name="brand" value="Impression of Acqua Di Gio">
        <input type="hidden" name="category" value="fragrances">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/12/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Brown Perfume</h2>
        <span class="price"> 40</span>

        <input type="hidden" name="id" value="12">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/12/1.jpg">
        <input type="hidden" name="title" value="Brown Perfume">
        <input type="hidden" name="description" value="Royal_Mirage Sport Brown Perfume for Men &amp; Women - 120ml">
        <input type="hidden" name="price" value="40">
        <input type="hidden" name="discountpercentage" value="15.66">
        <input type="hidden" name="rating" value="4">
        <input type="hidden" name="stock" value="52">
        <input type="hidden" name="brand" value="Royal_Mirage">
        <input type="hidden" name="category" value="fragrances">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/13/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Fog Scent Xpressio Perfume</h2>
        <span class="price"> 13</span>

        <input type="hidden" name="id" value="13">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/13/1.jpg">
        <input type="hidden" name="title" value="Fog Scent Xpressio Perfume">
        <input type="hidden" name="description" value="Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men">
        <input type="hidden" name="price" value="13">
        <input type="hidden" name="discountpercentage" value="8.14">
        <input type="hidden" name="rating" value="4.59">
        <input type="hidden" name="stock" value="61">
        <input type="hidden" name="brand" value="Fog Scent Xpressio">
        <input type="hidden" name="category" value="fragrances">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/14/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Non-Alcoholic Concentrated Perfume Oil</h2>
        <span class="price"> 120</span>

        <input type="hidden" name="id" value="14">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/14/1.jpg">
        <input type="hidden" name="title" value="Non-Alcoholic Concentrated Perfume Oil">
        <input type="hidden" name="description" value="Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil">
        <input type="hidden" name="price" value="120">
        <input type="hidden" name="discountpercentage" value="15.6">
        <input type="hidden" name="rating" value="4.21">
        <input type="hidden" name="stock" value="114">
        <input type="hidden" name="brand" value="Al Munakh">
        <input type="hidden" name="category" value="fragrances">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/15/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Eau De Perfume Spray</h2>
        <span class="price"> 30</span>

        <input type="hidden" name="id" value="15">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/15/1.jpg">
        <input type="hidden" name="title" value="Eau De Perfume Spray">
        <input type="hidden" name="description" value="Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality">
        <input type="hidden" name="price" value="30">
        <input type="hidden" name="discountpercentage" value="10.99">
        <input type="hidden" name="rating" value="4.7">
        <input type="hidden" name="stock" value="105">
        <input type="hidden" name="brand" value="Lord - Al-Rehab">
        <input type="hidden" name="category" value="fragrances">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>

    </div>
</form>
<?php //include('products.php')?>

<?php include('contact.php')?>

<?php include('footer.php')?>



<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cart.js"></script>
<script src="js/api.js"></script>

</body>
</html>