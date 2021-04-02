<?php
include('db.php');


if(isset($_POST['submit'])){

    $id = $conn->real_escape_string($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $image = '';
    
    if(isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
if(!move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.basename($image)))
die("Error uploding imge");


    }

    $price = $conn->real_escape_string($_POST['price']);

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
<img class='product-1' src='upload/$image'>
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
function getTableData(){
    global $conn;
    $data = "SELECT id, name, description, image ,price FROM products";
    
    $result=$conn->query($data);
    
    
    $dt  = '
        <div class="col-lg-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">description</th>
              <th scope="col">price</th>
        
            </tr>
          </thead>
          <tbody>';

    if($result->num_rows>0){
        
        while($row = $result->fetch_assoc()) {
            $id= $row['id'];
            $name= $row['name'];
            $description= $row['description'];
           // $image= $row['image'];
            $price= $row['price'];
        
    $dt .='
        <tr>
         
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$description.'</td>
          <td>'.$price.'</td>
        </tr>
      ';

}
echo $dt.'</tbody>
</table>
</div>
';
}
return false;
}

?>