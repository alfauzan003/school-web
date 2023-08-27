<?php

    $host="localhost";
    $user="root";
    $pass="";
    $database="univku";

    $konek = new mysqli($host,$user,$pass,$database);
    if ($konek -> connect_error){
        die("Database tidak terkoneksi".$konek->connect_error);
    }

?>