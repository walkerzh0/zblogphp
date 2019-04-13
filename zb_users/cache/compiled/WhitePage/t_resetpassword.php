<?php  /* Template Name: 重置密码*/  ?>
<?php  include $this->GetTemplate('t_header');  ?>


重置密码
<?php if ($article->username && $article->hash) { ?>
<input type="hidden" value="<?php  echo $article->username;  ?>" id="edtUserName" name="username">
<input type="hidden" value="<?php  echo $article->hash;  ?>" id="edtHash" name="hash"/>
用户名<input type="text" id="edtname" placeholder="<?php  echo $article->username;  ?>" disabled>
设置新密码<input type="password" id="edtpassword" name="password" placeholder="设置新密码">
重复新密码<input type="password" id="edtrepassword" name="repassword" placeholder="确认新密码">
<input type="text" id="edtverifycode" name="verifycode" placeholder="验证码"><?php  echo $article->verifycode;  ?>
<button type="button" onclick="return Resetpassword();">提交</button>
*重置后，请妥善保管好您的新密码
<?php }else{  ?>
    验证信息已经过期，请重新发送验证邮件，并点击邮件充值密码链接
<?php } ?>

<?php  include $this->GetTemplate('t_footer');  ?>
