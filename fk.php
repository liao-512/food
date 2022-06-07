<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>食|反馈</title>
		<script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="bootstrap/dist/js/bootstrap.js"></script>
		 <link rel="stylesheet" href="css/font-awesome.min.css">
		  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
		  <link rel="stylesheet" href="css/index.css">
	</head>
	<body style="background-color: #932222;" >
		<?php
		// 导航栏
		require "./dhl.html";
		?>
		
		<!-- 表单 -->
		<form class="col-lg-6 my-6 mb-5 " style="margin:auto;background-color: #419696;font-size: 2rem;">
		  <div class="form-group col.col-auto">
		    <label for="exampleFormControlInput1 ">邮箱/Email </label>
		    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">请选择</label>
		    <select class="form-control" id="exampleFormControlSelect1">
		      <option>对网站的改进意见</option>
		      <option>对内容的相关建议</option>
		      <option>对相关信息的投诉</option>
		      <option>对与事实不符的反馈</option>
		      <option>夸赞网站</option>
		    </select>
		  </div>
		
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">请把想跟我们说的写在这</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div id="" style="text-align: center;">
		  	  <button type="button" style=" margin: 0 auto;" class="btn btn-outline-warning">重置</button>		
		  	<button type="button" data-toggle="modal" data-target="#exampleModal" style=" margin: 0 auto;" class="btn btn-outline-warning">提交</button>
		  </div>
		  
		  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLabel">感谢您的反馈</h5>
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		        </div>
		        <div class="modal-body">
		          食网注重每一个反馈，给予最真挚的回应。
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
				  <a href="index.php">
		          <button type="button" class="btn btn-primary" >到首页看看</button>
				  </a>
		        </div>
		      </div>
		    </div>
		  </div>
		</form>
		
		<!-- 底部 -->
		<footer class="bg-dark p-4 text-light text-center fixed-bottom">
		  <div class="container">
		    <h3>个人网站</h3>
		    <h4>欢迎投稿</h4>
		    <p class="m-1">联系方式 | 合作事宜 | 版权投诉</p>
		    <p>闽LIAO 备12345678. © 2019-2025 liaowenjie. 1204045128@Qq.com.</p>
		  </div>
		</footer>
	</body>
</html>
