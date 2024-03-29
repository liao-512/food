<?php
require "init.php";

//获取当前页
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

//拼接SQL语句
$sql = 'select count(*) from `cd`';
$total = (int)$pdo->query($sql)->fetchColumn(0);

$size = 8;                       //每页数量
$maxPage = ceil($total / $size); //计算总页数
$start = ($page-1) * $size;      //计算开始数值

//定义数组变量保存返回数据
$result = array(
	'total' => $total,      //总记录数
	'maxPage' => $maxPage,  //最大页数
	'list' => array()       //当前请求页的数据
);

$sql = "select `id`,`title`,`content`,`pic` from `cd` limit $start, $size";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $v){
	$result['list'][] = array(
		'id' => $v['id'],         //该条记录的ID
		'title' => $v['title'],   //该条记录的标题
		'content' => $v['content'],
		'pic' => $v['pic']        //该条记录的封面图
	);
}

echo json_encode($result);
