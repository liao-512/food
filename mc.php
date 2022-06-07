<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>食|闽菜</title>
		 <script src="js/jquery.min.js"></script>
		<script src="bootstrap/dist/js/bootstrap.js"></script>
		   <link rel="stylesheet" href="css/font-awesome.css"/>
		  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
		  <link rel="stylesheet" href="css/mc.css">
		
	</head>
	<body style="background-color:#932222 ;width: 1525px;margin: auto;">
		<?php
		// 导航栏
		require "./dhl.html";
		?>
		<!-- 巨幕 -->
				<div class="jumbotron jumbo00tron-fluid" style="">
				  <div class="container" style="color: #bf152e;font-family: "宋体;">
				    <h1 class="display-4">闽菜特色</h1>
				    <p class="lead">汤菜要清，味道要淡，炒食要脆擅长烹制海鲜佳肴</p>
				  </div>
				</div>
		
		<!-- 视频 -->
		<figure>		  
		    <div class="player">
		      <video src="./img/mc.mp4"></video>
		      <div class="controls">
		        <!-- 播放/暂停 -->
		        <a href="javascript:;" class="switch fa fa-play"></a>
		        <!-- 播放进度 -->
		        <div class="progress">
		          <div class="line"></div>
		          <div class="bar"></div>
		        </div>
		        <!-- 当前播放时间/播放总时长 -->
		        <div class="timer">
		          <span class="current">00:00:00</span> / <span class="total">00:00:00</span>
		        </div>
		        <!-- 全屏/取消全屏 -->
		        <a href="javascript:;" class="expand fa fa-arrows-alt"></a>
		      </div>
		    </div>
		  </figure>
		  
		  <div style="text-align: center;font-family:"楷书";"><h1 class="" style="color: #bf152e;">十大闽菜</h1></div>
		  
		<div class="btn-toolbar  " role="toolbar" aria-label="Toolbar with button groups" style="text-align: center; margin: auto;left: 0; top: 0; ">
		  <div class="btn-group-lg mr-3 .text-danger" role="group" aria-label="First group" >
		    <a href="#mc1"><button type="button" class="btn btn-secondary">佛跳墙</button></a>
		    <a href="#mc2"><button type="button" class="btn btn-secondary">肉米鱼唇</button></a>
		    <a href="#mc3"><button type="button" class="btn btn-secondary">鸡丝燕窝</button></a>
		    <a href="#mc4"><button type="button" class="btn btn-secondary">醉排骨</button></a>
			<a href="#mc5"><button type="button" class="btn btn-secondary">翡翠珍珠鲍</button></a>
			<a href="#mc6"><button type="button" class="btn btn-secondary">走油田鸡</button></a>
			<a href="#mc7"><button type="button" class="btn btn-secondary">鸡汤鱼翅</button></a>
			<a href="#mc8"><button type="button" class="btn btn-secondary">淮山枸杞炖白鸽</button></a>
			<a href="#mc9"><button type="button" class="btn btn-secondary">银鱼抱蛋</button></a>
			<a href="#mc10"><button type="button" class="btn btn-secondary">八宝红蟳饭</button></a>
		  </div>
		  </div>
		  <!-- 卡片 -->
		  
		  
		  <div style="text-align: center; width: 90%;left: 0; top: 0; margin: auto;" class="row" >
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc1">
		    <img src="img/mc1.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">佛跳墙</h5>
		      <p class="card-text">首当其冲，佛跳墙作为最出名的宫廷菜，当然要排在第一位，其间几乎囊括人间美食，如鸡鸭、羊肘、猪肚、蹄尖、蹄筋、火腿、鸡鸭肫;如鱼唇、鱼翅、海参、鲍鱼、干贝、鱼高肚;如鸽蛋、香菇、笋尖、竹蛏。三十多种原料与辅料分别加工调制后，分层装进坛中，就好像一部野心勃勃的贺岁片，大腕荟萃自然不同凡响。</p>
		  
		  	
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc2">
		    <img src="img/mc2.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">肉米鱼唇</h5>
		      <p class="card-text">肉米鱼唇是福州地区喜庆宴席常见的汉族名菜，属于闽菜系汤菜类。该品为烩制菜肴，酸辣可口，在酒酣口腻之时，品尝这道菜，有峰回路转之感。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc3">
		    <img src="img/mc3.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">鸡丝燕窝</h5>
		      <p class="card-text">鸡丝燕窝制作工艺考究，菜品格调高雅，质地鲜嫩，味道清淡而醇美，食之滋润爽口，富有营养，隶属于闽南菜中山珍海味菜，是一样高质量菜品。</p>

		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc4">
		    <img src="img/mc4.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">醉排骨</h5>
		      <p class="card-text">醉排骨是福建省福州地区的汉族传统名菜。每逢过年过节，福州几乎家家户户都会做这道菜。因其香味浓郁，令人陶醉，故名之，桔红色，酸甜微辣，外脆里鲜嫩。福州无人不知无人不爱，在餐桌上可以说是被秒杀的一道菜。现在在各大酒楼也能尝到正宗的哦。</p>
		    </div>
		  </div>
		  
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc5">
		    <img src="img/mc5.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">翡翠珍珠鲍</h5>
		      <p class="card-text">以鲍鱼、干贝为主料，精工制作而成，形如翡翠，顾名思义。鲍鱼为八珍之冠，干贝是八珍之一。这道菜菜营养丰富、造形美观、味道鲜美，为宴席上品，一般在家庭式很少吃到。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc6">
		    <img src="img/mc6.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">走油田鸡</h5>
		      <p class="card-text">田鸡本身肉质轻弹，肉鲜味美，口感极好，加上蒜炒加爆，让人口齿留香，这还是一道健康佳肴，因为田鸡含有丰富的蛋白质、钙和磷。延缓衰老调理、骨质疏松调理、消化不良、健脾开胃调理。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc7">
		    <img src="img/mc7.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">鸡汤鱼翅</h5>
		      <p class="card-text">这本是一道宫廷小吃，曾经的达官贵人喜欢在饭前喝一碗，以达到健脾开胃的效果，现在的大酒楼推出宫廷系列，这是必不可少的一道。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;" id="mc8">
		    <img src="img/mc8.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">淮山枸杞炖白鸽</h5>
		      <p class="card-text">闽南菜因为其地理气候，菜系中总免不了健身养生的效果，这道淮山枸杞炖白鸽滋阴补气，是女生的必备良菜，当地居民注重养生的同时也不会忘了将这道菜调至至上美味，大家可以通过网上搜索学做这道菜。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc9">
		    <img src="img/mc9.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">银鱼抱蛋</h5>
		      <p class="card-text">每当冬春之交，气候逐渐转温，鱼群洄游于江海交界的闽江口。鱼群中，有一种长约七至十厘米的小鱼，体长略圆，形如玉簪，细嫩透明，在阳光照耀下，发出闪闪银光，那就是银鱼。银鱼洁白如银、滋味鲜美，因而，又有“鱼类皇后”的美称。</p>
		    </div>
		  </div>
		  
		  <div class="card col-lg-4 col-md-6 mb-5" style="width: 18rem; display:inline-block;"id="mc10">
		    <img src="img/mc10.jpg" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">八宝红蟳饭</h5>
		      <p class="card-text">八宝红蟳饭是福州传统佳肴，以红蟳为主附于鸭肉肫等八种原料与糯米一起蒸熟而得名，其材料丰富，让人食指大动。</p>
		    </div>
		  </div>
		  </div>
		  
		  <div style="text-align: center;font-family:"楷书";"><h1 class="" style="color: #bf152e;">福州闽菜特色店推荐</h1></div>
		  
		  
		  
		  
		  <!-- 底部 -->
		  <footer class="bg-dark p-4 text-light text-center ">
		    <div class="container">
		      <h3>个人网站</h3>
		      <h4>欢迎投稿</h4>
		      <p class="m-1">联系方式 | 合作事宜 | 版权投诉</p>
		      <p>闽LIAO 备12345678. © 2019-2025 liaowenjie. 1204045128@Qq.com.</p>
		    </div>
		  </footer>
	</body>
</html>
    <script src="js/mc.js"></script>
