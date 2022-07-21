<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
  <div  class="container">
  <a href="main.php" class="text-light"><button class="btn btn-primary my-5">Add users</button></a>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
      <th scope="col">subjects</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM `crud`";
    $result=mysqli_query($connection,$query);
     if($result){
 
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password']; 
            $data=$row['checkboxdata'];
           // $alldata=implode($data);

              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$mobile.'</td>
              <td>'.$password.'</td>
              <td>'.$data.'</td>

              <td>
              <a href="update.php?updateid='.$id.'"><button class="btn btn-primary">Update</button></a>
              <a href="delete.php?deleteid='.$id.'"><button class="btn btn-danger">Delete</button></a>         
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