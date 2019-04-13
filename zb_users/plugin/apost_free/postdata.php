<?php
require '../../../zb_system/function/c_system_base.php';
$zbp->Load();
Add_Filter_Plugin('Filter_Plugin_Zbp_ShowError','RespondError',PLUGIN_EXITSIGNAL_RETURN);
if (!$zbp->CheckPlugin('apost_free')) {$zbp->ShowError(48);die();}
if(!$zbp->ValidToken(GetVars('token','POST'))){$zbp->ShowError(5,__FILE__,__LINE__);die();}
if(empty($_POST['Title'])){
    $zbp->ShowError('标题不能为空！');die();
}
if(empty($_POST['Content'])){
    $zbp->ShowError('正文不能为空！');die();
}
if(!$zbp->CheckValidCode(GetVars('verifycode','POST'),'apost_free')){
    $zbp->ShowError('验证码错误，请重新输入');die();
}
if($zbp->user->Level > 6){
    $zbp->ShowError('您无权发布内容！');die();
}
    $a = new Post();
    $a->CateID = 0;
    $a->AuthorID = $zbp->user->ID;
    $a->Tag = '';
    $a->Status = 2;
    $a->Type = ZC_POST_TYPE_ARTICLE;
    $a->Alias = '';
    $a->IsTop = false;
    $a->IsLock = false;
    $a->Title = $_POST['Title'];
    $a->Content = $_POST['Content'];
    $a->IP = GetGuestIP();
    $a->PostTime = time();
    $a->CommNums = 0;
    $a->ViewNums = 0;
    $a->Template = '';
    $a->Save();
    echo '恭喜，提交成功！';die();
?>