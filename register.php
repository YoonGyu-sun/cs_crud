<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        p{
            text-align:center;
        }
    </style>
    <SCRIPT LANGUAGE="JavaScript">
        function back(){
            history.back();
        }

    </SCRIPT>
</head>
<body>
    <form action="/cs/insert.php" method="POST">
    
        <p>ID: <input type="text" id="newid" name="newid" required></p>
        <p>PassWord: <input type="password" id="newpwd" name="newpwd" required></p>
        <p><input type="submit" value="가입">  </p>
                

    </form>
        <p><button type="button" onclick="back();">취소</button></p>
</body>
</html>