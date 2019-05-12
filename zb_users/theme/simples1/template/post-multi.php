{* Template Name:列表页普通文章 *}

<script>
function mOver(obj)
{
	obj.style['background']='#999999';
}

function mOut(obj)
{
	obj.style['background']='silver';
}
</script>

<div class="Article">
	<div class="StateDiv">
		<span class="ArticleCurStat">New</span>
	</div>

	<div class="ImgDiv">
			{if 0>0}
				<a href="{$article.Url}"><img src="{$article.IMAGE[0]}" alt="{$article.Title}" class="wp-post-image" width="140px" height="145px"  /></a>
			{else}
				<a href="{$article.Url}"><img src="{$zbp->Config('simples')->thumbnail}" alt="{$article.Title}" class="wp-post-image" width="140px" height="145px"  /></a>
			{/if}		

	</div>
	
	<div class="ArticleDetailDiv">
		<div class="ArticleHeader">
			<span><a href="{$article.Url}">{$article.Title}</a></span>
		</div>
		<div class="ArticleContent">
			{php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),128)).'...';{/php}
			<p>{$description}</p>
		</div>
		<div class="ArticleFooter">

				<div id="ArticleFooterLi"><i class="fa fa-calendar" margin-left="0px" ></i>{$article.Time('Y-m-d')}</div>
				<li><i class="fa fa-eye"></i>{$article.ViewNums}次浏览</li>
				<li><i class="fa fa-eye"></i>{$article.Author.Name}</li>
				<li><i class="fa fa-folder-o"></i><a href="{$article.Category.Url}" rel="category tag">{$article.Category.Name}</a></li>
				<div><a href="{$article.Url}" class="LookMore" onmouseover="mOver(this)" onmouseout="mOut(this)">阅读全文</a></div>

		</div>
	
	</div>
</div>

<!--
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

-->