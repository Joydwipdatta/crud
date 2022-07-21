<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
     
    $query="DELETE FROM `crud` WHERE  id=$id";
    $result=mysqli_query($connection,$query);
    if($result){
        //echo "delete successfully";
        header('location:index.php');
    }
    else{
        die(mysqli_error($connection));
    }

}
?>