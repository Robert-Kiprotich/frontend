

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src='../js/main.js'></script>
    <script src='../js/jquery.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/fontawesome.min.js"
        integrity="sha512-pafh0hrrT9ZPZl/jx0cwyp7N2+ozgQf+YK94jSupHHLD2lcEYTLxEju4mW/2sbn4qFEfxJGZyIX/yJiQvgglpw=="
        crossorigin="anonymous"></script>
    <link rel='stylesheet' href='../css/main.css' />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
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

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <div id="main"></div>
<div class="container">
  <div class="row text-center">
  <div class="col ">
<form action="../functions.php" method="post" enctype="multipart/form-data">
  <div class="form-label-group">
    <label for="">id number</label>
    <input type="number" class="form-control"  name="id" id="id"   placeholder="Enter id">
  </div>
  <div class="form-group">
    <label for="">name</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">description</label>
    <input type="text" class="form-control" name="description" id="description"  placeholder="Enter desc">
  </div>
  <div class="form-group">
    <label for="">image</label>
    <input type="file" class="form-control" name="image" id="img"  value="upload"   />
  </div>

  <div class="form-group">
    <label for="">price</label>
    <input type="text" class="form-control" name="price" id="price"  placeholder="Enter price">
  </div>
 <a href="home.php">
   <button type="submit" class="buy-4" name="submit">Submit</button>
  </a>
</form>
</div>
</div>
</div>
    </div>
</body>

</html>







