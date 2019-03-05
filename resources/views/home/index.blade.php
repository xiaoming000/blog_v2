@extends('base')

@section('mid')
<!-- main -->
	<div class="row">
		<div class="col-xl-9 border" style="height: 1000px;">
			<!-- 轮播图 -->
			<div id="demo" class="carousel slide float-right" data-ride="carousel" style="padding-top: 10px;">
			  <!-- 指示符 -->
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			 
			  <!-- 轮播图片 -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="img-fluid" src="/img/lunbo1.jpg">
			    </div>
			    <div class="carousel-item">
			      <img class="img-fluid" src="/img/lunbo2.jpg">
			    </div>
			    <div class="carousel-item">
			      <img class="img-fluid" src="/img/lunbo3.jpg">
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

		<!-- 侧栏 -->
		<div class="col-xl-3 border" style="height: 500px;">

		</div>
	</div>
@endsection