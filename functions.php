<?php
include('db.php');


if(isset($_POST['submit'])){

    $id = $conn->real_escape_string($_REQUEST['id']);
    $name = $conn->real_escape_string($_REQUEST['name']);
    $description = $conn->real_escape_string($_REQUEST['description']);
    $image = $conn->real_escape_string($_REQUEST['image']);
    $price = $conn->real_escape_string($_REQUEST['price']);

    $sql = "INSERT INTO products(id,name,description,image,price) VALUES('$id','$name','$description','$image','$price')";

if($conn->query($sql)==true){
    echo "records inserted successfuly";

}
else{
    echo  "ERROR: Could not able to execute $sql. " . $conn->error;
}
$conn->close();
}




function getData(){
    global $conn;
$data = "SELECT id, name, description, image ,price FROM products";

$result=$conn->query($data);



if($result->num_rows>0){
    
    while($row = $result->fetch_assoc()) {
        $id= $row['id'];
        $name= $row['name'];
        $description= $row['description'];
        $image= $row['image'];
        $price= $row['price'];
    
echo"
<div class='content'>
<img class='product-1' $image>
<h7>$id</h1>
<h3>$name</h3>
<p>$description</p>
<h6>$price</h6>
<ul>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>
<li><i class='fa fa-star' aria-hidden='true'></i></li>

</ul>

<button class='buy-4'>Buy Now</button>
</div>
";

  // echo 'id:' . $row['id']. 'name:' .$row['name']. ' description: ' . $row['description']. 'image ' . $row['image']. 'price'.$row['price']. '<br>';
    
}
}
return false;
}





?>