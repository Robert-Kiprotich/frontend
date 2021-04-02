<?php
include('../db.php');
include('../functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home
    </title>
    <script src='../js/jquery.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/fontawesome.min.js"
        integrity="sha512-pafh0hrrT9ZPZl/jx0cwyp7N2+ozgQf+YK94jSupHHLD2lcEYTLxEju4mW/2sbn4qFEfxJGZyIX/yJiQvgglpw=="
        crossorigin="anonymous"></script>
    <script src='../js/main.js'></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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

<!--tbl-->
<div class="container container-fluid">
<div class="row">
<?php getTableData() ?>
</div>

</div>


    </body>

    </html>