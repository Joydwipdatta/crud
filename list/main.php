<?php
$connection= new mysqli('localhost','root','','todolist'); 
     if(!$connection){       
         die(mysql_error($connection));
     } 
      

     ?>