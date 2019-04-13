<label id="cmt<?php  echo $comment->ID;  ?>"></label>
<li class="comment" id="comment-<?php  echo $comment->ID;  ?>">
	<div class="media">
		<div class="media-left">
        	<img alt='avatar' src='<?php  echo $comment->Author->Avatar;  ?>' class='avatar avatar-48 photo' height='48' width='48' />
		</div>
   		<div class="media-body">
   			<p class="author_name"><?php  echo $comment->Author->Name;  ?></p>
			<p><?php  echo $comment->Content;  ?></p>
   		</div>
   	</div>
   	<div class="comment-metadata">
   		<span class="comment-pub-time"><?php  echo $comment->Time('Y-m-d H:i');  ?></span>
   		<span class="comment-btn-reply">
 			<i class="fa fa-reply"></i> <a rel='nofollow' class='comment-reply-link' href='#respond' onclick="zbp.comment.reply('<?php  echo $comment->ID;  ?>')">回复</a> 
   		</span>
   	</div>
	<ol class="children">
		<?php  foreach ( $comment->Comments as $comment) { ?>
			<?php  include $this->GetTemplate('comment');  ?>
		<?php }   ?>
	</ol>
</li>
