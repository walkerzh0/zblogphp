<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
{php}IMAGE::getPics($article,300,150,4);{/php}
<div class="article">
	<div class="articleHeader">
		<h1 class="articleTitle"><a href="{$article.Url}">{$article.Title}</a></h1>
	</div>
	<div class="articleBody clearfix">
		<div class="articleThumb">
			{if $article->IMAGE_COUNT>0}
				<a href="{$article.Url}"><img src="{$article.IMAGE[0]}" alt="{$article.Title}" class="wp-post-image" width="400" height="200"  /></a>
			{else}
				<a href="{$article.Url}"><img src="{$zbp->Config('simples')->thumbnail}" alt="{$article.Title}" class="wp-post-image" width="400" height="200"  /></a>
			{/if}
		</div>
		<div class="articleFeed">
			{php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),128)).'...';{/php}
			<p>{$description}</p>
		</div>
		<div class="articleTags">
			<ul>
				{if $article.Tags}
					{foreach $article.Tags as $tag}
						<a href="{$tag.Url}" rel="tag">{$tag.Name}</a>
					{/foreach}
				{else}
					<a href="javascript:;" rel="tag">本文暂时没有添加标签</a>
				{/if}
			</ul>
		</div>
	</div>
	<div class="articleFooter clearfix">
		<ul class="articleStatu">
			<li><i class="fa fa-calendar"></i>{$article.Time('Y-m-d')}</li>
			<li><i class="fa fa-eye"></i>{$article.ViewNums}次浏览</li>
			<li><i class="fa fa-folder-o"></i><a href="{$article.Category.Url}" rel="category tag">{$article.Category.Name}</a></li>
		</ul>
		<a href="{$article.Url}" class="btn btn-readmore btn-info btn-md">阅读更多</a>
	</div>
</div>