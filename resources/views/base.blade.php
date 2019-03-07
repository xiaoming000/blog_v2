<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- 新 Bootstrap4 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">	 
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
	<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
	<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
	<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
	<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<!-- 图标 -->
	<link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/index.css" rel="stylesheet">
	<title>博客主页</title>
</head>
<script type="text/javascript">

</script>
<style type="text/css">

</style>
<body style="background-color: #eee;">
<div class="header">
	<div class="blog_name">
		<span class="big">小明哥</span>
		<span class="small">的个人技术博客</span>
	</div>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="#">首页</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar" style="color: white;">
		    <ul class="navbar-nav">
		    @foreach($category as $key=>$value)
		      <li class="nav-item">
		        <a class="nav-link" href="#">{{$value->chinese}}</a>
		      </li>
		    @endforeach
		    <li class="nav-item">
		      <a class="nav-link" href="#">留言</a>
		    </li>   
		    </ul>
		  </div> 			
		</div>		   
	</nav>

</div>

<div class="middle">

	<div class="toptip">
		<div class="notice">
			<i class="fa fa-volume-up"></i>
			<span class="notice_word">欢迎你！</span>			
		</div>
		<div class="login_button">
			<i class="fa fa-user"></i>
			<a href="">登入</a>
		</div>
		<div class="clear" style="clear:both;"></div>
	</div>
	@yield('mid')
</div>
<div class="footer">
	底部信息
</div>
</body>
</html>