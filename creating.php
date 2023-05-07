<?php
include($_SERVER['DOCUMENT_ROOT'].'/cs/include/dbinfo.php');

$stmt=$mysqli->stmt_init();
$sql = "INSERT INTO boardt (titlet,namet,textt,dayt) VALUES (?,?,?,?) ";
$var1 = $_POST['titlet'];
$var2 = $_POST['namet'];
$var3 = $_POST['textt'];
$var4 = date("Y-m-d H:i:s");



$stmt->prepare($sql);
$stmt->bind_param("ssss", $var1, $var2, $var3, $var4);
$stmt->execute();

var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);


if(!empty($var1 && $var2 && $var3 && $var4)){
    echo "<script>alert('작성 완료되었습니다.')</script>";
    echo "<script>location.href='index.php'</script>";
}
else{
    echo "<script>alert('작성 불가')</script>";
}

        $stmt->close();
        $mysqli->close();
        
?>