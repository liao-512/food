<?php
		 require 'init.php';
	if($_POST){
		    $data3 = array();
		if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
		$name = time().'.jpg';
		$filepath = './img/'.$name;
		if(move_uploaded_file($_FILES['file']['tmp_name'],'../img/'.$name)){
			echo $name;
			}
		    $fields = array('title','content','Details','address','coordinate');
		    foreach($fields as $v){
		        $data3[$v] = isset($_POST[$v])? trim(htmlspecialchars($_POST[$v])):'';
		    }
		    $time =date('Y-m-d H:i:s',time());
		    $data3['time']=$time;
			$data3['pic']=$filepath;
			
		    $sql = 'insert into `cd`(`title`,`time`,`content`,`Details`,`pic`,`address`,`coordinate`)values (:title,:time,:content,:Details,:pic,:address,:coordinate)';
		    $stmt = $pdo->prepare($sql);
		    if(!$stmt->execute($data3)){
		        exit('执行失败: '.implode('-',$stmt->errorInfo()));
		    }
			var_dump($data3);
		    // header("Location: fb.php");
		    exit;
		}
}
require 'ht.html';
require './fb.html';