<?php
    session_start();
    
    if(empty($_SESSION["loginid"])){
        echo "<script>alert('로그인이 필요합니다. 로그인 페이지로 이동합니다.');</script>";
        echo "<script>location.href='login.html';</script>";
    }

?>

