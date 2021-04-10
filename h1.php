<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | ML KART</title>
        <link rel="shortcut icon" href="img/ML.png" type="image/png">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/bootstrap.css" rel="stylesheet">
          <link href="./css/style.css" rel="stylesheet">
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <?php
        include 'includes/header.php';
        ?>
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color:green;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 300px;
  border-radius: 50%;
}
</style>
</head>
<body>
<div class="split left">
  <div class="centered">
    <a href="products.php"><img src="mobile.gif" alt="Mobiles"></a>
    <h1>Mobiles</h1>
    <p>Smartphones ranging from the budget to the flagship category</p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <a href="productsl.php"><img src="laptops.gif" alt="Laptops"></a>
    <h1>Laptops</h1>
    <p>Laptops ranging from professional to gaming</p>
  </div>
</div>
<footer>
 <?php include 'includes/footer.php';?>
</footer>
</body>
</html> 
