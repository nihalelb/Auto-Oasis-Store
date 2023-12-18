<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                        <h1>Your One-Stop Shop for Quality Car Parts</h1>
                        <p>Flat 40% OFF on all top-notch parts and accessories.</p>
                        <a href="products.php" class="btn btn-danger">Explore Parts</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/engine.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Engine Components</p>
                                    <p>Discover top-quality parts for engine maintenance and repair, ensuring your vehicle's peak performance.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/breaks.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Braking System Parts</p>
                                    <p>Find reliable and durable brakes, pads, and rotors for maximum safety and performance of your vehicle.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/accessories.jpg" alt="Shirt">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Car Accessories</p>
                                    <p>Upgrade your drive from advanced GPS systems to high-fidelity audio setups.</p>
                                </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p style="color:pink">Copyright &copy <span style="color:pink">Nihal El-Bateoui</span> . All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>