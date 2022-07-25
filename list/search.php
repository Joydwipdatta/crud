<?php 
  include "connection.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>search data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5">
       <form method="POST" action="search.php">
        <input type="text" placeholder="search data" name="search">
        <button class="btn btn-dark btn-sm" name="submit">search</button>
</form>
    
    <div class="container my-5">
      <table class="table">
        <?php
        if(isset($_POST['submit'])){
          $search=$_POST['search'];

          $query="SELECT * FROM `crud` where id LIKE '%$search%' or name LIKE '%$search%' or email LIKE'%$search%'";
          $result=mysqli_query($connection,$query);
          if($result){
          if(mysqli_num_rows($result)>0){
             echo '<thead>
              <tr>
              <th>sl no</th>
              <th>name</th>
              <th>email</th>
              </tr>  
             </thead>';
          while($row=mysqli_fetch_assoc($result)){
           echo '<tbody>
           <tr>
           <td>'.$row['id'].'</td>
           <td><a href="showdata.php?data='.$row['id'].'">'.$row['name'].'</a></td>
           <td>'.$row['email'].'</td>
           </tr>
            </tbody>';
          }
          }else{  
              echo '<h2 class=text-danger>Data not found</h2>';
            }
          }
        }
      
        ?>
      </table>
    </div>
    </div>      
  </body>
  </html>