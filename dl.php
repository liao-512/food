<?php
header('Content-Type:text/html;charset=utf-8');
	session_start();
	require("lineMysql.php");
	
	if(!empty($_POST['username'])){
	
	    $username = $_POST['username'];
	    $password = $_POST['password'];
		$captcha = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';
	    $select = $db->selectbyUser("user", $username);     # $db-> 调用实例化对象db中的方法
	    $rows=$db->rows($select);       #返回的结果集记录总数 
	    $assoc = $db->assoc($select);   #从结果集中取得一行作为关联数组
	
			if(empty($_SESSION['captcha'])){  //如果Session中不存在验证码，则退出
				exit('验证码已经过期，请刷新页面重试。');
			}
			//获取验证码并清除Session中的验证码
			$true_captcha = $_SESSION['captcha'];
			unset($_SESSION['captcha']); //限制验证码只能验证一次，防止重复利用
			//忽略字符串的大小写，进行比较
			if(strtolower($captcha) !== strtolower($true_captcha)){
			exit('您输入的验证码不正确！请刷新页面重试。');
			} 
	    if(empty($rows)){
	        echo "<script>alert('该用户不存在！')</script>";
	    }else{
	        if($password==$assoc['password']){
	            $_SESSION['username']=$username;
				 $_SESSION['id']= $assoc['id'];
	            header('Location:index.php');
	        }else{
	            echo "<script>alert('密码错误！')</script>";
	        }
	    }
	}
		require "dhl.html";
	?>


	

<html>
	<head>
		<meta charset="utf-8">
		<title>食|登录</title>		
	</head>
	<script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="bootstrap/dist/js/bootstrap.js"></script>
	 <link rel="stylesheet" href="css/font-awesome.min.css">
	  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<body style="background-color: #932222;width: 1525px;margin: auto;" >
	
		
		
	<!-- 登录表单 -->
	<form class="col-lg-6 my-6 mb-5 collapse.show" method="post" id="denlu" style="margin:auto;background-color: #96570b;font-size: 2rem;">
	  <div class="form-group">
	    <label for="" >用户名：</label>
	    <input type="text" name="username" class="form-control" id="" aria-describedby="emailHelp" required>
	    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
	  </div>
	  
	  <div class="form-group">
	    <label for="exampleInputPassword1">密码</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">验证码</label>
		<div id="">
			<input type="text" class="" id=""  name="captcha" aria-describedby="emailHelp" required>
				<a href="#" id="change">
			<img src="./code.php" id="captcha" alt="" width="200" height="50">
		</a>
		</div>
	
	  </div>
	 <div class="form-group form-check">
	   <input type="checkbox" style="width: 25px;height: 25px;" class="form-check-input" id="exampleCheck1">
	   <label class="form-check-label" for="exampleCheck1">同意<a  class="text-danger stretched-link">《用户协议》</a></label>
	 </div>
	<div id="" style="text-align: center;">
	
		  <button type="reset" style=" margin: 0 auto;"  class="btn btn-outline-warning">重置</button>		
		   
		<button type="submit" data-toggle="modal" data-target="#" style=" margin: 0 auto;" class="btn btn-outline-warning">登录</button>
	</div>
		<div>	<a href="zhuce.php">没有账号？点此注册</a></div>
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
	var captcha = document.getElementById("captcha");
	var change = document.getElementById("change");
	change.onclick = function(){
		captcha.src = "./code.php?rand=" + Math.random(); //增加一个随机参数，防止图片缓存
		return false; //阻止超链接动作
	};
</script>

