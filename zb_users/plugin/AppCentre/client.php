<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
require dirname(__FILE__) . '/function.php';
$zbp->Load();

$action = 'root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('AppCentre')) {$zbp->ShowError(48);die();}

if (!$zbp->Config('AppCentre')->token) {
	$blogtitle = '应用中心(客户端)-登录应用商城';
} else {
	$blogtitle = '应用中心(客户端)-我的应用仓库';
}

Add_Filter_Plugin('Filter_Plugin_CSP_Backend', 'AppCentre_UpdateCSP');

if (GetVars('act') == 'login') {
  if (!$zbp->ValidToken(GetVars('token', 'GET'),'AppCentre')) {$zbp->ShowError(5, __FILE__, __LINE__);die();}
  AppCentre_CheckInSecurityMode();
	$s = trim(Server_Open('login'));
	if ($s !== '') {

    $zbp->Config('AppCentre')->token = GetVars("app_token");
    $zbp->Config('AppCentre')->uniq_id = trim($s);
    $zbp->Config('AppCentre')->old_token = 'false';
    unset($zbp->Config('AppCentre')->old_token);

		$zbp->SaveConfig('AppCentre');

		$zbp->SetHint('good', '您已成功登录APP应用中心.');
		Redirect('./main.php');
		die;
	} else {
		$zbp->SetHint('bad', '您输入的令牌不存在或已被绑定，请申请一个新的令牌。');
		Redirect('./client.php');
		die;
	}
}

if (GetVars('act') == 'logout') {
  if (function_exists('CheckHTTPRefererValid')) {
    CheckHTTPRefererValid();
  }
  AppCentre_CheckInSecurityMode();
  $zbp->Config('AppCentre')->token = '';
  $zbp->Config('AppCentre')->uniq_id = '';
	$zbp->SaveConfig('AppCentre');
	$zbp->SetHint('good', '您已退出APP应用中心.');
	Redirect('./client.php');
	die;
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>
<div id="divMain">

  <div class="divHeader"><?php echo $blogtitle;?></div>
<div class="SubMenu"><?php AppCentre_SubMenus(9);?></div>
  <div id="divMain2">
<?php if (!$zbp->Config('AppCentre')->token) {?>
            <div class="divHeader2">应用中心账户登录</div>
            <form action="?act=login&token=<?php echo $zbp->GetToken('AppCentre')?>" method="post">
              <table style="line-height:3em;" width="100%" border="0">
                <tr height="32">
                  <th  align="center">账户登录
                    </td>
                </tr>
                <tr height="32">
                  <td  align="center">令牌:
                    <input type="password" name="app_token" value="" style="width:40%"/></td>
                </tr>
                <tr height="32" align="center">
                  <td align="center"><input type="submit" value="登录" class="button" /></td>
                </tr>
                <tr height="32" align="center">
                  <td align="center"><a href="https://uc.zblogcn.com/user/security/token" target="_blank">点击获取账户登录令牌</a></td>
                </tr>
              </table>
            </form>
<?php } else {

//已登录
	Server_Open('shoplist');

}
?>



	<script type="text/javascript">ActiveLeftMenu("aAppCentre");</script>
	<script type="text/javascript">AddHeaderIcon("<?php echo $bloghost . 'zb_users/plugin/AppCentre/logo.png';?>");</script>
  </div>
</div>

<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>