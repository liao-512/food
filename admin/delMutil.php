<?php
require './init.php';
$ids = isset($_POST['id'])? $_POST['id'] : false;
if(!is_array($ids)){
	exit('删除失败：没有选择数据');
}
foreach($ids as $k=>$v){
	$ids[$k]=(int)$v;
}
$sql='delete from`cd` where id in ('.implode(',',$ids).')';
$pdo->query($sql);
header('Location:dp.php');