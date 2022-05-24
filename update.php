<?php  
  include 'connect.php';
  $id=$_GET['updateid'];

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
    //   echo "Data updated successfully";
      header('location:display.php');
    } else{
      die(mysqli_error($con));
    }
  }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD operarion's</title>
  </head>
  <body>
    

<div class="container my-5">
    
  <form method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="name" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile Number" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your Password" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>

  </body>
</html>