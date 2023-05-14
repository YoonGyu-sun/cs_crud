<?php 
        include($_SERVER['DOCUMENT_ROOT'].'/cs/include/ss.php');
        include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');
        

        $var4 = date("Y-m-d H:i:s");
        $stmt=$mysqli->stmt_init();
        $sql4 = "INSERT INTO reply(con_num, name, content, date) VALUES (?, ?, ?, ?) ";
        $stmt->prepare($sql4);
        $stmt->bind_param("ssss",$_GET['idx'] ,$_SESSION['loginid'], $_POST['content'], $var4); 
        $stmt->execute();
        
        
        header('Location: /cs/look.php?idx='.$_GET['idx']);
    ?>