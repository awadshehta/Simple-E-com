<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
if (isset($_POST['home decoraiton'])){
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
    <h1>home decoraiton</h1>
</div>
    <div class="shop-content1">


    <a href="my_product.php?product_id=26" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
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
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=27" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
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
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=28" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
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
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=29" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
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
                </form>
            </div>
    </a>


    <a href="my_product.php?product_id=30" style="text-decoration:none">
            <div class="product-box">
                <form action="add_cart.php<?php
                        if(!empty($user_id)) {
                            echo "?user_id=" . $user_id . "";
                        }
                        ?>" method="POST">
                    <img src="https://i.dummyjson.com/data/products/30/1.jpg" alt="Aeroready shirt" class="product-img">
                    <h2 class="product-title">Key Holder</h2>
                    <span class="price"> 30</span>

                    <input type="hidden" name="id" value="30">
                    <input type="hidden" name="image" value="https://i.dummyjson.com/data/products/30/1.jpg">
                    <input type="hidden" name="title" value="Key Holder">
                    <input type="hidden" name="description" value="Attractive DesignMetallic materialFour key hooksReliable &amp; DurablePremium Quality">
                    <input type="hidden" name="price" value="30">
                    <input type="hidden" name="discountpercentage" value="2.92">
                    <input type="hidden" name="rating" value="4.92">
                    <input type="hidden" name="stock" value="54">
                    <input type="hidden" name="brand" value="Golden">
                    <input type="hidden" name="category" value="home-decoration">

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

