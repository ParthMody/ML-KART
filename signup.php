<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: h1.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | ML-KART</title>
    <link rel="shortcut icon" href="img/ML.png" type="image/png">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <?php include "includes/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
               <img src="signup.gif">
            </div>

            <div class="col-sm-5">

                <h2 style="color:green">SIGN UP</h2>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  Already have an account ?<a href="#" data-toggle="modal" data-target="#loginmodal"> Login</a>
                        </div>

                </form>
        </div>
    </div>
    </div>

      <?php include "includes/footer.php"; ?>
    </body>
</html>
