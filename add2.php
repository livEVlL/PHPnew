<?php
//加密密碼
$account = $_POST['account'];
$passwd = $_POST['passwd'];
$newPass = password_hash($passwd,PASSWORD_DEFAULT);
//echo $newPass1;
//
//$newPass2 = password_hash($password,PASSWORD_DEFAULT);
//echo $newPass2;
try {
    $pdo = new PDO("mysql:host=localhost;dbname=iii", "root", "00000000");
    $stmt = $pdo->prepare("INSERT INTO member (account) VALUE (?)");
    $stmt->bindParam(1, $account);
    //$stmt->bindParam(2, $newPass);
    if ($stmt->execute()){
        echo 'OK';
    }else{
        echo 'XX';
    }
    }catch (Exception $e){
    die("Server Busy");
    }

?>