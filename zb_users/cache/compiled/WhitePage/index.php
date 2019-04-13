<?php  /*template:header :replace header.php*/  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php  echo $language;  ?>" lang="<?php  echo $language;  ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="<?php  echo $language;  ?>" />
	<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
	<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
	<meta name="viewport" content="width=device-width">
	<meta name="renderer" content="webkit" />
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
</head>
<body class="multi <?php  echo $type;  ?>">
<div id="divAll">							<!--divAll start-->
	<div id="divPage">							<!--divPage start-->
	<div id="divMiddle">								<!--divMiddle start-->
		<div id="divTop">								<!--divTop start-->
			<h1 id="BlogTitle"><a href="<?php  echo $host;  ?>">WalkersOnWay</a></h1>
			<h3 id="BlogSubTitle">slowly, drop teclonogy!!!</h3>
		</div>										<!--divTop end-->
		<div id="divNavBar">								<!--divNavBar start-->
<ul>
<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
</ul>
		</div>										<!--divNavBar end-->
		<div id="divMain">								<!--divMain start-->
<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>
<div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
		</div>										<!--divMain end-->
		<div id="divSidebar">								<!--divSidebar start-->
<?php  include $this->GetTemplate('sidebar');  ?>
		</div>										<!--divSidebar end-->
		<div id="divBottom">								<!--divBottom start-->
			<h4 id="BlogPowerBy">Powered By <?php  echo $zblogphphtml;  ?></h4>
			<h3 id="BlogCopyRight"><?php  echo $copyright;  ?></h3>
		</div><div class="clear"></div>							<!--divBottom end-->
	</div><div class="clear"></div>							<!--divMiddle-->
	</div><div class="clear"></div> 					<!--divPage-->
</div>									<!--divAll-->
<?php  echo $footer;  ?>
</body>
</html>
<?php  /*template:footer :replace footer.php*/  ?>
