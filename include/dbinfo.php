<?php
header('Content-Type: text/html; charset=UTF-8');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tabledb";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $mysqli->set_charset("utf8");

    if(mysqli_connect_errno()){
        printf("connect failed: $s\n", mysqli_connect_errno());
        exit();
    }
?>