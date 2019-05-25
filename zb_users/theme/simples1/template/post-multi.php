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

		{php}
			$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
			$content = $article->Content;
			preg_match_all($pattern,$content,$matchContent);
			if(isset($matchContent[1][0]))
				$temp=$matchContent[1][0];
			else
				$temp=$zbp->host."zb_users/theme/$theme/style/images/no_img.jpg";//在相应位置放置一张命名为no-image的jpg图片
		{/php}
		{if 1>0}
			<a href="{$article.Url}"><img src="{$temp}" alt="{$article.Title}" class="wp-post-image" width="145px" height="140px"  /></a>
		{else}
			<a href="{$article.Url}"><img src="{$host}zb_users/theme/simples1/style/images/no_img.jpg" alt="{$article.Title}" class="wp-post-image" width="140px" height="145px"  /></a>
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

				<div id="ArticleFooterLi"><i margin-left="0px" ></i>{$article.Time('Y-m-d')}</div>
				<li><i class="fa fa-eye"></i>{$article.ViewNums}次浏览</li>
				<!--fa-comment-o  :http://www.fontawesome.com.cn/faicons/-->
				<li><i class="fa fa-user"></i>{$article.Author.Name}</li>
				<li><i class="fa fa-folder-o"></i><a href="{$article.Category.Url}" rel="category tag">{$article.Category.Name}</a></li>
				<div><a href="{$article.Url}" class="LookMore" onmouseover="mOver(this)" onmouseout="mOut(this)">阅读全文</a></div>

		</div>
	
	</div>
</div>
