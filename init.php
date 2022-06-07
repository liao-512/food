<?php
header('Content-Type:text/html;charset=utf-8');
$dsn='mysql:host=127.0.0.1;dbname=food20013721;charset=utf8';
try{
    $pdo=new PDO($dsn,'root','root');
    // echo 'PDO连接成功';
}catch(PDOException $e){
    echo 'PDO连接失败:'.$e->getMessage();
}