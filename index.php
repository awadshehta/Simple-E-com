<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php')?>
</head>
<body>
<?php include('topbar.php')?>
    
<?php include('header.php')?>

<?php include('banner.php')?>

<?php include('about.php')?>

<?php include('products.php')?>

<?php include('contact.php')?>

<?php include('footer.php')?>



<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/cart.js"></script>
<script>
    var js_var ='<?php echo $user_id;?>';
</script>
<script src="js/api.js"></script>
</body>
</html>