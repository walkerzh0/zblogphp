{php}

{/php}
{for $len=count($articles, 0),$idx=0; $idx<$len; $idx++}
	<li class="ListRemoveDot"><a href="{$articles[$idx].Url}">[{$articles[$idx].Category.Name}]{$articles[$idx].Title}</a></li>
{/for}

