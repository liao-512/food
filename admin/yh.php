<?php
require './init.php';
require './Page.class.php';
$page=isset($_GET['page'])?(int)$_GET['page']:1;
$sql="select count(*)as total from `user`";
$total =$pdo->query($sql)->fetchColumn();
$Page = new Page($total,3,$page);
$limit=$Page->getLimit();
$page_html=$Page->showPage();
$sql="select `id` , `username`,`password`,`email` from `user` order by `id`  limit $limit";
$fye=$pdo->query($sql);
$data=$fye->fetchAll(PDO::FETCH_ASSOC); 


require './ht.html';
require './yh.html';

// require './Page.class.php';
// $page=isset($_GET['page'])?(int)$_GET['page']:1;
// $sql="select count(*)as total from `user`";
// $total =$pdo->query($sql)->fetchColumn();
// $Page = new Page($total,3,$page);
// $limit=$Page->getLimit();
// $page_html=$Page->showPage();
// $sql="select `id`,`username` , `eamil`,`password` from `user` order by `id`  limit $limit";
// $fye=$pdo->query($sql);
// $data=$fye->fetchAll(PDO::FETCH_ASSOC); 