<?php
include 'connect.php';
$id=$_GET['modifyid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone_num=['phone'];
$password=['password'];

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone'];
    $password = $_POST['password'];

    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$phone_num',password='$password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:display.php');
    }    
    else{
        die(mysqli_error($con));
    }
}
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
    <div class="cointainer my-5">
        <form method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value =<?php echo $name;?>  autocomplete="off" placeholder="Enter your name">
            </div>


            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value =<?php echo $email;?> placeholder="Enter your email">
           
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="phone" autocomplete="off" value =<?php echo $phone_num;?> placeholder="Enter your phno">
           
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control" name="password" autocomplete="off" value =<?php echo $password;?> placeholder="Enter your password">
           
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Modify</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>