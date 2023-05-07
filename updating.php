<?php
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/ss.php');


    $stmt=$mysqli->stmt_init();
    $var1 = $_GET['udtitle'];
    $var2 = $_GET['udtext'];
    $var3 = $_GET['kk'];
    var_dump($var3);
    
    $sql = "UPDATE boardt 
               SET titlet = ?, textt = ? WHERE idx = ?";
  
    $stmt->prepare($sql);
    $stmt->bind_param("sss", $var1, $var2, $var3);
    $stmt->execute();
    $stmt->fetch();
    

    
    $stmt->close();
    $mysqli->close();
    


?>

<script>
alert("수정되었습니다.");
location.href="index.php";
</script>