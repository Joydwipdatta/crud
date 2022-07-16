
<?php
include 'main.php';
if(isset($_POST=['submit'])){
    $name=['name'];
    $email=['email'];
    $mobile=['mobile'];
    $password=['password'];

    $query= "insert into'crud' (name,email,mobile,password)
     values('$name,$email,$mobile,$password')";
     $result=mysqli_query($connection,$query);
     if($result){
        echo "data inserted succesfully";
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
 <form methodd="POST">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name"  name="name" autocomplete="off" > 
  </div>

  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email"  name="email" autocomplete="off" > 
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile no."  name="mobile"  autocomplete="off"> 
  </div>
  <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="password" class="form-control"  placeholder="Enter your password"  name="password" > 
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>
 
  </body>
</html>