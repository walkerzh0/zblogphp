<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
{template:header}
<div class="articleList container">
	<div class="row">
		<div class="col-md-12">
			{foreach $articles as $article}
				{if $article.IsTop}
					{template:post-istop}
				{else}
					{template:post-multi}
				{/if}
			{/foreach}
		</div>
	</div>
</div>
<div class="container pageNav">
	<div class="row">	
		<div class="col-md-12">
			<nav>
				<ul class="pagination">
					{template:pagebar}
				</ul>
			</nav>
		</div>
	</div>
</div>
{template:footer}