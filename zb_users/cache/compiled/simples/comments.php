
<input type="hidden" id="post_id" value="<?php  echo $article->ID;  ?>">
<?php if ($socialcomment) { ?>
	<?php  echo $socialcomment;  ?>
<?php }else{  ?>
	<div class="post_content post-comment-list" id="post-comment-list">
		<div id="comments" class="responsesWrapper">
			<?php if ($article->CommNums==0) { ?>
				<h3 class="comments-title">本文 <span class="commentCount">暂无</span> 评论</h3>
			<?php }else{  ?>
				<h3 class="comments-title">共有 <span class="commentCount"><?php  echo $article->CommNums;  ?></span> 条评论</h3>
			<?php } ?>
			<label id="AjaxCommentBegin"></label>
			<div id="comment_list" >
			<ol class="commentlist" >
				<?php  foreach ( $comments as $key => $comment) { ?>
					<?php  include $this->GetTemplate('comment');  ?>
				<?php }   ?>
				</ol>
			</div>
			<nav id="comments_paginate" class="navigation comment-navigation u-textAlignCenter">
				<?php  include $this->GetTemplate('comments-pagebar');  ?>
			</nav>
			<label id="AjaxCommentEnd"></label>
			<?php  include $this->GetTemplate('commentpost');  ?>
		</div>
	</div>
<?php } ?>