<?php
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/ss.php');
    include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');
    
    $stmt = $mysqli->stmt_init();
        $sql = "SELECT * FROM boardt WHERE idx={$_GET['idx']}";

        $result = $mysqli->query($sql);
        $row=$result->fetch_array();
    

?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            float:left;
            font-size : 14px;
        }
      
        h2 {
            border-top:3px solid gray;
            

            width:900px;
           position: relative;
           word-break:break-all;
        }
        div h3{
            width:900px;
           position: relative;
           word-break:break-all;
        }
    </style>

    <title> 글 </title>
</head>
<body>

    <h1> 자유게시판 <h1>
    
        <div>작성자: <?php echo $row['namet'];?>&nbsp;&nbsp;</div> 
        <div><?php echo $row['dayt'];?>&nbsp;&nbsp;</div>
        <div id ="static">조회: <?php echo $row['lookt'];?>&nbsp;&nbsp;</div>
    
    <br>
        
    <form action="/cs/updating.php?idx=<?php echo $row['idx']; ?>" method="GET">

    <input type="hidden" name = "kk" value="<?php echo $row['idx'];?>">
    <textarea name="udtitle" placeholder="<?php echo $row['titlet'];?>"></textarea>
    <textarea name="udtext" placeholder="<?php echo $row['textt'];?>"></textarea>

    <input type="submit" value="전송"></input>
    </form>


    
    <button type="button" onclick="location.href='/cs/index.php'">목록</button>
    
    

</body>
</html>
