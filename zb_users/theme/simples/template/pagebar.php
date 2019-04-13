<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
{if $pagebar}
	{foreach $pagebar.buttons as $k=>$v}
		{if $pagebar.PageNow==$k}
			<li><span class='page-numbers current'>{$k}</span></li>
		{elseif $k=='‹‹' and $pagebar.PageNow!=$pagebar.PageFirst}
		{elseif $k=='‹‹' and $pagebar.PageNow==$pagebar.PageFirst}
		{elseif $k=='››' and $pagebar.PageNow==$pagebar.PageLast}
		{elseif $k=='››' and $pagebar.PageNow!=$pagebar.PageLast}
		{elseif $k=='‹'}
			<li><a href="{$v}" class="next page-numbers">上一页</a></li>
		{elseif $k=='›'}
			<li><a href="{$v}" class="next page-numbers">下一页</a></li>
		{else}
			<li><a href="{$v}" class='page-numbers'>{$k}</a></li>
		{/if}
	{/foreach}
{/if}