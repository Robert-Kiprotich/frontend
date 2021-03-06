<?php
include('db.php');
include('functions.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home
    </title>
    <script src='js/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/fontawesome.min.js"
        integrity="sha512-pafh0hrrT9ZPZl/jx0cwyp7N2+ozgQf+YK94jSupHHLD2lcEYTLxEju4mW/2sbn4qFEfxJGZyIX/yJiQvgglpw=="
        crossorigin="anonymous"></script>
    <script src='js/main.js'></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

</head>

<body>
    <!--Top navigation-->
    <div class="topNav">
        <ol class="nav">
            <li class="navList"><a onclick="openNav()"><i class="fa fa-bars"></i></a></li>
            <li class="navList"><a href="default.php"><i class="fas fa-home"></i>&nbsp;home</a></li>
            <li class="navList"><a href="default.php"><i class="fas fa-phone-square-alt"></i>&nbsp;contact us</a></li>
            <li class="navList"><a href="default.php"><i class="fas fa-truck-loading"></i>&nbsp;products</a></li>
            <li class="navList"><a href="default.php"><i class="fas fa-shopping-basket"></i>&nbsp;checkout</a></li>
            <li class="navList"><a href="default.php"><i class="fas fa-shopping-cart"></i>&nbsp;cart</a></li>
        </ol>
    </div>

    <!--sideNav-->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->

    <div id="main"></div>
    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <!--slider-->

    <div class="slider">
        <div class="item" id="text-glow"><img src="images/shoes.png" alt="">
            <h3>shoes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <h6>$100.00</h6>
            <button class="animated"><span>Buy Now</span> </button>
        </div>
        <div class="item">
            <p class="glow">Offer Lasts for 1 week</p>
            <p style="font-family: 'Orbitron', sans-serif;" id="countdown"></p>
        </div>
        <div class="item"><img src="images/red.png" alt="">
            <h3>shoes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <h6>$100.00</h6>
            <button class="animated"><span>Buy Now</span></button>
        </div>
        <div class="item"><img src="images/black.png" alt="">
            <h3>shoes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <h6>$100.00</h6>
            <button class="animated"><span>Buy Now</span></button>
        </div>
        <div class="item"><img src="images/shoes.png" alt="">
            <h3>shoes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <h6>$100.00</h6>
            <button class="animated"><span>Buy Now</span></button>
        </div>
    </div>

    <!--carousel-->
    <div class="gallery">
        <?php getData();?> 
      <!--  <div class="content">
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>
        <div class="content">
            <img class="product-1" src="images/earphone.png">
            <h3>Earphone</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <h6>$40.00</h6>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
            </ul>
            <button class="buy-4">Buy Now</button>
        </div>-->
    </div>

    </div>

    <!--footer-->

    <footer class="footer">

        <div class="footer-left">
            <p>left</p>
            <p>contact us</p>
            <p>services</p>
            <p>info</p>
        </div>

        <div class="footer-center">
            <p>center</p>
            <p>contact us</p>
            <p>services</p>
            <p>info</p>

        </div>

        <div class="footer-right">
            <p>rigth</p>
            <p>contact us</p>
            <p>services</p>
            <p>info</p>

        </div>

    </footer>

</body>

</html>