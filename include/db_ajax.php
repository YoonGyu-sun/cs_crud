<?php
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');
?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

$save_num = "0";
            $stmt=$mysqli->stmt_init();
            $sql4 = "SELECT * FROM reply WHERE con_num = {$_POST['data1']} ORDER BY idx ASC limit 3, 3";
            $result = $mysqli->query($sql4);
            while($row2 = $result->fetch_array()){
            
                if($save_num == "0") {
                    //맨 처음 불러온 댓글 중 가장 최상단에 출력된 댓글의 번호를 저장한다.
                    $save_num = $row2['idx'];
                }
                // 닉네. 댓글 등록시간, 댓글 내용순으로 출력
            
                ?>
                <!-- // name에는 세션값이 들어가게  content값만 불러오면 된다 -->
                <div><b> <?php echo $row2['name'];?></b></div><br>
                <div> <?php echo $row2['content'];?> </div><br>
                <div> <?php echo $row2['date'];?> </div><br>
                
                <a href = "#"> 댓글 수정</a>
                <a href = "#"> 댓글 삭제</a>
                <h6>ㅡㅡㅡㅡㅡㅡㅡㅡㅡ</h6>
                    <?php } ?>
        </div>


</body>
</html>




    


