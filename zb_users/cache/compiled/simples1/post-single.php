<div class="ArticleDetailMiddle">
	<div class="ArticleInfos">
		<div class="ArticleTitle">
			<?php  echo $article->Title;  ?>
		</div>
		<div class="ArticleConts">
			<p><?php  echo $article->Content;  ?></p>
		</div>
		<div class="ArticleRalation">
			<li><a href="<?php  echo $article->Prev->Url;  ?>">上一篇：<?php  echo $article->Prev->Title;  ?></a></li>
			<li><a href="<?php  echo $article->Next->Url;  ?>">下一篇：<?php  echo $article->Next->Title;  ?></a></li>
		</div>
		<div class="ArticleComms">
			<span class="UserCommsSpan">发表评论</span>
			<div class="UserComms">
				<?php  include $this->GetTemplate('comments');  ?>
			</div>
		</div>
	</div>

	<!--侧边栏-->
	<?php  include $this->GetTemplate('itwlk_sidebar');  ?>
</div>