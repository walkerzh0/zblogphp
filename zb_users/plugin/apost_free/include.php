<?php
#注册插件
RegisterPlugin("apost_free","ActivePlugin_apost_free");
function ActivePlugin_apost_free() {
	Add_Filter_Plugin('Filter_Plugin_Index_Begin','apost_free_box');
}
function apost_free_box() {
	global $zbp;
    if(isset($_GET['apost_free'])){
        $zbp->header .='<style>.apost_free-box{padding:2em;} .apost_free-box *{line-height:100%;margin:0;padding:0;} div.apost_free-box p,div.apost_free-tips p{text-indent:0} .apost_free-box .title{display:inline-block;margin:9px 0 5px} .apost_free-box input{width:60%;height:32px;vertical-align:middle;border:1px #aaa solid;padding:0 10px;box-shadow:inset 2px 2px 3px #eee;} .apost_free-box input.z_vcode{width:80px;height:28px;} .apost_free-box .post-btn{margin-top:15px;padding:8px 30px;font-size:14px;font-weight:bold;cursor:pointer;} .apost_free-box .ccode{display:inline;max-width:90px;margin-left:1px;} .apost_free-tips{line-height:1.8;}</style><script src="'.$zbp->host.'zb_users/plugin/apost_free/js/check.js" type="text/javascript"></script>' . "\r\n";
		$article = new Post;
		$article->Title=$zbp->Config('apost_free')->title;
		$article->IsLock=true;
		$article->Type=ZC_POST_TYPE_PAGE;
	    $article->verifycode ='<img id="reg_verfiycode" class="ccode" title="点击刷新" style="border:none;vertical-align:middle;width:'.$zbp->option['ZC_VERIFYCODE_WIDTH']. 'px;height:' . $zbp->option['ZC_VERIFYCODE_HEIGHT'] . 'px;cursor:pointer;" src="' .$zbp->validcodeurl . '?id=apost_free" alt="" title="" onclick="javascript:this.src=\'' . $zbp->validcodeurl . '?id=apost_free&amp;tm=\'+Math.random();"/>';
	    $article->UEditor ='<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script><script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script><textarea name="Content" id="editor_Content" datatype="*"></textarea><script type="text/javascript">var editor = new baidu.editor.ui.Editor({toolbars:[["FullScreen", "Source", "|", "Undo", "Redo", "|", "Bold", "Italic", "Underline", "StrikeThrough", "Superscript", "Subscript", "RemoveFormat", "FormatMatch", "|", "PastePlain", "|", "ForeColor", "BackColor", "InsertOrderedList", "InsertUnorderedList", "|", "CustomStyle", "Paragraph", "RowSpacing", "LineHeight", "FontFamily", "FontSize", "|", "DirectionalityLtr", "DirectionalityRtl", "|", "Anchor", "SearchReplace","|", "Preview","JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyJustify", "|","Indent", "Link", "Unlink", "|", "ImageNone", "ImageLeft", "ImageRight", "ImageCenter", "|", "InsertImage", "Emotion", "InsertVideo", "Map", "GMap", "InsertFrame", "HighlightCode", "|", "Horizontal", "Date", "Time", "Spechars", "|", "InsertTable", "DeleteTable", "InsertParagraphBeforeTable", "InsertRow", "DeleteRow", "InsertCol", "DeleteCol", "MergeCells", "MergeRight", "MergeDown", "SplittoCells", "SplittoRows", "SplittoCols", "|", "SelectAll", "ClearDoc", "CheckImage", "Help"]],initialFrameHeight: 350,});editor.render("editor_Content");editor.sync("Content"); </script>';
	    $article->Content .='<input id="edtID" name="ID" type="hidden" value="0" />';
	    $article->Content .='<input id="edtType" name="Type" type="hidden" value="0" />';    
	    $article->Content .='<input type="hidden" name="token" id="token" value="'.$zbp->GetToken().'" />';
	    $article->Content .='<div class="apost_free-box"><p><span class="title">标题：</span><br><input id="edtTitle" class="z_title" size="40" name="Title" type="text" maxlength="90"></p>';
	    $article->Content .='<p><span class="title">正文：</span><br>'.$article->UEditor;
	    $article->Content .='<p><span class="title">验证码：</span><br><input required="required" name="verifycode" class="z_vcode" size="40" type="text">'.$article->verifycode.'</p>';
	    $article->Content .='<p><button onclick="return checkPost();" class="post-btn">确定提交</button></p></div>';
	    $article->Content .='<div class="apost_free-tips">'.$zbp->Config('apost_free')->tips.'</div>';
		$mt=microtime();
		$s=	'';
		$article->Content .=$s;	
	    if($zbp->template->hasTemplate('apost_free')){
	        $article->Template = 'apost_free';
		}
		$zbp->template->SetTags('title',$article->Title);
		$zbp->template->SetTags('article',$article);
		$zbp->template->SetTags('type','page');
		$zbp->template->SetTemplate($article->Template);
		$zbp->template->SetTags('page',1);
		$zbp->template->SetTags('pagebar',null);
		$zbp->template->SetTags('comments',array());
		$zbp->template->Display();
		die();
	}
}
function InstallPlugin_apost_free() {
    global $zbp;
    //配置初始化
    if (!$zbp->Config('apost_free')->HasKey('tips')) {
    	$zbp->Config('apost_free')->tips = '标题和正文为必填项，发布内容是否原创或有出处请在正文末注明；<br>投稿行为本身将视为授权本站全权处置投稿内容，投稿内容权责归投稿者所有；';
    	$zbp->Config('apost_free')->title = '游客发布';
        $zbp->SaveConfig('apost_free');
    }
}
function UninstallPlugin_apost_free() {
	global $zbp;
	//$zbp->DelConfig('apost_free');
}