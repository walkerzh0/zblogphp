{*template:header :replace header.php*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="{$language}" />
	<title>{$name}-{$title}</title>
	<meta name="generator" content="{$zblogphp}" />
	<meta name="viewport" content="width=device-width">
	<meta name="renderer" content="webkit" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
</head>
<body class="multi {$type}">
<div id="divAll">							<!--divAll start-->
	<div id="divPage">							<!--divPage start-->
	<div id="divMiddle">								<!--divMiddle start-->
		<div id="divTop">								<!--divTop start-->
			<h1 id="BlogTitle"><a href="{$host}">WalkersOnWay</a></h1>
			<h3 id="BlogSubTitle">slowly, drop teclonogy!!!</h3>
		</div>										<!--divTop end-->
		<div id="divNavBar">								<!--divNavBar start-->
<ul>
{module:navbar}
</ul>
		</div>										<!--divNavBar end-->
		<div id="divMain">								<!--divMain start-->
{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}
<div class="pagebar">{template:pagebar}</div>
		</div>										<!--divMain end-->
		<div id="divSidebar">								<!--divSidebar start-->
{template:sidebar}
		</div>										<!--divSidebar end-->
		<div id="divBottom">								<!--divBottom start-->
			<h4 id="BlogPowerBy">Powered By {$zblogphphtml}</h4>
			<h3 id="BlogCopyRight">{$copyright}</h3>
		</div><div class="clear"></div>							<!--divBottom end-->
	</div><div class="clear"></div>							<!--divMiddle-->
	</div><div class="clear"></div> 					<!--divPage-->
</div>									<!--divAll-->
{$footer}
</body>
</html>
{*template:footer :replace footer.php*}
