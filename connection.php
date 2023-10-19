<?php
$username = "root";
$password = "";
$dbname = "product";
try{
    $conn = mysqli_connect("localhost", $username, $password, $dbname);

}catch(PDOException $e) {
    echo $e->getMessage();
}
?>