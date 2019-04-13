
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php if ($zbp->Config('simples')->seo=="a") { ?>
		<title><?php  echo $name;  ?>-<?php  echo $subname;  ?></title>
	<?php }else{  ?>
		<title><?php if ($type=="index") { ?><?php  echo $name;  ?>-<?php  echo $subname;  ?><?php }elseif($type=="category"&&$page=="1") {  ?><?php  echo $category->Name;  ?><?php if ($category->Metas->fjbt) { ?>-<?php  echo $category->Metas->fjbt;  ?><?php } ?>-<?php  echo $name;  ?><?php }elseif($type=="category"&&$page>"1") {  ?><?php  echo $category->Name;  ?><?php if ($category->Metas->fjbt) { ?>-<?php  echo $category->Metas->fjbt;  ?><?php } ?>-<?php  echo $name;  ?>-第<?php  echo $page;  ?>页<?php }elseif($type=="tag"&&$page=="1") {  ?><?php  echo $tag->Name;  ?><?php if ($tag->Metas->fjbt) { ?>-<?php  echo $tag->Metas->fjbt;  ?><?php } ?>-<?php  echo $name;  ?><?php }elseif($type=="tag"&&$page>"1") {  ?><?php  echo $tag->Name;  ?><?php if ($tag->Metas->fjbt) { ?>-<?php  echo $tag->Metas->fjbt;  ?><?php } ?>-<?php  echo $name;  ?>-第<?php  echo $page;  ?>页<?php }elseif($type=="date"&&$page=="1") {  ?><?php  echo $title;  ?> <?php  echo $name;  ?><?php }elseif($type=="date"&&$page>"1") {  ?><?php  echo $title;  ?> <?php  echo $name;  ?><?php }elseif($type=="article") {  ?><?php  echo $title;  ?><?php if ($article->Metas->fjbt) { ?>-<?php  echo $article->Metas->fjbt;  ?><?php } ?><?php if ($zbp->Config('simples')->post_category=="a") { ?>-<?php  echo $article->Category->Name;  ?><?php } ?>-<?php  echo $name;  ?><?php }elseif($type=="page") {  ?><?php  echo $title;  ?><?php if ($article->Metas->fjbt) { ?>-<?php  echo $article->Metas->fjbt;  ?><?php } ?>-<?php  echo $name;  ?><?php if ($zbp->Config('simples')->page_subname=="a") { ?>-<?php  echo $subname;  ?><?php } ?><?php }else{  ?><?php  echo $title;  ?>-<?php  echo $name;  ?><?php } ?></title>
	<?php } ?>
	<?php if ($zbp->Config('simples')->seo=="a") { ?>
		<?php if ($type=='index') { ?>
			<meta name="keywords" content="<?php  echo $zbp->Config('simples')->keywords;  ?>" />
			<meta name="description" content="<?php  echo $zbp->Config('simples')->description;  ?>" />
		<?php }elseif($type=='page') {  ?>
			<?php if ($article->Metas->gjc) { ?>
				<meta name="keywords" content="<?php  echo $article->Metas->gjc;  ?>"/>
			<?php }else{  ?>
				<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
			<?php } ?>
			<?php if ($article->Metas->ms) { ?>
				<meta name="description" content="<?php  echo $article->Metas->ms;  ?>" />
			<?php }else{  ?>
				<?php $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...'); ?>
				<meta name="description" content="<?php  echo $description;  ?>"/>
			<?php } ?>
			<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>" />
		<?php }elseif($type=='article') {  ?>
			<?php if ($article->Metas->gjc) { ?>
				<meta name="keywords" content="<?php  echo $article->Metas->gjc;  ?>" />
			<?php }else{  ?>
				<meta name="keywords" content="<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?>,<?php }   ?>" />
			<?php } ?>
			<?php if ($article->Metas->ms) { ?>
				<meta name="description" content="<?php  echo $article->Metas->ms;  ?>" />
			<?php }else{  ?>
				<meta name="description" content="<?php  echo $article->Title;  ?>是<?php  echo $name;  ?>中一篇关于<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?><?php }   ?>的文章，欢迎您阅读和评论,<?php  echo $name;  ?>" />
			<?php } ?>
		<?php }elseif($type=='category') {  ?>
			<?php if ($category->Metas->gjc) { ?>
				<meta name="keywords" content="<?php  echo $category->Metas->gjc;  ?>" />
			<?php }else{  ?>
				<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
			<?php } ?>
			<?php if ($category->Metas->ms) { ?>
				<meta name="description" content="<?php  echo $category->Metas->ms;  ?>" />
			<?php }else{  ?>
				<meta name="description" content="<?php  echo $category->Intro;  ?>">
			<?php } ?>
		<?php }elseif($type=='tag') {  ?>
			<?php if ($tag->Metas->gjc) { ?>
				<meta name="keywords" content="<?php  echo $tag->Metas->gjc;  ?>" />
			<?php }else{  ?>
				<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
			<?php } ?>
			<?php if ($tag->Metas->ms) { ?>
				<meta name="description" content="<?php  echo $tag->Metas->ms;  ?>" />
			<?php }else{  ?>
				<meta name="description" content="<?php  echo $tag->Intro;  ?>">
			<?php } ?>
		<?php }else{  ?>
			<meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>" />
			<meta name="description" content="<?php  echo $title;  ?>-<?php  echo $name;  ?>" />
		<?php } ?>
	<?php } ?>
    <meta name="HandheldFriendly" content="True" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php  echo $zbp->Config('simples')->tx;  ?>">
	<script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/simples/style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/simples/style/css/font-awesome.min.css">  
    <link rel="stylesheet" type="text/css" media="all" href="<?php  echo $host;  ?>zb_users/theme/simples/style/style.css"/>
	<!--[if lt IE 9]>
	  <script src="<?php  echo $host;  ?>zb_users/theme/simples/stylejs/html5shiv.min.js"></script>
	  <script src="<?php  echo $host;  ?>zb_users/theme/simples/stylejs/respond.min.js"></script>
	<![endif]-->
	<?php if ($type=='index'&&$page=='1') { ?>
		<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
	<?php } ?>
	<?php  echo $header;  ?>
</head>
<body>
	<form role="search" name="search" method="post" class="search-form" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
		<span class="search-close">&times;</span>
		<label>
			<input type="search" class="search-field" placeholder="请输入关键字搜索" value="" name="q" id="edtSearch" autocomplete="off">
		</label>
		<input type="submit" class="search-submit" value="搜索">
	</form>
	<div class="banner" style="background: url(<?php  echo $zbp->Config('simples')->banner;  ?>);">
		<div class="menu menuicon hidden-xs">
			<i class="fa fa-bars"></i>
		</div>
		<div class="header container">
			<div class="row">
				<div class="col-md-12">
					<div class="personInfo">
						<div class="logo"><a href="<?php  echo $host;  ?>"><img src="<?php  echo $zbp->Config('simples')->tx;  ?>" alt="<?php  echo $name;  ?>"></a></div>
						<div class="logoTheme">
							<h1><?php  echo $zbp->Config('simples')->explain1;  ?></h1>
							<h3><?php  echo $zbp->Config('simples')->explain2;  ?></h3>
						</div>
					</div>				
				</div>
			</div>
		</div> 
	</div>