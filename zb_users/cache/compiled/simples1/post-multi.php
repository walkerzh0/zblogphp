<?php  /* Template Name:列表页普通文章 */  ?>

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
			<?php if (0>0) { ?>
				<a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo $article->IMAGE[0];  ?>" alt="<?php  echo $article->Title;  ?>" class="wp-post-image" width="140px" height="145px"  /></a>
			<?php }else{  ?>
				<a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo $zbp->Config('simples')->thumbnail;  ?>" alt="<?php  echo $article->Title;  ?>" class="wp-post-image" width="140px" height="145px"  /></a>
			<?php } ?>		

	</div>
	
	<div class="ArticleDetailDiv">
		<div class="ArticleHeader">
			<span><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></span>
		</div>
		<div class="ArticleContent">
			<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),128)).'...'; ?>
			<p><?php  echo $description;  ?></p>
		</div>
		<div class="ArticleFooter">

				<div id="ArticleFooterLi"><i margin-left="0px" ></i><?php  echo $article->Time('Y-m-d');  ?></div>
				<li><i class="fa fa-eye"></i><?php  echo $article->ViewNums;  ?>次浏览</li>
				<!--fa-comment-o  :http://www.fontawesome.com.cn/faicons/-->
				<li><i class="fa fa-user"></i><?php  echo $article->Author->Name;  ?></li>
				<li><i class="fa fa-folder-o"></i><a href="<?php  echo $article->Category->Url;  ?>" rel="category tag"><?php  echo $article->Category->Name;  ?></a></li>
				<div><a href="<?php  echo $article->Url;  ?>" class="LookMore" onmouseover="mOver(this)" onmouseout="mOut(this)">阅读全文</a></div>

		</div>
	
	</div>
</div>

<!--
<div class="article">
	<div class="articleHeader">
		<h1 class="articleTitle"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h1>
	</div>
	<div class="articleBody clearfix">
		<div class="articleThumb">
			<?php if ($article->IMAGE_COUNT>0) { ?>
				<a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo $article->IMAGE[0];  ?>" alt="<?php  echo $article->Title;  ?>" class="wp-post-image" width="400" height="200"  /></a>
			<?php }else{  ?>
				<a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo $zbp->Config('simples')->thumbnail;  ?>" alt="<?php  echo $article->Title;  ?>" class="wp-post-image" width="400" height="200"  /></a>
			<?php } ?>
		</div>
		<div class="articleFeed">
			<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),128)).'...'; ?>
			<p><?php  echo $description;  ?></p>
		</div>
		<div class="articleTags">
			<ul>
				<?php if ($article->Tags) { ?>
					<?php  foreach ( $article->Tags as $tag) { ?>
						<a href="<?php  echo $tag->Url;  ?>" rel="tag"><?php  echo $tag->Name;  ?></a>
					<?php }   ?>
				<?php }else{  ?>
					<a href="javascript:;" rel="tag">本文暂时没有添加标签</a>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="articleFooter clearfix">
		<ul class="articleStatu">
			<li><i class="fa fa-calendar"></i><?php  echo $article->Time('Y-m-d');  ?></li>
			<li><i class="fa fa-eye"></i><?php  echo $article->ViewNums;  ?>次浏览</li>
			<li><i class="fa fa-folder-o"></i><a href="<?php  echo $article->Category->Url;  ?>" rel="category tag"><?php  echo $article->Category->Name;  ?></a></li>
		</ul>
		<a href="<?php  echo $article->Url;  ?>" class="btn btn-readmore btn-info btn-md">阅读更多</a>
	</div>
</div>

-->