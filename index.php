<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon.png" />
        <title>City Express || Home</title>
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
                       <h1> City Express </h1>
                       <p>Discover the best foods and drinks near you!</p>
                       <a href="products.php" class="btn btn-danger">Browse Catalogue</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/bhive.jpg" alt="Cafe">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">BHIVE</p>
                                        <p> Coffee shop in beirut, hamra district</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/burger.jpg" alt="Restaurant">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Munchease</p>
                                    <p> Fast food restuarant in Khaldi district.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/cafe-hamra.jpg" alt="Cafe">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Cafe Hamra</p>
                                   <p> Famous lebanese restaurant and coffee shop in hamra.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
                    
               </div>
           </footer>
        </div>
    </body>
</html>