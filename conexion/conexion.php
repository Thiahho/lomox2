<?php
    $servername="";
    $username="root";
    $password="";
    $dbname="lomox";

    $conn= new mysqli($servername,$username,$password,$dbname);

    if($conn -> connect_error){
        die("Conexion fallida: " . $conn->connect_error);
    }
?>