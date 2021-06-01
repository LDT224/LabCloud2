<?php
$conn_string = "host=ec2-23-23-128-222.compute-1.amazonaws.com"
        . " port=5432 "
        . " dbname=d20e8jupgraogf"
        . " user=mcwciniaxlilfb"
        . " password=6a2c8957afea1ff2afd6fece9630cc263f3f51980528ecfe6c7a2ad156ccd83b";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully Tai\n";
   }
?>