<?php
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'db_diagnosticlab';

   $conn = new mysqli($host, $username, $password, $dbname);
   
   // check connection
   if($conn->connect_error) {
   die("Connection Failed : " . $conn->connect_error);
   } else {
   //  echo "Successfully connected";
   }
?>