
<html>
	<head>
		<meta charset="utf-8">
		<title>食|首页</title>
		  <script src="js/jquery.min.js"></script>
		<!-- <script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
		<script src="bootstrap/dist/js/bootstrap.js"></script>
		 <link rel="stylesheet" href="css/font-awesome.min.css">
		  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
		  <link rel="stylesheet" href="css/index.css">
		
		  <style>
			  .pagelist{padding:20px;border-top:1px solid #dadada;text-align:center;}
			  .pagelist span{margin-right:10px;}
			  .pagelist a{margin:0 5px;color:#007bc4;text-decoration:none;}
			  .pagelist a:hover{text-decoration:underline;}
		  </style>
	</head>
	<body style="background-color: #932222;width: 1525px;margin: auto;"  >
		<?php
		// 导航栏
		require "./dhl.html";
		?>
		
		<!-- 轮播图 -->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 100%; margin: auto;">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/rbt3.jpeg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>麻辣小龙虾</h5>
		        <p>辣的爽快，吃得痛苦。</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/rbt2.jpeg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>西餐文化</h5>
		        <p>左手持叉，右手持刀的品食，</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/rbt1.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Third slide label</h5>
		        <p>Some representative placeholder content for the third slide.</p>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </button>
		</div>
		
		<div class="xbt "id="cdq"><h1 class="text-danger" style="">民以食为天</h1></div>
		<div class="xbt "><h2 class="text-warning" style="">让我给你推荐推荐</h2></div>
		
		<!-- 菜单区 -->
		<div style="text-align: center; width: 90%;left: 0; top: 0; margin: auto; " class="row content" >
		
		</div>
		
		<!-- 分页链接 -->
		<div class="pagelist"></div>
		
		<!-- <nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
		    <li class="page-item disabled ">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li class="page-item  active"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="index2.html#cdq">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav> -->
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

//实现无刷新分页
(function(){
	var page = 1;    //当前页
	var total = 0;   //总记录数
	var maxPage = 1; //总页数
	var $content = $(".content");   //内容容器
	var $pagelist = $(".pagelist");  //分页链接容器
	
	getData(); //自动获取第1页的数据
	
	//获取指定页的数据
	function getData(){
		$.ajax({
			type: "GET",
			url:  "./fy.php",
			data:{"page": page},
			dataType:"json",
			success: function(json){
				total = json.total;     //总记录数
				maxPage = json.maxPage; //总页数
				content(json.list);     //生成内容
			},
			complete: function(){
				pageList();   //生成分页链接
			},
			error: function(){
				alert('请求发生错误。');
			}
		});
	}
	//生成分页链接
	function pageList() {
		//防止超过最大、最小页数
		page = Math.min(page, maxPage);
		page = Math.max(page, 1);
		//拼接链接
		var html = '<div><span>共' + total + '条，第' + page + '/' + maxPage + '页</span>';
		html += '<a href="#cdq" data-page="1">首页</a>';
		html += (page>1) ? '<a href="#cdq" data-page="' + (page-1) + '">上一页</a>' : '<a href="#" data-page="1">上一页</a>';
		html += (page<maxPage) ? '<a href="#cdq" data-page="' + (page+1) + '">下一页</a>' : '<a href="#" data-page="' + maxPage + '">下一页</a>';
		html += '<a href="#cdq" data-page="' + maxPage + '">尾页</a></div>';
		var $html = $(html);
		//为链接添加单击事件
		$html.find("a").click(function(){
			page = $(this).attr("data-page");
			getData();
		});
		$pagelist.html($html);
	}
	//生成内容
	function content(list){
		//拼接内容
		var html = "";
		for(var i in list){

			html += '<div class="card col-lg-3 col-md-6 mb-5" style="border-bottom-width: 5px;border-right-width: 5px;width: 18rem;display:inline-block;"><img src="'+list[i]['pic']+'" whidth:"310" height:"200" hie class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title h5">'+list[i]['title']+'</h5><p class="card-text p">'+list[i]['content']+'️</p><a href="./show.php?id='+list[i]['id']+'" class="btn btn-primary" data-toggle="tooltip" title="点击进入详情">去吃去吃</a></div></div>';
		}
		//将内容显示到网页中
		$content.html(html);
	}
})();

</script>