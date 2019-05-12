{* Template Name:文章页单页 *}
{template:header}
	{if $article.Type==ZC_POST_TYPE_ARTICLE}
	{template:post-single}
	{else}
	{template:post-page}
	{/if}
{template:footer}

