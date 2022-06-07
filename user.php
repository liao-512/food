
<?php

require './init.php';
$id = isset($_GET['id'])?(int)$_GET['id']:0;
$data2 = array('id'=>$id);
$sql = 'select `email`,`username`,`id`,`password`from `user` where id=:id';
$stmt = $pdo->prepare($sql);
if(!$stmt->execute($data2)){
    exit('执行失败: '.implode('-',$stmt->errorInfo()));
}
$data2 = $stmt->fetch(PDO::FETCH_ASSOC);
    if(empty($data2)){
        exit('ID不存在');
    }
    // $data['content']=nl2br($data['content']);
	require './dhl.html';
	require './user.html';