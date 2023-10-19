<?php
session_start();
include("connection.php");
$item_id = $_REQUEST["id"];
$remove_sql = "DELETE FROM items WHERE items.id = '$item_id'";
$result = mysqli_query($conn, $remove_sql);
if($result == true) {
    $message = "Your Product had been removed successfully";
    header("LOCATION: myPage.php?removeMsg=$message");
}

?>