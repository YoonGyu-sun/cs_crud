<?php
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');
    $var1 = $_POST['newid'];
    $var2 = $_POST['newpwd'];

    $stmt = $mysqli->stmt_init();
    $sql1 = "SELECT id FROM usert WHERE id ='$var1'";
    $result = $mysqli->query($sql1);
    if($row_id = $result->num_rows > 0) {
        echo "<script>alert('중복된 ID가 있습니다.');
        history.back();
        </script>";
        
    } else{
            $stmt = $mysqli->stmt_init();
            $stmt = $mysqli->prepare("INSERT INTO usert (id, pwd) VALUES (?,?)");
            $stmt->bind_param("ss",$var1, $var2);
            $stmt->execute();

            echo "<script>alert('가입을 성공했습니다.')</script>";
            echo "<script>location.href='login.html'</script>";
        }
    
        $stmt->close();
        $mysqli->close();
        
?>