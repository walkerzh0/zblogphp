<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
<input type="hidden" id="post_id" value="{$article.ID}">
{if $socialcomment}
	{$socialcomment}
{else}
	<div class="post_content post-comment-list" id="post-comment-list">
		<div id="comments" class="responsesWrapper">
			{if $article.CommNums==0}
				<h3 class="comments-title">本文 <span class="commentCount">暂无</span> 评论</h3>
			{else}
				<h3 class="comments-title">共有 <span class="commentCount">{$article.CommNums}</span> 条评论</h3>
			{/if}
			<label id="AjaxCommentBegin"></label>
			<div id="comment_list" >
			<ol class="commentlist" >
				{foreach $comments as $key => $comment}
					{template:comment}
				{/foreach}
				</ol>
			</div>
			<nav id="comments_paginate" class="navigation comment-navigation u-textAlignCenter">
				{template:comments-pagebar}
			</nav>
			<label id="AjaxCommentEnd"></label>
			{template:commentpost}
		</div>
	</div>
{/if}