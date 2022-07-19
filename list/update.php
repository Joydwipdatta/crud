<?php
include 'connection.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $query= "UPDATE `crud` set id=$id,name='$name',email='$email',mobile='$mobile',
    password='$password' where id=$id";
    $result=mysqli_query($connection,$query);
     if($result){
        //header('location:display.php');
        echo "upated successfully";
     }
     else{
        die(mysql_error($connection));
    }     
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
 <div class="container my-5">
 <form method="POST">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name"  name="name"  > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email"  name="email"  > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile no."  name="mobile"  > 
  </div>
  <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="password" class="form-control"  placeholder="Enter your password"  name="password" > 
  </div>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
</div>
</body>
</html>