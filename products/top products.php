<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['top products'])){

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
    <h1>products</h1>
</div>
<form method="post">
    <div class="shop-content1">
    <?php 
        $shuffle1 = array('<div class="product-box">
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
    </div>','<div class="product-box">
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
</div>');
$shuffle2 = array('<div class="product-box">
<img src="https://i.dummyjson.com/data/products/3/1.jpg" alt="Aeroready shirt" class="product-img">
<h2 class="product-title">Samsung Universe 9</h2>
<span class="price"> 1249</span>

<input type="hidden" name="id" value="3">
<input type="hidden" name="image" value="https://i.dummyjson.com/data/products/3/1.jpg">
<input type="hidden" name="title" value="Samsung Universe 9">
<input type="hidden" name="description" value="Samsung"s new variant which goes beyond Galaxy to the Universe">
<input type="hidden" name="price" value="1249">
<input type="hidden" name="discountpercentage" value="15.46">
<input type="hidden" name="rating" value="4.09">
<input type="hidden" name="stock" value="36">
<input type="hidden" name="brand" value="Samsung">
<input type="hidden" name="category" value="smartphones">

<button type="submit" name="submit">
    <i class="bx bx-shopping-bag add-cart"></i>
</button>
</div>','<div class="product-box">
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
</div>');
$shuffle3 = array('<div class="product-box">
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
</div>','<div class="product-box">
<img src="https://i.dummyjson.com/data/products/26/1.jpg" alt="Aeroready shirt" class="product-img">
<h2 class="product-title">Plant Hanger For Home</h2>
<span class="price"> 41</span>

<input type="hidden" name="id" value="26">
<input type="hidden" name="image" value="https://i.dummyjson.com/data/products/26/1.jpg">
<input type="hidden" name="title" value="Plant Hanger For Home">
<input type="hidden" name="description" value="Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf">
<input type="hidden" name="price" value="41">
<input type="hidden" name="discountpercentage" value="17.86">
<input type="hidden" name="rating" value="4.08">
<input type="hidden" name="stock" value="131">
<input type="hidden" name="brand" value="Boho Decor">
<input type="hidden" name="category" value="home-decoration">

<button type="submit" name="submit">
    <i class="bx bx-shopping-bag add-cart"></i>
</button>
</div>');
$shuffle4 = array('<div class="product-box">
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
</div>','<div class="product-box">
<img src="https://i.dummyjson.com/data/products/16/1.png" alt="Aeroready shirt" class="product-img">
<h2 class="product-title">Hyaluronic Acid Serum</h2>
<span class="price"> 19</span>

<input type="hidden" name="id" value="16">
<input type="hidden" name="image" value="https://i.dummyjson.com/data/products/16/1.png">
<input type="hidden" name="title" value="Hyaluronic Acid Serum">
<input type="hidden" name="description" value="LOrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid">
<input type="hidden" name="price" value="19">
<input type="hidden" name="discountpercentage" value="13.31">
<input type="hidden" name="rating" value="4.83">
<input type="hidden" name="stock" value="110">
<input type="hidden" name="brand" value="LOreal Paris">
<input type="hidden" name="category" value="skincare">

<button type="submit" name="submit">
    <i class="bx bx-shopping-bag add-cart"></i>
</button>
</div>');

        $shuffle5 = array('<div class="product-box">
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
    </div>','<div class="product-box">
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
</div>');
        $shuffle6 = array('<div class="product-box">
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
    </div>','<div class="product-box">
    <img src="https://i.dummyjson.com/data/products/27/1.jpg" alt="Aeroready shirt" class="product-img">
    <h2 class="product-title">Flying Wooden Bird</h2>
    <span class="price"> 51</span>

    <input type="hidden" name="id" value="27">
    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/27/1.jpg">
    <input type="hidden" name="title" value="Flying Wooden Bird">
    <input type="hidden" name="description" value="Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm">
    <input type="hidden" name="price" value="51">
    <input type="hidden" name="discountpercentage" value="15.58">
    <input type="hidden" name="rating" value="4.41">
    <input type="hidden" name="stock" value="17">
    <input type="hidden" name="brand" value="Flying Wooden">
    <input type="hidden" name="category" value="home-decoration">

    <button type="submit" name="submit">
        <i class="bx bx-shopping-bag add-cart"></i>
    </button>
</div>');
        $shuffle7 = array('<div class="product-box">
        <img src="https://i.dummyjson.com/data/products/28/1.jpg" alt="Aeroready shirt" class="product-img">
        <h2 class="product-title">3D Embellishment Art Lamp</h2>
        <span class="price"> 20</span>

        <input type="hidden" name="id" value="28">
        <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/28/1.jpg">
        <input type="hidden" name="title" value="3D Embellishment Art Lamp">
        <input type="hidden" name="description" value="3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)">
        <input type="hidden" name="price" value="20">
        <input type="hidden" name="discountpercentage" value="16.49">
        <input type="hidden" name="rating" value="4.82">
        <input type="hidden" name="stock" value="54">
        <input type="hidden" name="brand" value="LED Lights">
        <input type="hidden" name="category" value="home-decoration">

        <button type="submit" name="submit">
            <i class="bx bx-shopping-bag add-cart"></i>
        </button>
    </div>','<div class="product-box">
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
</div>');
$shuffle8 = array('<div class="product-box">
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
</div>','<div class="product-box">
<img src="https://i.dummyjson.com/data/products/3/1.jpg" alt="Aeroready shirt" class="product-img">
<h2 class="product-title">Samsung Universe 9</h2>
<span class="price"> 1249</span>

<input type="hidden" name="id" value="3">
<input type="hidden" name="image" value="https://i.dummyjson.com/data/products/3/1.jpg">
<input type="hidden" name="title" value="Samsung Universe 9">
<input type="hidden" name="description" value="Samsungs new variant which goes beyond Galaxy to the Universe">
<input type="hidden" name="price" value="1249">
<input type="hidden" name="discountpercentage" value="15.46">
<input type="hidden" name="rating" value="4.09">
<input type="hidden" name="stock" value="36">
<input type="hidden" name="brand" value="Samsung">
<input type="hidden" name="category" value="smartphones">

<button type="submit" name="submit">
    <i class="bx bx-shopping-bag add-cart"></i>
</button>
</div>');
$shuffle9 = array('<div class="product-box">
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
</div>','<div class="product-box">
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
</div>');
$shuffle10 = array('<div class="product-box">
<img src="https://i.dummyjson.com/data/products/29/1.jpg" alt="Aeroready shirt" class="product-img">
<h2 class="product-title">Handcraft Chinese style</h2>
<span class="price"> 60</span>

<input type="hidden" name="id" value="29">
<input type="hidden" name="image" value="https://i.dummyjson.com/data/products/29/1.jpg">
<input type="hidden" name="title" value="Handcraft Chinese style">
<input type="hidden" name="description" value="Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate">
<input type="hidden" name="price" value="60">
<input type="hidden" name="discountpercentage" value="15.34">
<input type="hidden" name="rating" value="4.44">
<input type="hidden" name="stock" value="7">
<input type="hidden" name="brand" value="luxury palace">
<input type="hidden" name="category" value="home-decoration">

<button type="submit" name="submit">
    <i class="bx bx-shopping-bag add-cart"></i>
</button>
</div>','<div class="product-box">
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
</div>');
$shuffle11= array('<div class="product-box">
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
</div>','<div class="product-box">
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
</div>');
$shuffle12= array('<div class="product-box">
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
','<div class="product-box">
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
</div>');
        echo $shuffle4[array_rand($shuffle4)];
        echo $shuffle3[array_rand($shuffle3)];
        echo $shuffle2[array_rand($shuffle2)];
        echo $shuffle1[array_rand($shuffle1)];
        echo $shuffle5[array_rand($shuffle5)];
        echo $shuffle6[array_rand($shuffle6)];
        echo $shuffle7[array_rand($shuffle7)];
        echo $shuffle8[array_rand($shuffle8)];
        echo $shuffle9[array_rand($shuffle9)];
        echo $shuffle10[array_rand($shuffle10)];
        echo $shuffle11[array_rand($shuffle11)];
        echo $shuffle12[array_rand($shuffle12)];

        // shuffle($arr_shuffle);
        // print_r($arr_shuffle) ;
        // echo $arr_shuffle[shuffle($arr_shuffle)];
    
    
    ?>
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