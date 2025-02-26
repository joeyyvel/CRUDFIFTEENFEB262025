<?php

function connectDB(){
    $servername = "localhost";
    $username = "joey_admin15";
    $password = "pass123";
    $databasedb = "joeydatabase_fifteen";
    
    $conn = new mysqli($servername, $username, $password, $databasedb);
    
    if($conn->connect_error){
        die("CONNECTING FAILED" .$conn. "<br>" .$conn->connect_error);
    }
       echo "CONGRATULATIONS YOU ARE NOW INSIDE DATABASE<br><br>";
     return $conn;
  }

?>