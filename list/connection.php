<?php
$connection= new mysqli('localhost','root','','todolist'); 
     if(!$connection){       
         die(mysqli_error($connection));
     }
     ?>