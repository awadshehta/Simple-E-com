<?php
session_start();
include("connection.php");
$product_id = $_POST["id"];
$title = $_POST["title"];
$description = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["description"]);                 
$price = $_POST["price"];
$discountpercentage = $_POST["discountpercentage"];
$rating = $_POST["rating"];
$stock = $_POST["stock"];
$brand = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["brand"]);
$category = $_POST["category"];
$thumbnail = $_POST["image"];
$user_id = $_SESSION["user"]["user_id"];

if(!empty($user_id)) {
    $sql = "INSERT INTO items (title, description, price, discountPercentage, rating, stock, brand, category, thumbnail, product_id, user_id)
    VALUES ('$title', '$description', '$price', N'$discountpercentage', '$rating', '$stock', '$brand', '$category', '$thumbnail', '$product_id', $user_id)
    ";
    $result = mysqli_query($conn, $sql);
    if($result == true) {
        $message = "Your Product has been added successfully";
        header("LOCATION: index.php?user_id=$user_id");
    }
}else{
    header("LOCATION: sign.php");
}

?>