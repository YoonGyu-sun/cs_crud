<?php
    session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');

    $Lid = $_POST['id'];
    $Lpwd = $_POST['pwd'];

    $stmt=$mysqli->stmt_init();
    $sql= "SELECT id FROM usert WHERE id = ? and pwd = ?";
    $stmt->prepare($sql);
    $stmt->bind_param("ss", $Lid, $Lpwd);

    $stmt->execute();
    $stmt->bind_result($r_id);

    $up = 0;
    while($stmt->fetch()){
    $up++;
}

    if($up < 1){
        echo "<script>alert('아이디와 비밀번호를 확인해주십시오'); history.back(-1); </script>";
    }
    else{
        $_SESSION["loginid"] = $r_id;
        
        header('Location:\cs\ ');
    }
    
        $stmt->close();
        $mysqli->close();
     

?>