<?php
//session_start();
//include ["banner.php"];
//echo 'welcome';
include("connection.php");
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

<?php include('header.php');
$user_id = $_SESSION["user"]["user_id"];
?>

<?php include('banner.php')?>

<?php include('about.php')?>
<div class="products">
    <h1>Top Products</h1>
</div>
<div class="shop-content1">
    <?php
    //$product_id = 0;
    $arr_of_ids = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);
    shuffle($arr_of_ids);
    for($i=1; $i<5; $i++) {
        $product_id = $arr_of_ids[$i];
        //echo $product_id . "<br>";


        $data = file_get_contents("js/product.json");
        $data = json_decode($data, true);
        //$images = $data["products"][$product_id-1]["images"];


        //$select_sql = "SELECT * FROM items WHERE product_id = '$product_id'";
        //$output = mysqli_query($conn, $select_sql);
        //while($row = $output->fetch_assoc()) {
            echo'
            <a href="my_product.php?product_id='.$data["products"][$product_id]["id"].'" style="text-decoration:none">
                <div class="product-box">
                    <form action="add_cart.php';
                            if(!empty($user_id)) {
                                echo "?user_id=" . $user_id . "";
                            }
                            echo ' " method="POST">
                        <img src="'.$data["products"][$product_id]["images"][0].'" alt="Aeroready shirt" class="product-img">
                        <h2 class="product-title">'.$data["products"][$product_id]["title"].'</h2>
                        <span class="price">'.$data["products"][$product_id]["price"].'</span>

                        <input type="hidden" name="id" value="'.$data["products"][$product_id]["id"].'">
                        <input type="hidden" name="image" value="'.$data["products"][$product_id]["images"][0].'">
                        <input type="hidden" name="title" value="'.$data["products"][$product_id]["title"].'">
                        <input type="hidden" name="description" value="'.$data["products"][$product_id]["description"].'">
                        <input type="hidden" name="price" value="'.$data["products"][$product_id]["price"].'">
                        <input type="hidden" name="discountpercentage" value="'.$data["products"][$product_id]["discountPercentage"].'">
                        <input type="hidden" name="rating" value="'.$data["products"][$product_id]["rating"].'">
                        <input type="hidden" name="stock" value="'.$data["products"][$product_id]["stock"].'">
                        <input type="hidden" name="brand" value="'.$data["products"][$product_id]["brand"].'">
                        <input type="hidden" name="category" value="'.$data["products"][$product_id]["category"].'">

                        <button type="submit" name="submit">
                            <i class="bx bx-shopping-bag add-cart"></i>
                        </button>
                    </form>
                </div>
            </a>
        ';
        //}
        
    }
    ?>

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