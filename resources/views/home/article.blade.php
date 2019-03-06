@extends('base')

@section('mid')
<div class="row article">
	<div class="col-xl-9">
		<div class=" content">
			<div class="breadcrumbs border-bottom">
				<a title="返回首页" href="https://cuiqingcai.com">
					<i class="fa fa-home"></i>
				</a>
				<small>&gt;</small>
				<a href="https://cuiqingcai.com/category/technique">PHP</a>
			</div>
			<div class="article-header border-bottom">
				<h3 class="article-title">
					<a>这是文章标题</a>
				</h3>
				<div class="meta">
					<span id="mute-category" class="muted">
						<i class="fa fa-list-alt"></i>
						<a href="https://cuiqingcai.com/category/technique/python"> Python</a>
					</span>				
					<span class="muted">
						<i class="fa fa-user"></i> 
						<a href="https://cuiqingcai.com/author/cqcre">崔庆才</a>
					</span>
					<time class="muted"><i class="fa fa-clock-o"></i> 4年前 (2015-02-12)</time>
					<span class="muted"><i class="fa fa-eye"></i> 333908浏览</span>
					<span class="muted">
						<i class="fa fa-comments-o"></i> 
						<a href="https://cuiqingcai.com/942.html#comments">6评论</a></span>							
					</div>
			</div>
			<div class="article-content">
				这是文章正文！
			</div>
		</div>

		<!-- 评论 -->
		<div class="comments">
			<div id="respond" class="respond">
                <div class="border comments-title">
                    <div class="comt-avatar pull-left">
                        <img alt="" src="https://cuiqingcai.com/avatar/.png">
                    </div>
                    <div class="comt-tip pull-left">发表我的评论</div>
                    <div class="clear"></div>
                </div>  
                <div class="comit-box">
                    <form class="comit-form">
                        <div class="form-group comit-content">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="smt">
                            <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit" tabindex="5">
                                <i class="fa fa-check-square-o"></i> 提交评论
                            </button>
                            <div class="clear"></div>
                        </div>

                        <div class="comt-comterinfo" id="comment-author-info" style="display: block;">
                            <h4>Hi，您需要填写昵称和邮箱！</h4>
                            <ul>
                                <li class="form-group">
                                    <input class="form-control" type="text" name="author" id="author" value="" tabindex="2" placeholder="昵称">
                                <li class="form-group">
                                    <input class="form-control" type="text" name="email" id="email" value="" tabindex="3" placeholder="邮箱">
                                <li class="form-group">
                                    <input class="form-control" type="text" name="url" id="url" value="" tabindex="4" placeholder="网址">
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="post-comits">
                <div class="comit-num">
                    <i class="fa fa-comments-o"></i>
                    <b>(4)</b>小伙伴在吐槽
                </div>
            </div>
            <div class="postcomments">
                <div class="c">
                    <div class="c-avatar pull-left">
                        <img class="avatar avatar-54 photo" height="54" width="54" src="https://cuiqingcai.com/avatar/acd876dc897cf7599411b98a9c9b465b.png">
                    </div>
                    <div class="c-content pull-left">
                        <div class="c-main">大佬好！</div>
                        <div class="c-meta">
                            <a>发言人</a>
                            <time>2019-02-25 10:14</time>
                            <span>回复</span>
                        </div>
                    </div>
                    <div class="clear"></div>                    
                </div>

                <div class="c">
                    <div class="c-avatar pull-left">
                        <img class="avatar avatar-54 photo" height="54" width="54" src="https://cuiqingcai.com/avatar/acd876dc897cf7599411b98a9c9b465b.png">
                    </div>
                    <div class="c-content pull-left">
                        <div class="c-main">大佬好！</div>
                        <div class="c-meta">
                            <a>发言人</a>
                            <time>2019-02-25 10:14</time>
                            <span>回复</span>
                        </div>
                    </div>
                    <div class="clear"></div>                    
                </div>

                <div class="c">
                    <div class="c-avatar pull-left">
                        <img class="avatar avatar-54 photo" height="54" width="54" src="https://cuiqingcai.com/avatar/acd876dc897cf7599411b98a9c9b465b.png">
                    </div>
                    <div class="c-content pull-left">
                        <div class="c-main">大佬好！</div>
                        <div class="c-meta">
                            <a>发言人</a>
                            <time>2019-02-25 10:14</time>
                            <span>回复</span>
                        </div>
                    </div>
                    <div class="clear"></div>                    
                </div>
            </div>
		</div>

	</div>
	<div class="col-xl-3"></div>
</div>
@endsection