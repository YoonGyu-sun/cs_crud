<?php
    
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/ss.php');
    
    
    session_unset();
    session_destroy();
    
    if(!isset($_SESSION['loginid'])){
        header("Location: /cs/login.html");

    }

        $stmt->close();
        $mysqli->close();
        
?>