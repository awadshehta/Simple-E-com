<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['laptops'])){

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
    <h1>laptops</h1>
</div>
<form method="post">
    <div class="shop-content1">
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/6/1.png" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">MacBook Pro</h2>
        <span class="price"> 1749</span>

        <input type="hidden" name="id" value="6">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/6/1.png">
        <input type="hidden" name="title" value="MacBook Pro">
        <input type="hidden" name="description" value="MacBook Pro 2021 with mini-LED display may launch between September, November">
        <input type="hidden" name="price" value="1749">
        <input type="hidden" name="discountpercentage" value="11.02">
        <input type="hidden" name="rating" value="4.57">
        <input type="hidden" name="stock" value="83">
        <input type="hidden" name="brand" value="Apple">
        <input type="hidden" name="category" value="laptops">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/7/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Samsung Galaxy Book</h2>
        <span class="price"> 1499</span>

        <input type="hidden" name="id" value="7">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/7/1.jpg">
        <input type="hidden" name="title" value="Samsung Galaxy Book">
        <input type="hidden" name="description" value="Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched">
        <input type="hidden" name="price" value="1499">
        <input type="hidden" name="discountpercentage" value="4.15">
        <input type="hidden" name="rating" value="4.25">
        <input type="hidden" name="stock" value="50">
        <input type="hidden" name="brand" value="Samsung">
        <input type="hidden" name="category" value="laptops">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/8/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Microsoft Surface Laptop 4</h2>
        <span class="price"> 1499</span>

        <input type="hidden" name="id" value="8">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/8/1.jpg">
        <input type="hidden" name="title" value="Microsoft Surface Laptop 4">
        <input type="hidden" name="description" value="Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen.">
        <input type="hidden" name="price" value="1499">
        <input type="hidden" name="discountpercentage" value="10.23">
        <input type="hidden" name="rating" value="4.43">
        <input type="hidden" name="stock" value="68">
        <input type="hidden" name="brand" value="Microsoft Surface">
        <input type="hidden" name="category" value="laptops">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/9/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">Infinix INBOOK</h2>
        <span class="price"> 1099</span>

        <input type="hidden" name="id" value="9">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/9/1.jpg">
        <input type="hidden" name="title" value="Infinix INBOOK">
        <input type="hidden" name="description" value="Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty">
        <input type="hidden" name="price" value="1099">
        <input type="hidden" name="discountpercentage" value="11.83">
        <input type="hidden" name="rating" value="4.54">
        <input type="hidden" name="stock" value="96">
        <input type="hidden" name="brand" value="Infinix">
        <input type="hidden" name="category" value="laptops">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>
    <div class="product-box">
        <img src="https://i.dummyjson.com/data/products/10/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">HP Pavilion 15-DK1056WM</h2>
        <span class="price"> 1099</span>

        <input type="hidden" name="id" value="10">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/10/1.jpg">
        <input type="hidden" name="title" value="HP Pavilion 15-DK1056WM">
        <input type="hidden" name="description" value="HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10">
        <input type="hidden" name="price" value="1099">
        <input type="hidden" name="discountpercentage" value="6.18">
        <input type="hidden" name="rating" value="4.43">
        <input type="hidden" name="stock" value="89">
        <input type="hidden" name="brand" value="HP Pavilion">
        <input type="hidden" name="category" value="laptops">

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