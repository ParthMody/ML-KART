<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
<head>
        <title>Mobile | ML-KART</title>
        <link rel="shortcut icon" href="img/ML.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration:240s;
  animation-name: fade;
  animation-duration:240s;
}

@-webkit-keyframes fade {
  from {opacity:.8} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity:.8} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="products.php#samsung"><img src="sams21.jpg" style="width:120%"></a>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="products.php#ios"><img src="iphone12.jpg" style="width:120%"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
 <a href="products.php#oneplus"><img src="oneplus.jpg" style="width:120%"></a>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> 
</body>
<body style="padding-top: 50px;">

    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">
            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:#11A8FE">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#ios"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#oneplus"><span style="color:black">ONEPLUS</span></a></p>
                            <p><a href="#xiaomi"><span style="color:black">XIAOMI</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading  color">
                        <h3 style="color:#11A8FE">Operating System</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#samsung"><span style="color:black">ANDROID</span></a></p>
                            <p><a href="#ios"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                 
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:#11A8FE">Featured Mobiles</h3>
                        </div>

                        <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/apple_iphone_12_pro_max-10237.php" target="_blank"><img src="./img/iphone12.jpg" alt="iphone 12" ></a>
                                    <div class="caption">
                                        <h3>Apple iPhone 12 Pro Max</h3>
                                        <p>Price: Rs. 1,19,900.00 <br></p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>


                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php" target="_blank"><img src="./img/sams21p.jpg" alt="Samsung Galaxy S21 Ultra" style="height:230px"></a>
                                    <div class="caption">
                                        <h3>Samsung Galaxy S21 Ultra</h3>
                                            <p>Price: Rs. 1,05,999.00<br> </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gsmarena.com/oneplus_9_pro-10806.php" target="_blank"><img src="./img/oneplus9p.png" alt="oneplus 9 pro" style="height:255px"></a>
                                <div class="caption">
                                    <h3>OnePlus 9 pro</h3>
                                        <p>Price: Rs. 64,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Pre-book now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(12)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:#11A8FE">apple</h3>
                        </div>
                        <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/apple_iphone_12_pro_max-10237.php" target="_blank"><img src="./img/iphone12.jpg" alt="iphone 12" ></a>
                                    <div class="caption">
                                        <h3>Apple iPhone 12 Pro Max</h3>
                                        <p>Price: Rs. 1,19,900.00 <br></p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/apple_iphone_11_pro_max-9846.php" target="_blank"><img src="./img/iphone11.png" alt="iphone 11" ></a>
                                    <div class="caption">
                                        <h3>Apple iPhone 11 Pro Max</h3>
                                        <p>Price: Rs. 1,08,599.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                  
                      <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gsmarena.com/apple_iphone_11-9848.php" target="_blank"><img src="./img/iphone11w.png" alt="iphone 11w" ></a>
                                <div class="caption">
                                    <h3>Apple iPhone 11</h3>
                                        <p>Price: Rs. 59,900.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:#11A8FE">samsung</h3>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/samsung_galaxy_s21_ultra_5g-10596.php" target="_blank"><img src="./img/sams21p.jpg" alt="Samsung Galaxy S21 Ultra" style="height:205px"></a>
                                    <div class="caption">
                                        <h3>Samsung Galaxy S21 Ultra</h3>
                                            <p>Price: Rs. 1,05,999.00<br> </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/samsung_galaxy_s21_5g-10626.php" target="_blank"><img src="./img/sams21.jpg" alt="Samsung Galaxy S21 Ultra" style="height:230px"></a>
                                    <div class="caption">
                                        <h3>Samsung Galaxy S21</h3>
                                            <p>Price: Rs. 69,999.00<br> </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gsmarena.com/samsung_galaxy_a72-10469.php" target="_blank"><img src="./img/sama72.jpg" alt="samsung a72" style="height:230px"></a>
                                <div class="caption">
                                    <h3>Samsung Galaxy A72</h3>
                                        <p>Price: 34,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="oneplus" style="color:#11A8FE">oneplus</h3>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gsmarena.com/oneplus_9_pro-10806.php" target="_blank"><img src="./img/oneplus9p.png" alt="oneplus 9 pro" style="height:255px"></a>
                                <div class="caption">
                                    <h3>OnePlus 9 pro</h3>
                                        <p>Price: Rs. 64,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Pre-book now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(12)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                   </div>

                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/oneplus_8-10161.php" target="_blank"><img src="./img/op8.png" alt="oneplus 8" ></a>
                                    <div class="caption">
                                        <h3>OnePlus 8</h3>
                                        <p>Price: Rs. 41,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/oneplus_nord-10289.php" target="_blank"><img src="./img/opnord.png" alt="oneplus nord"></a>
                                    <div class="caption">
                                        <h3>OnePlus Nord 5G</h3>
                                            <p>Price: Rs. 29,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(11)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
    
                   
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="xiaomi" style="color:#11A8FE">xiaomi</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/xiaomi_redmi_note_10_pro-10662.php" target="_blank"><img src="./img/rn10p.jpg" alt="note 10 pro" ></a>
                                    <div class="caption">
                                        <h3>Redmi Note 10 pro</h3>
                                        <p>Price: Rs. 16,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(16)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gsmarena.com/xiaomi_poco_x3_pro-10802.php" target="_blank"><img src="./img/pocox3p.jpg" alt="pocox3" style="height:235px"></a>
                                    <div class="caption">
                                        <h3>Poco X3 pro</h3>
                                            <p>Price: Rs. 18,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(15)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gsmarena.com/xiaomi_redmi_k20-9720.php" target="_blank"><img src="./img/k20.png" alt="Redmi K20" style="height:235px"></a>
                                <div class="caption">
                                    <h3>Redmi K20</h3>
                                        <p>Price: Rs. 17,499.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(14)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php';?>
</body>
</html>
    
   