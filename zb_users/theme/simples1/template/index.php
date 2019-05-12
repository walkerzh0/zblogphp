<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
{template:header}

<div class="page_all">


	<div class="top">
		<div class="itwalk_logo">
			<img class="itwalk_logo_img" src="{$host}zb_users/theme/simples1/style/images/kide.jpg" alt="itWalkers" />
		</div>
		
		<div class="navbar">
			<ul id="menu">
				<li><a href="http://localhost/zblogphp/">首页</a></li>
				<li><a href="http://localhost/zblogphp/?id=2">留言本</a></li>
				<li><a href="http://localhost/zblogphp/?apost_free">投稿</a></li>
				<li><a href="http://localhost/zblogphp/?Login">登录</a></li>
				<li><a href="http://localhost/zblogphp/?Register">注册</a></li>
				<li><a href="http://localhost/zblogphp/zb_system/admin/index.php?act=admin">后台</a></li>
			</ul>
		</div>	
	</div>

	<div class="middle">
	
		<div class="article_list">
		
			<div class="ad_top">
				<a href="{$article.Url}"><img src="{$zbp->Config('simples')->thumbnail}" alt="{$article.Title}" class="wp-post-image" width="830px" height="280px"  /></a>
			</div>
			
			<!--文章列表-->
			{foreach $articles as $article}
				{if $article.IsTop}
					{template:post-istop}
				{else}
					{template:post-multi}
				{/if}
			{/foreach}

			<!--分页条-->
			<div class="pagebar">
				{template:pagebar}
			</div>

		</div>

		
		<div class="SdBar">
			<!--
			{template:sidebar}
			-->
			<div class="SdbarArticle">
				<div class="ArticleModHead">
					<div class="ModSglHead"><span class="ModSglHead">文章推荐</span></div>
					<div class="ModSglHead"><span>热评文章</span></div>
				</div>
				<!--网站推荐-->
				<!--热评文章-->
			</div>
			<div class="SdBarDy">
				<div class="DyModHead">
					<span class="ModSglHead">最新发表</span>
					<span class="ModSglHead">最小评论</span>
				</div>
				<!--最新发表-->
				<!--最新评论-->			
			</div>
			<div class="SdBarIntrod">
				<div class="IntrodModHead">
					<span>关于本站</span>
				</div>			
			</div>
			<div class="SdbarTags">
				<div class="TagsModHead">
					<span>标签</span>
				</div>			
				<!--Linux-->
				<!--内核-->
				<!--软件技术-->
			</div>
		</div>
	
	</div>
	
	<div class="bottom">
	
	</div>

</div>




{template:footer}