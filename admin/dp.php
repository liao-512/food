<?php
require './init.php';
require './Page.class.php';
$page=isset($_GET['page'])?(int)$_GET['page']:1;
$sql="select count(*)as total from `cd`";
$total =$pdo->query($sql)->fetchColumn();
$Page = new Page($total,4,$page);
$limit=$Page->getLimit();
$page_html=$Page->showPage();
$sql="select `id` , `title`,`time` from `cd` order by `id`  limit $limit";
$fye=$pdo->query($sql);
$data=$fye->fetchAll(PDO::FETCH_ASSOC); 


require './ht.html';
require './dp.html';