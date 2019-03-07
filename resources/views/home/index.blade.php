@extends('base')

@section('mid')
<!-- main -->
	<div class="row index" style="padding-top: 10px;">

		<div class="col-xl-9" style="height: 1000px;">
			<div class="row lunbo">
				<div class="col-xl-3">
					<div style="margin-bottom: 5px;"><img class="img-fluid" src="/img/lunbo1.jpg" style="height: 71px;width: 220px;"></div>
					<div style="margin-bottom: 5px;"><img class="img-fluid" src="/img/lunbo2.jpg" style="height: 71px;width: 220px;"></div>
					<div style="margin-bottom: 5px;"><img class="img-fluid" src="/img/lunbo3.jpg" style="height: 71px;width: 220px;"></div>
					<div style="margin-bottom: 5px;"><img class="img-fluid" src="/img/lunbo4.jpg" style="height: 71px;width: 220px;"></div>
				</div>
				<!-- 轮播图 -->
				<div id="demo" class="col-xl-9 carousel slide float-right" data-ride="carousel" >
				  <!-- 指示符 -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				    <li data-target="#demo" data-slide-to="3"></li>
				  </ul>
				 
				  <!-- 轮播图片 -->
				  <div class="carousel-inner" style="height: 300px;">
				    <div class="carousel-item active">
				      <img class="img-fluid" src="/img/lunbo1.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="/img/lunbo2.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="/img/lunbo3.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="img-fluid" src="/img/lunbo4.jpg">
				    </div>
				  </div>
				 
				  <!-- 左右切换按钮 -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
				</div>				
			</div>
			<div class="content">
			@foreach($articles as $key=>$value)
				<div class="article_list">
					<div>{{$value->title}}</div>
					<div>{{$value->except}}</div>
				</div>
				@endforeach
			</div>
			

		</div>

		<!-- 侧栏 -->
		<div class="col-xl-3 sider style="height: 500px;">
			<div class="sider_list">社交联系</div>
			<div class="sider_list">热门专题</div>
			<div class="sider_list">文章归档</div>
			<div class="sider_list">标签云</div>
		</div>
	</div>
@endsection