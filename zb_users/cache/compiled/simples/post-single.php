
<div class="articleContent">
	<div class="title"><?php  echo $article->Title;  ?></div>
	<div class="secTitleBar">
		<ul>
			<li>分类：<a href="<?php  echo $article->Category->Url;  ?>" rel="category tag"><?php  echo $article->Category->Name;  ?></a></li>
			<li>发表：<?php  echo $article->Time('Y-m-d');  ?></li>
			<li>围观(<?php  echo $article->ViewNums;  ?>)</li>
			<?php if ($article->CommNums==0) { ?>
				<li><a href="#comments">抢沙发</a></li>
			<?php }else{  ?>
				<li><a href="#comments">评论(<?php  echo $article->CommNums;  ?>)</a></li>
			<?php } ?>
		</ul>
	</div>
	<div class="articleCon post_content"><?php  echo $article->Content;  ?></div>
	<div class="articleTagsBox">
		<ul>
			<span>标签：</span>
			<?php if ($article->Tags) { ?>
				<?php  foreach ( $article->Tags as $tag) { ?>
					<a href="<?php  echo $tag->Url;  ?>" rel="tag"><?php  echo $tag->Name;  ?></a>
				<?php }   ?>
			<?php }else{  ?>
				<a href="javascript:;" rel="tag">本文暂时没有添加标签</a>
			<?php } ?>
		</ul>
	</div>
	<?php if ($zbp->Config('simples')->share_switch == 'a') { ?>
		<?php if ($zbp->Config('simples')->share) { ?>
			<div class="share"><?php  echo $zbp->Config('simples')->share;  ?></div>
		<?php }else{  ?>
			<div class="bdsharebuttonbox share"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		<?php } ?>
	<?php } ?>
	<?php if (!$article->IsLock) { ?>
		<?php  include $this->GetTemplate('comments');  ?>
	<?php } ?>
</div>