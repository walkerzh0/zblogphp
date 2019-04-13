<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('simples')) {$zbp->ShowError(48);die();}
$blogtitle='主题配置';

$act = "";
if ($_GET['act']){
$act = $_GET['act'] == "" ? 'config' : $_GET['act'];
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

if(isset($_POST['keywords'])){
	$zbp->Config('simples')->tx= $_POST['tx'];
	$zbp->Config('simples')->banner= $_POST['banner'];
	$zbp->Config('simples')->explain1= $_POST['explain1'];
	$zbp->Config('simples')->explain2= $_POST['explain2'];
	$zbp->Config('simples')->thumbnail= $_POST['thumbnail'];
	$zbp->Config('simples')->tag_num= $_POST['tag_num'];
	$zbp->Config('simples')->qq= $_POST['qq'];
	$zbp->Config('simples')->cntact_us= $_POST['cntact_us'];
	$zbp->Config('simples')->keywords = $_POST['keywords'];
	$zbp->Config('simples')->description = $_POST['description'];
	$zbp->Config('simples')->share_switch = $_POST['share_switch'];
	$zbp->Config('simples')->share = $_POST['share'];
	$zbp->Config('simples')->seo = $_POST['seo'];
	$zbp->Config('simples')->post_category = $_POST['post_category'];
	$zbp->Config('simples')->page_subname = $_POST['page_subname'];
	$zbp->SaveConfig('simples');
	$zbp->ShowHint('good');
}

if ($zbp->CheckPlugin('UEditor')) { 
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
}

?>
<script>
	function upwindow(){
		var container = document.createElement('script');
		$(container).attr('type','text/plain').attr('id','img_editor');
		$("body").append(container);
		_editor = UE.getEditor('img_editor');
		_editor.ready(function () {
			_editor.hide();
			$(".uploadimg strong").click(function(){        
				object = $(this).parent().find('.uplod_img');
				_editor.getDialog("insertimage").open();
				_editor.addListener('beforeInsertImage', function (t, arg) {
					object.attr("value", arg[0].src);
				});
			});
		});
	}
	upwindow();
</script>
<style>
	#img_editor {display:none}
	.uploadimg strong{color: #ffffff;font-size: 1.1em;height: 29px;padding: 2px 18px 3px 18px;margin: 0 0.5em;background: #3a6ea5;border: 1px solid #3399cc;cursor: pointer;}
</style>
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
		<div class="SubMenu">
	<?php simples_SubMenu($act);?>
     <a href="https://www.songhaifeng.com/zblogphp-free-theme/102.html" target="_blank"><span>技术支持</span></a>
    </div>
		<div id="divMain2">
		<?php if ($act == 'config') { ?>
			<form id="form1" name="form1" method="post">
					<table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
						<tr>
							<th width="15%"><p align="center">配置名称</p></th>
							<th width="50%"><p align="center">配置内容</p></th>
							<th width="5%"><p align="center">其它配置</p></th>
							<th width="25%"><p align="center">配置说明</p></th>
						</tr>
						<tr>
							<td><label for="tx"><p align="center">头像</p></label></td>
							<td class="uploadimg"><p align="left"><input name="tx" type="text" id="tx" style="width:84%;" class="uplod_img" value="<?php echo $zbp->Config('simples')->tx;?>" /><strong class="button">浏览文件</strong></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于网页顶部（300*300，理论长宽相等的都可以。）</p></td>
						</tr>
						<tr>
							<td><label for="banner"><p align="center">Banner</p></label></td>
							<td class="uploadimg"><p align="left"><input name="banner" type="text" id="banner" style="width:84%;" class="uplod_img" value="<?php echo $zbp->Config('simples')->banner;?>" /><strong class="button">浏览文件</strong></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于网页顶部（1920*420）</p></td>
						</tr>
						<tr>
							<td><label for="thumbnail"><p align="center">缩略图</p></label></td>
							<td class="uploadimg"><p align="left"><input name="thumbnail" type="text" id="thumbnail" style="width:84%;" class="uplod_img" value="<?php echo $zbp->Config('simples')->thumbnail;?>" /><strong class="button">浏览文件</strong></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">文章内没有图片时候在列表显示（300*150，等比例加大也可以）</p></td>
						</tr>
						<tr>
							<td><label for="explain1"><p align="center">站长说明（1）</p></label></td>
							<td><p align="left"><input name="explain1" type="text" id="explain1" style="width:98%;" value="<?php echo $zbp->Config('simples')->explain1;?>" /></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于网页顶部</p></td>
						</tr>
						<tr>
							<td><label for="explain2"><p align="center">站长说明（2）</p></label></td>
							<td><p align="left"><input name="explain2" type="text" id="explain2" style="width:98%;" value="<?php echo $zbp->Config('simples')->explain2;?>" /></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于网页顶部</p></td>
						</tr>
						<tr>
							<td><label for="tag_num"><p align="center">标签数量</p></label></td>
							<td><p align="left"><input name="tag_num" type="text" id="tag_num" style="width:98%;" value="<?php echo $zbp->Config('simples')->tag_num;?>" /></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">填写需要显示的标签数量，位于整站底部。</p></td>
						</tr>
						<tr>
							<td><label for="qq"><p align="center">QQ</p></label></td>
							<td><p align="left"><input name="qq" type="text" id="qq" style="width:98%;" value="<?php echo $zbp->Config('simples')->qq;?>" /></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于整站底部，留空则不显示。</p></td>
						</tr>
						<tr>
							<td><label for="cntact_us"><p align="center">联系我们</p></label></td>
							<td><p align="left"><textarea name="cntact_us" type="text" id="cntact_us" style="width:98%;height:66px;"><?php echo $zbp->Config('simples')->cntact_us;?></textarea></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">位于整站底部。</p></td>
						</tr>
						<tr>
							<td><label for="keywords"><p align="center">网站关键词</p></label></td>
							<td><p align="left"><input name="keywords" type="text" id="keywords" style="width:98%;" value="<?php echo $zbp->Config('simples')->keywords;?>" /></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">网站首页关键词</p></td>
						</tr>
						<tr>
							<td><label for="description"><p align="center">网站描述</p></label></td>
							<td><p align="left"><textarea name="description" type="text" id="description" style="width:98%;height:66px;"><?php echo $zbp->Config('simples')->description;?></textarea></p></td>
							<td><p align="left"></p></td>
							<td><p align="left">网站首页描述</p></td>
						</tr>
						<tr>
							<td><label for="share"><p align="center">分享代码</p></label></td>
							<td><p align="left"><textarea name="share" type="text" id="share" style="width:98%;height:66px;"><?php echo $zbp->Config('simples')->share;?></textarea></p></td>
							<td>
								<p align="center">
									<select name="share_switch" id="share_switch">
										<option value="a" <?php if($zbp->Config('simples')->share_switch == 'a') echo 'selected'?>>打开</option>
										<option value="b" <?php if($zbp->Config('simples')->share_switch == 'b') echo 'selected'?>>关闭</option>
									</select>
								</p>
							</td>
							<td><p align="left">位于文章页内容底部；留空则使用百度分享，或填写其他分享代码也可。</p></td>
						</tr>
						<tr>
							<td><label for="seo"><p align="center">SEO</p></label></td>
							<td>
								<p align="center">
									<select name="seo" id="seo">
										<option value="a" <?php if($zbp->Config('simples')->seo == 'a') echo 'selected'?>>打开</option>
										<option value="b" <?php if($zbp->Config('simples')->seo == 'b') echo 'selected'?>>关闭</option>
									</select>
								</p>
							</td>
							<td>
								
							</td>
							<td><p align="left">如果使用【SEO工具大全】这个插件，这里请关闭。</p></td>
						</tr>
						<tr>
							<td><label for="post_category"><p align="center">文章是否显示分类名</p></label></td>
							<td>
								<p align="center">
									<select name="post_category" id="post_category">
										<option value="a" <?php if($zbp->Config('simples')->post_category == 'a') echo 'selected'?>>打开</option>
										<option value="b" <?php if($zbp->Config('simples')->post_category == 'b') echo 'selected'?>>关闭</option>
									</select>
								</p>
							</td>
							<td>
								
							</td>
							<td><p align="left">只显示当前分类，不显示父分类。<br/>SEO选项打开时此项设置无效。</p></td>
						</tr>
						<tr>
							<td><label for="page_subname"><p align="center">单页是否显示网站副标题</p></label></td>
							<td>
								<p align="center">
									<select name="page_subname" id="page_subname">
										<option value="a" <?php if($zbp->Config('simples')->page_subname == 'a') echo 'selected'?>>打开</option>
										<option value="b" <?php if($zbp->Config('simples')->page_subname == 'b') echo 'selected'?>>关闭</option>
									</select>
								</p>
							</td>
							<td>
								
							</td>
							<td><p align="left">单页面是否显示网站副标题。<br/>SEO选项打开时此项设置无效。</p></td>
						</tr>
					</table>
					<br/>
					<input name="" type="Submit" class="button" value="保存"/>
			</form>
    <?php } if ($act == 'explain') { ?>
			<form id="form3" name="form3" method="post">
				<table width="100%" style="padding:0;margin-top:5px;" cellspacing="0" cellpadding="0" class="tableBorder">
					<tbody>
						<tr class="color1">
							<th width="100%"><p>【使用说明】</p></th>
						</tr>
						<tr class="color3">
							<td>
								<p>1、如果没有启用【SEO工具大全】这个插件，SEO设置建议选择关闭（即使用主题自带SEO）。</p>
								<p>2、尊重作者，请留下版权。同时希望那些删版权还找我咨询问题的，不回你是有原因的，自己想想为什么。</p>
							</td>
						</tr>
					</tbody>
				</table>
				<table width="100%" style="padding:0;margin-top:5px;" cellspacing="0" cellpadding="0" class="tableBorder">
					<tbody>
						<tr class="color1">
							<th width="100%"><p>【安装须知】</p></th>
						</tr>
						<tr class="color3">
							<td>
								<p>感谢喜欢，感谢使用！</p>
								<p>免费主题是没有技术支持的，所以请不要随意添加我的QQ，有问题可以在我博客或者应用中心主题页反馈，我会找时间修复的。谢谢。</p>
								<p>如果您觉得主题哪方面不合您的心意，可自由修改。但还是那句话，不要添加我的QQ询问这类问题，有什么问题去反馈，我会回答的。</p>
								<p>或者说主题需要二次修改，可以找我付费解决。QQ：284204003</p>
								<p>Zblog技术交流群：4243058</p>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
    <?php } ?>
		</div>
</div>
<script type="text/javascript">
ActiveTopMenu("topmenu_Lipop");
</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
