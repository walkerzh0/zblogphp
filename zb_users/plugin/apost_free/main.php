<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('apost_free')) {$zbp->ShowError(48);die();}

$blogtitle='游客发布-投稿';
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
if(isset($_POST['Items'])){
    foreach($_POST['Items'] as $key=>$val){
       $zbp->Config('apost_free')->$key = $val;
    }
    $zbp->SaveConfig('apost_free');
    $zbp->ShowHint('good');
    Redirect('./main.php');
}
?>
<style>
.tb-set td{padding:7px 5px;}
.xti td{color:#3a6ea5;font-weight:bold;text-indent:5px;}
.xtips{color:#999;line-height:1.6;padding-left:12px;}
</style>
<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
  <div class="SubMenu">
 	<a href="main.php" ><span class="m-left m-now">基本设置</span></a>
    <a href="../../plugin/AppCentre/main.php?id=1422" title="是的，更多扩展功能"><span class="m-left" style="color:#F60">有收费版？</span></a>
    <a href="../../plugin/AppCentre/main.php?auth=3ec7ee20-80f2-498a-a5dd-fda19b198194"><span class="m-left">作者作品</span></a>
    <a href="http://www.yiwuku.com/diy-zblog.html" target="_blank"><span class="m-left">定制服务</span></a>
    <a href="http://www.yiwuku.com/" target="_blank"><span class="m-right">作者网站</span></a>
  </div>
  <div id="divMain2">
<form action="main.php" method="post">
    <table class="tb-set" width="100%">
        <tr height="60">
            <td colspan="2">&emsp;投稿入口网址：<a href="<?php echo $zbp->host; ?>?apost_free" target="_blank"><?php echo $zbp->host; ?>?apost_free</a><span class="xtips">（建议放入导航菜单或必要的链接区域）</span></td>
        </tr>
        <tr height="60">
            <td width="150" align="right"><b>投稿页面标题：</b></td>
            <td><input type="text" name="Items[title]" value="<?php echo $zbp->Config('apost_free')->title; ?>" size="48"></td>
        </tr>
        <tr>
            <td width="150" align="right"><b>投稿提示内容：</b></td>
            <td><textarea id="myEditor" name="Items[tips]" cols="68" rows="6" style="width:680px;vertical-align:middle"><?php echo $zbp->Config('apost_free')->tips; ?></textarea></td>
        </tr>
        <tr>
            <td height="80">&nbsp;</td>
            <td valign="top"><input type="submit" name="submit" value="保存设置"></td>
        </tr>
        <tr height="50">
            <td colspan="2"><div class="xtips">所有投递成功稿件自动进入系统“<a href="../../../zb_system/cmd.php?act=ArticleMng">文章管理</a>”，默认为“审核”状态，经管理员设置为“公开”后才能访问；<br>成品应用仅为满足大众化需求，如需个性化修改欢迎<a href="http://wpa.qq.com/msgrd?v=3&uin=77940140&site=qq&menu=yes" target="_blank">联系作者</a>定制；</div></td>
        </tr>
    </table>
</form>
  </div>
</div>
<script type="text/javascript">AddHeaderIcon("<?php echo $bloghost . 'zb_users/plugin/apost_free/logo.png';?>");</script>
<?php
if ($zbp->CheckPlugin('UEditor')) { 
    echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
    echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
}
?>
<script type="text/javascript">
    var editor = new baidu.editor.ui.Editor({ toolbars:[['Paragraph','FontFamily','FontSize','Bold','Italic','ForeColor', "backcolor", "link",'justifyleft','justifycenter','justifyright','source']],initialFrameHeight:150 });
    editor.render("myEditor");
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>