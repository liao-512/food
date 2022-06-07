<?php
//先启动Session
session_start();
//清除Session中的用户信息
unset($_SESSION['user']);
header('Location:login.php');
exit;