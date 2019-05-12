<div class="ArticleDetailMiddle">
	<div class="ArticleInfos">
		<div class="ArticleTitle">
			{$article->Title}
		</div>
		<div class="ArticleConts">
			<p>{$article->Content}</p>
		</div>
		<div class="ArticleRalation">
			<li><a href="{$article.Prev.Url}">上一篇：{$article.Prev.Title}</a></li>
			<li><a href="{$article.Next.Url}">下一篇：{$article.Next.Title}</a></li>
		</div>
		<div class="ArticleComms">
			<span class="UserCommsSpan">发表评论</span>
			<div class="UserComms">
				{template:comments}
			</div>
		</div>
	</div>

	<!--侧边栏-->
	{template:itwlk_sidebar}
</div>