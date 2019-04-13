<?php  /* Template Name:修改帐户名 */  ?>
<?php  include $this->GetTemplate('t_header');  ?>
修改帐户名

原用户名：<input type="text" id="edtaccount" placeholder="<?php  echo $user->Name;  ?>" disabled>
<input type="hidden" name="token" id="token" value="<?php  echo $zbp->GetToken();  ?>" />
修改账户：<input type="password" id="edtname" name="name" placeholder="修改账户">
确认账户：<input type="password" id="edtrename" name="rename" placeholder="确认账户">
<input type="text" class="form-control user_input" id="edtverifycode" name="verifycode" placeholder="验证码"><?php  echo $article->verifycode;  ?>
<button type="button" class="btn btn-block" onclick="return Nameedit();">提交</button>

<?php  include $this->GetTemplate('t_footer');  ?>