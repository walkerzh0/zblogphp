<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'plugin/search_config.php'; // searchplus
RegisterPlugin("simples","ActivePlugin_simples");
function ActivePlugin_simples(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','simples_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_Search_Begin','simples_SearchMain');
	Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response','simples_Category_Edit_Response');
	Add_Filter_Plugin('Filter_Plugin_Tag_Edit_Response','simples_Tag_Edit_Response');
	Add_Filter_Plugin('Filter_Plugin_Edit_Response5','simples_Edit_Response5');
}
function simples_AddMenu(&$m){
global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/simples/main.php?act=explain","","topmenu_simples"));
}

function simples_SubMenu($id){
	$arySubMenu = array(
		0 => array('基本设置', 'config', 'left', false),
		1 => array('主题说明', 'explain', 'left', false),
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}
function simples_tags_set(&$template){
	global $zbp;
	$template->SetTags('simples_tx',$zbp->Config('simples')->tx);
	$template->SetTags('simples_banner',$zbp->Config('simples')->banner);
	$template->SetTags('simples_explain1',$zbp->Config('simples')->explain1);
	$template->SetTags('simples_explain2',$zbp->Config('simples')->explain2);
	$template->SetTags('simples_thumbnail',$zbp->Config('simples')->thumbnail);
	$template->SetTags('simples_tag_num',$zbp->Config('simples')->tag_num);
	$template->SetTags('simples_qq',$zbp->Config('simples')->qq);
	$template->SetTags('simples_cntact_us',$zbp->Config('simples')->cntact_us);
	$template->SetTags('simples_keywords',$zbp->Config('simples')->keywords);
    $template->SetTags('simples_description',$zbp->Config('simples')->description);
	$template->SetTags('simples_share_switch',$zbp->Config('simples')->share_switch);
	$template->SetTags('simples_share',$zbp->Config('simples')->share);
	$template->SetTags('simples_seo',$zbp->Config('simples')->seo);
	$template->SetTags('simples_post_category',$zbp->Config('simples')->post_category);
	$template->SetTags('simples_page_subname',$zbp->Config('simples')->page_subname);
}
function InstallPlugin_simples(){
	global $zbp;
	if(!$zbp->Config('simples')->HasKey('Version')){
		$zbp->Config('simples')->Version = '1.0';
		$zbp->Config('simples')->tx= '{#ZC_BLOG_HOST#}zb_users/theme/simples/style/images/kide.jpg';
		$zbp->Config('simples')->banner= '{#ZC_BLOG_HOST#}zb_users/theme/simples/style/images/banner.jpg';
		$zbp->Config('simples')->thumbnail= '{#ZC_BLOG_HOST#}zb_users/theme/simples/style/images/no_img.jpg';
		$zbp->Config('simples')->explain1 = '小锋博客';
		$zbp->Config('simples')->explain2 = '将心比心，以心换心';
		$zbp->Config('simples')->tag_num= '10';
		$zbp->Config('simples')->qq= '10086';
		$zbp->Config('simples')->cntact_us= '<li><a href="tencent://message/?uin=10086&amp;Site={#ZC_BLOG_HOST#}&amp;Meu=yes"><i class="fa fa-qq"></i>10086</a></li><li><a href="http://weibo.com/"><i class="fa fa-weibo"></i>新浪微博</a></li><li><a href="//shang.qq.com/wpa/qunwpa?idkey=c4f323b334079e066d24b38fb45ee700cbc71f647f140003323df2309ab7e83f" title="QQ交流群"><i class="fa fa-users"></i>10086</a></li>';
		$zbp->Config('simples')->keywords = '请填写您的网站关键词，可用英文逗号（,）分开。';
		$zbp->Config('simples')->description = '请填写您的网站描述。';
		$zbp->Config('simples')->share_switch = 'b';
		$zbp->Config('simples')->share = '填写您的分享代码。';
		$zbp->Config('simples')->seo = 'a';
		$zbp->Config('simples')->post_category = 'a';
		$zbp->Config('simples')->page_subname = 'a';
		$zbp->SaveConfig('simples');
	}
	if(!$zbp->Config('simples')->HasKey('Version_1')){
		$zbp->Config('simples')->Version_1 = '2.0';
		$zbp->Config('simples')->cntact_us= '<li><a href="tencent://message/?uin=10086&amp;Site={#ZC_BLOG_HOST#}&amp;Meu=yes"><i class="fa fa-qq"></i>10086</a></li><li><a href="http://weibo.com/"><i class="fa fa-weibo"></i>新浪微博</a></li><li><a href="//shang.qq.com/wpa/qunwpa?idkey=c4f323b334079e066d24b38fb45ee700cbc71f647f140003323df2309ab7e83f" title="QQ交流群"><i class="fa fa-users"></i>10086</a></li>';
		$zbp->SaveConfig('simples');
	}
}
function simples_Edit_Response5(){
    global $zbp,$article;
	if ($zbp->Config('simples')->seo=="a"){
		echo '<div><label for="meta_gjc"><span style="font-weight: bold;">关键词:</span></label><br></label><input style="width:99%;" type="text" name="meta_gjc" value="'.htmlspecialchars($article->Metas->gjc).'"/></div>';
		echo '<div><label for="meta_ms"><span style="font-weight: bold;">描述:</span></label><br><input style="width:99%;" type="text" name="meta_ms" value="'.htmlspecialchars($article->Metas->ms).'"/></div>';
		echo '<div><label for="meta_fjbt"><span style="font-weight: bold;">附加标题（留空即为不显示）:</span></label><br><input style="width:99%;" type="text" name="meta_fjbt" value="'.htmlspecialchars($article->Metas->fjbt).'"/></div>';
	}
}
function simples_Tag_Edit_Response(){
    global $zbp,$tag;
	if ($zbp->Config('simples')->seo=="a"){
		echo '<div><label for="meta_gjc"><span style="font-weight: bold;">关键词:</span></label><br></label><input style="width:293px;" type="text" name="meta_gjc" value="'.htmlspecialchars($tag->Metas->gjc).'"/></div>';
		echo '<div><label for="meta_ms"><span style="font-weight: bold;">描述:</span></label><br><input style="width:293px;" type="text" name="meta_ms" value="'.htmlspecialchars($tag->Metas->ms).'"/></div>';
		echo '<div><label for="meta_fjbt"><span style="font-weight: bold;">附加标题（留空即为不显示）:</span></label><br><input style="width:293px;" type="text" name="meta_fjbt" value="'.htmlspecialchars($tag->Metas->fjbt).'"/></div>';
	}
}
function simples_Category_Edit_Response(){
    global $zbp,$cate;
	if ($zbp->Config('simples')->seo=="a"){
		echo '<div><label for="meta_gjc"><span style="font-weight: bold;">关键词:</span></label><br></label><input style="width:293px;" type="text" name="meta_gjc" value="'.htmlspecialchars($cate->Metas->gjc).'"/></div>';
		echo '<div><label for="meta_ms"><span style="font-weight: bold;">描述:</span></label><br><input style="width:293px;" type="text" name="meta_ms" value="'.htmlspecialchars($cate->Metas->ms).'"/></div>';
		echo '<div><label for="meta_fjbt"><span style="font-weight: bold;">附加标题（留空即为不显示）:</span></label><br><input style="width:293px;" type="text" name="meta_fjbt" value="'.htmlspecialchars($cate->Metas->fjbt).'"/></div>';
	}
}
//卸载主题
function UninstallPlugin_simples(){
	global $zbp;
	//$zbp->DelConfig('simples');
	//$zbp->SetHint('good','模块清除成功'); 
}
?>