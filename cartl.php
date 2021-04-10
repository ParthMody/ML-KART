<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart | Life Style Store</title>
        <link rel="shortcut icon" href="img/ML.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/bootstrap.css" rel="stylesheet">
          <link href="./css/style.css" rel="stylesheet">
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/gpay.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <?php
        include 'includes/header.php';
        ?>

        <div class="container">
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped">

                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-removel.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><div id='container1' style='width: -20%;'></div></td>
                                          <script async src='https://pay.google.com/gp/p/js/pay.js' onload='onGooglePayLoaded()'></script>
                                          <td><a href='payment_gateway/final.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
        </div>
        
      
        
        

    </body>
</html>