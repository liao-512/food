<?php
 if($_POST){
     $data = array();
     $fields = array('username','email','password');
     foreach($fields as $v){
         $data[$v] = isset($_POST[$v])? trim(htmlspecialchars($_POST[$v])):'';
     }
     require './init.php';
     $sql = 'insert into `user`(`username`,`email`,`password`)values (:username,:email,:password)';
     $stmt = $pdo->prepare($sql);
	 if($_POST['password'] != $_POST['password2']){
	             echo "<script>alert('两次输入密码不同！')</script>";
	         }else{
	 if(!$stmt->execute($data)){
	    echo "<script>alert('该用户名已被注册！')</script> ";
	 }else {
	 	  header('Location:dl.php');
	 }
	 }
		   exit;
	 }
	 
  
	?>
<html>
	<head>
		<meta charset="utf-8">
		<title>食|注册</title>		
	</head>
	<script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="bootstrap/dist/js/bootstrap.js"></script>
	 <link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<body style="background-color: #932222;width: 1525px;margin: auto;" >
		
		<?php
		// 导航栏
		require "./dhl.html";
		?>
		<!-- 注册 -->
				<form class="col-lg-6 my-6 mb-5 " id="zhuce" method="post" style="margin:auto;background-color: #419696;font-size: 2rem;">
				<div class="form-group">
				  <label for="">用户名：</label>
				  <input type="text" class="form-control" name="username" id="" aria-describedby="emailHelp">
				  <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">邮箱：</label>
				    <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp">
				    <small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				<div class="form-group">
				  <label for="exampleInputPassword1">密码：</label>
				  <input type="password" name="password" class="form-control" id="">
				</div>
				<div class="form-group">
				  <label for="exampleInputPassword1">确认密码：</label>
				  <input type="password" name="password2" class="form-control" id="">
				</div>
				<div id="" style="text-align: center;">
					  <button type="reset" style=" margin: 0 auto;" class="btn btn-outline-warning">重置</button>		
					<button type="submit" data-toggle="modal" data-target="#" style=" margin: 0 auto;" class="btn btn-outline-warning">注册</button>
				</div>
				</form>
		
	
	
	
		<!-- 底部 -->
	<footer class="bg-dark p-4 text-light text-center">
	  <div class="container">
	    <h3>个人网站</h3>
	    <h4>欢迎投稿</h4>
	    <p class="m-1">联系方式 | 合作事宜 | 版权投诉</p>
	    <p>闽LIAO 备12345678. © 2019-2025 liaowenjie. 1204045128@Qq.com.</p>
	  </div>
	</footer>
	</body>
</html>
<script>
	
</script>