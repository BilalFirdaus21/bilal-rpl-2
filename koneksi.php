<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "db_perpus";

     $conn = mysqli_connect($server, $username, $password, $database);
     if(!$conn){
        die("Gagal terhubung dengan database". mysqli_connect_error());
     }
?>