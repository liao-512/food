<?php
//启动Session，判断Session中的用户信息
session_start();
//当用户没有登录时，重定向到登录页面
if(!isset($_SESSION['user'])){
    header('Location: login.php'); 
    exit; //停止脚本文件继续执行
}
header('Content-Type:text/html;charset=utf-8');
$dsn='mysql:host=127.0.0.1;dbname=food20013721;charset=utf8';
try{
    $pdo=new PDO($dsn,'root','root');
    // echo 'PDO连接成功';
}catch(PDOException $e){
    echo 'PDO连接失败:'.$e->getMessage();
}