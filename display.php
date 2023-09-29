<?php
include 'connect.php';
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD Operations</title>
</head>

<body>
    <div clsss="cointainer">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">
            Add User</a></button>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


  <?php

$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    
    while($row=mysqli_fetch_assoc($result))
{
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $phone_num=$row['mobile'];
    $password=$row['password'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$phone_num.'</td>
    <td>'.$password.'</td>
    <td>
    <button class="btn btn-primary"><a href="modify.php?modifyid= '.$id.'" class="text-light"> Modify</a></button>
    <button class="btn btn-danger"><a href="remove.php?removedid='.$id.'" class="text-light"> Remove</a></button>
    </td>
    </tr>';

}
}

?>
    
  </tbody>
</table>
    </div>
</body>
</html>