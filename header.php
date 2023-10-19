<?php
session_start();
include("connection.php");
//echo $_SESSION["user"]["user_id"];
$message = "";
$username = "";
$user_id = "";
if (isset($_POST["login"])) {
	if(isset($_POST["email"]) && isset($_POST["password"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		$select_sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $select_sql);
		if(mysqli_num_rows($result) > 0) {
			$username = strstr($email,"@",true);
			$_SESSION["user"]["username"] = $username;
			
			while($row = $result->fetch_assoc()) {
				$user_id = $row["id"];	
				$_SESSION["user"]["user_id"] = $user_id;
			}
		}else{
			$message = "Error E-mail or Password incorrect";
			header("LOCATION: sign.php?errorMsg=$message");
		}
	}
}

//echo $_REQUEST["username"];

?>
<header>
<div class="left-side">
    <a href=""><img src="images/logo3.svg" alt="" width="100" height="48px"></a>
</div>
<div class="center-side">
    <ul>
        <li><a href="#" class="home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>
<div class="right-side">
	<a href="myPage.php?username=$username'" style="text-decoration:none;color:black">
		<i id="cart-icon" class='bx bx-shopping-bag'></i>
	</a>

    <?php
		if(!empty($_SESSION["user"]["username"])) {
			echo 
			"<a href=''><button type='button' class='btn btn-primary'>" . $_SESSION["user"]["username"] . "</button></a>
			<a href='sign.php'><button type='button' class='btn btn-primary'>Sign out</button></a>";
		}else{
			echo "<a href='sign.php'><i class='fa-regular fa-circle-user'></i></a>";
		}
	?>
    
<!-- <div class="box-log">
	<ul>
		<li><a href=""> Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
	</ul>

</div> -->

    
</div>
	<!-- CART -->
	<div class="cart">
				<h2 class="cart-title">Your Cart</h2>

				<div class="cart-content">

				</div>
				<!-- total -->
				<div class="total">
					<div class="total-title"><?php
						// $select_Quantity = "SELECT * FROM users WHERE email='$email' AND password='$password'";
						// $result = mysqli_query($conn, $select_Quantity);
					?>products</div>
					<!-- <div class="total-price">$fgfgdf</div> -->
				</div>
				<!-- buy button -->
				<a href="sign.php">
					<button class="btn-buy" type="button"> Buy Now </button>
				</a>
				<!-- cart close -->
				<i id="close-cart" class='bx bx-x'></i>
	</div>
</header>