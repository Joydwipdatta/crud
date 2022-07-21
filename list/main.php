<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $data=$_POST['checkboxdata'];
    $alldata=implode(",",$data);

    $query= "INSERT INTO crud (name,email,mobile,password,checkboxdata)
     values('$name','$email','$mobile','$password','$alldata')";
     $result= mysqli_query($connection,$query);
     if($result){
        header('location:index.php');
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
    <input type="text" class="form-control"  placeholder="Enter your name"  name="name"  required > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email"  name="email"  required > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile no."  name="mobile" require > 
  </div>
  <div>
  <input class="form-check-input mt-0" type="checkbox" name="data[]" value="Javascript" >Javascript
  <input class="form-check-input mt-0" type="checkbox" name="data[]" value="html" >html  
<input class="form-check-input mt-0" type="checkbox" name="data[]"  value="python">python
<input class="form-check-input mt-0" type="checkbox" name="data[]"  value="php">php
  </div>
  <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="password" class="form-control"  placeholder="Enter your password"  name="password" required> 
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>