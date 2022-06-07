<?php
require './init.php';
$id = isset($_GET['id'])?(int)$_GET['id']:0;
$data = array('id'=>$id);

if($_POST){

	
    $fields =array('title','content','Details','coordinate','address');
    foreach($fields as $v){
        $data[$v]=isset($_POST[$v])?trim(htmlspecialchars($_POST[$v])):'';
    }

		
    $sql='update`cd`set`title`=:title,`content`=:content,`Details`=:Details,`coordinate`=:coordinate,`address`=:address where `id`=:id';
    $stmt = $pdo->prepare($sql);
	
    // var_dump($data);
    if(!$stmt->execute($data)){
        exit('执行失败：'.implode('-',$stmt->errorInfo()));

}
header("Location: index.php");
exit;
    }

	
$id = isset($_GET['id'])?(int)$_GET['id']:0;
$data = array('id'=>$id);
$sql = 'select `title`,`content`,`id`,`pic`,`time`,`Details`,`coordinate`,`address`from `cd` where id=:id';
$stmt = $pdo->prepare($sql);
if(!$stmt->execute($data)){
    exit('执行失败: '.implode('-',$stmt->errorInfo()));
}
$data = $stmt->fetch(PDO::FETCH_ASSOC);
    if(empty($data)){
        exit('ID不存在');
    }
    $data['content']=nl2br($data['content']);
require './edit.html';