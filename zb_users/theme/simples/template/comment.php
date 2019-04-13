<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
<li class="comment" id="comment-{$comment.ID}">
	<div class="media">
		<div class="media-left">
        	<img alt='avatar' src='{$comment.Author.Avatar}' class='avatar avatar-48 photo' height='48' width='48' />
		</div>
   		<div class="media-body">
   			<p class="author_name">{$comment.Author.Name}</p>
			<p>{$comment.Content}</p>
   		</div>
   	</div>
   	<div class="comment-metadata">
   		<span class="comment-pub-time">{$comment.Time('Y-m-d H:i')}</span>
   		<span class="comment-btn-reply">
 			<i class="fa fa-reply"></i> <a rel='nofollow' class='comment-reply-link' href='#respond' onclick="zbp.comment.reply('{$comment.ID}')">回复</a> 
   		</span>
   	</div>
	<ol class="children">
		{foreach $comment.Comments as $comment}
			{template:comment}
		{/foreach}
	</ol>
</li>
