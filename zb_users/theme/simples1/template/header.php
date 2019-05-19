<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/simples/style/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/simples1/style/itwlk_style.css">
	
	<script>
		function showsub(i){ 
		 var submenu=document.getElementById("pullMenu"); 
		 submenu.style.display="block"; 
		} 
		function hidesub(i){ 
		 var submenu=document.getElementById("pullMenu");; 
		 submenu.style.display="none"; 
		}
	</script>
	
</head>
<body>
<div class="page_all">


	<div class="top">
		<div class="itwalk_logo">
			<img class="itwalk_logo_img" src="{$host}zb_users/theme/simples1/style/images/kide.jpg" alt="itWalkers" />
		</div>
		
		<div class="navbar">
			<ul id="menu">
				<li><a href="http://localhost/zblogphp/">首页</a></li>
				<li><a href="http://localhost/zblogphp/?id=2">留言本</a></li>
				<li><a href="http://localhost/zblogphp/?apost_free">投稿</a></li>
				<li><a href="http://localhost/zblogphp/?Login">登录</a></li>
				<li><a href="http://localhost/zblogphp/?Register">注册</a></li>
				<li><a href="http://localhost/zblogphp/zb_system/admin/index.php?act=admin">后台</a></li>
			</ul>
			<ul id="menubar">
				<li><i class="fa fa-search"></i></li>
				<li><i class="fa fa-bars" onmouseover="showsub(this)" onmouseout="hidesub(this)"></i></li>
				<!--
				<div id="pullMenu">
					<ul> 
						<li><a href="#">Resource1</a></li> 
						<li><a href="#">Resource2</a></li> 
						<li><a href="#">Resource3</a></li> 
					</ul>					
				<div>
				-->
			</ul>
		</div>	
	</div>
