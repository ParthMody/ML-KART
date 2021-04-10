<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Laptops | ML-KART</title>
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
  from {opacity:.9} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity:.9} 
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
  <a href="productsl.php#Asus"><img src="img/asus.jpg" style="width:120%"></a>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="productsl.php#Apple"><img src="img/macbook.jpg" style="width:120%"></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
 <a href="productsl.php#Dell"><img src="img/dell.png" style="width:120%"></a>
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
        include 'includes/headerl.php';
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
                           <p><a href="#Apple"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#Hp"><span style="color:black">HP</span></a></p>
                           <p><a href="#Asus"><span style="color:black">Asus</span></a></p>
                            <p><a href="#Acer"><span style="color:black">Acer</span></a></p>
                            <p><a href="#Dell"><span style="color:black">Dell</span></a></p>
                            <p><a href="#Lenovo"><span style="color:black">Lenovo</span></a></p>
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
                            <p><a href="#Lenovo"><a href="#Dell"><a href="#Acer"><a href="#Asus"><a href="#HP"><span style="color:black">Windows</span></a></a></a></a></a></p>
                            <p><a href="#Apple"><span style="color:black">MAC-OS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                 
                   
               
                <div class="panel-heading  color">
                            <h3 style="color:#11A8FE">Featured Laptops</h3>
                        </div>



                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="Hp" style="color:#11A8FE">Hp</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/hp-pavilion-x360-6490" target="_blank"><img src="./img/hp1.png" alt="HP Pavilion x360" style="height:156px"></a>
                                    <div class="caption">
                                        <h3>HP Pavilion x360 Touchscreen </h3>
                                        <p>Price: Rs. 61,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/hp-pavilion-13-u132tu-x360-5378" target="_blank"><img src="./img/hp2.png" alt="HP Pavilion" style="height:215px"></a>
                                    <div class="caption">
                                        <h3>HP Pavilion</h3>
                                            <p>Price: Rs. 63,990.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://gadgets.ndtv.com/hp-omen-x-2s-price-in-india-13059" target="_blank"><img src="./img/hp3.png" alt="HP Omen X 2S "></a>
                                <div class="caption">
                                    <h3>HP Omen X 2S </h3>
                                        <p>Price: Rs. 2,91,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <h3 id="Asus" style="color:#11A8FE">Asus</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/asus-zenbook-flip-14-price-in-india-91278" target="_blank"><img src="./img/Asus1.png" alt="Asus Zenbook"></a>
                                    <div class="caption">
                                        <h3>Asus Zenbook Flip</h3>
                                        <p>Price: Rs. 93,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/laptops/reviews/asus-zenbook-duo-ux481-dual-screen-laptop-review-india-launch-price-2118411" target="_blank"><img src="./img/asus2.png" alt="ASUS ZenBook Duo"></a>
                                    <div class="caption">
                                        <h3>ASUS ZenBook Duo </h3>
                                            <p>Price: Rs. 83,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://gadgets.ndtv.com/asus-rog-zephyrus-duo-15-price-in-india-97510" target="_blank"><img src="./img/asus3.png" alt="ASUS ROG Zephyrus Duo " style="height:180px"></a>
                                <div class="caption">
                                    <h3>ASUS ROG Zephyrus Duo 15 </h3>
                                        <p>Price: Rs. 2,99,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <h3 id="Acer" style="color:#11A8FE">Acer</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/acer-aspire-5-a514-54g-price-in-india-98033" target="_blank"><img src="./img/acer1.png" alt="Acer Aspire 5"></a>
                                    <div class="caption">
                                        <h3>Acer Aspire 5</h3>
                                        <p>Price: Rs. 43,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/acer-swift-3-price-in-india-94077" target="_blank"><img src="./img/acer2.png" alt="Acer Swift 3"></a>
                                    <div class="caption">
                                        <h3>Acer Swift 3 </h3>
                                            <p>Price: Rs. 59,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://gadgets.ndtv.com/acer-predator-helios-300-2020-price-in-india-95069" target="_blank"><img src="./img/acer3.png" alt="Acer Predator Helios 300 " style="height:140px" ></a>
                                <div class="caption">
                                    <h3>Acer Predator Helios 300 </h3>
                                        <p>Price: Rs. 1,69,900.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <h3 id="Dell" style="color:#11A8FE">Dell</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.dell.com/id/p/inspiron-14-5406-2-in-1-laptop/pd" target="_blank"><img src="./img/dell1.png" alt="Dell Inspiron 5406 " style="height:170px" ></a>
                                    <div class="caption">
                                        <h3>Dell Inspiron 5406 </h3>
                                        <p>Price: Rs. 71,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/dell-xps-9570-8209" target="_blank"><img src="./img/dell2.png" alt="Dell XPS 9570" style="height:170px"></a>
                                    <div class="caption">
                                        <h3>Dell XPS 9570 </h3>
                                            <p>Price: Rs. 1,32,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://gadgets.ndtv.com/alienware-m15-r4-price-in-india-100846#:~:text=Alienware%20m15%20R4%20is%20a,by%20Nvidia%20GeForce%20RTX%203060." target="_blank"><img src="./img/dell3.png" alt="DELL Alienware  m15 " style="height:140px"></a>
                                <div class="caption">
                                    <h3>Dell Alienware  m15</h3>
                                        <p>Price: Rs. 2,21,499.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <h3 id="Lenovo" style="color:#11A8FE">Lenovo</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/lenovo-ideapad-slim-3-price-in-india-94227" target="_blank"><img src="./img/lenovo1.png" alt="Lenovo Ideapad Slim" style="height:170px"></a>
                                    <div class="caption">
                                        <h3>Lenovo Ideapad Slim </h3>
                                        <p>Price: Rs. 51,990.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://www.gadgetsnow.com/laptops/Lenovo-Ideapad-S540-81NE000XIN-Laptop-Core-i5-8th-Gen8-GB256-GB-SSDWindows-102-GB" target="_blank"><img src="./img/lenovo2.png" alt="Lenovo IdeaPad S540" style="height:170px"></a>
                                    <div class="caption">
                                        <h3>Lenovo IdeaPad S540 </h3>
                                            <p>Price: Rs. 60,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://www.gadgetsnow.com/laptops/Lenovo-Legion-Y540-81SX00G6IN-Laptop-Core-i7-9th-Gen16-GB1-TB-SSDWindows-106-GB" target="_blank"><img src="./img/lenovo3.png" alt="Lenovo Legion Y540" style="height:170px" ></a>
                                <div class="caption">
                                    <h3>Lenovo Legion Y540 </h3>
                                        <p>Price: Rs. 2,21,499.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=37" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <h3 id="Apple" style="color:#11A8FE">Apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/apple-macbook-air-2020-price-in-india-91790" target="_blank"><img src="./img/apple1.png" alt="Apple MacBook Air" ></a>
                                    <div class="caption">
                                        <h3>Apple MacBook Air </h3>
                                        <p>Price: Rs. 1,09,990.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <a href="https://gadgets.ndtv.com/apple-macbook-pro-7330" target="_blank"><img src="./img/apple2.png" alt="New Apple MacBook Pro"></a>
                                    <div class="caption">
                                        <h3>Apple MacBook Pro </h3>
                                            <p>Price: Rs. 1,42,900.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=39" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <a href="https://gadgets.ndtv.com/apple-macbook-pro-mvvj2ll-price-in-india-91299" target="_blank"><img src="./img/apple3.png" alt="Apple MacBook Pro"></a>
                                <div class="caption">
                                    <h3>Apple MacBook Pro 16 </h3>
                                        <p>Price: Rs. 1,99,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-addl.php?id=40" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
    
   