<?php  /* Template Name:购买状态 */  ?>
<?php  include $this->GetTemplate('t_header');  ?>
购买状态

名称：<input type="text" id="edtinvitecode" placeholder="<?php  echo $article->BuyTitle;  ?>" disabled>
价格：<input type="text" id="edtinvitecode" name="invitecode" placeholder="<?php  echo $article->BuyPrice;  ?>" disabled>
账户余额：<input type="text" id="edtinvitecode" name="invitecode" placeholder="<?php  echo $user->Price;  ?>" disabled>

<?php if ($article->buynum) { ?>
    已购买
<?php }else{  ?>
    <input type="hidden" name="LogID" id="LogID" value="<?php  echo $article->BuyID;  ?>" />
    <input type="hidden" name="LogUrl" id="LogUrl" value="<?php  echo $article->BuyTUrl;  ?>" />
    <?php if ($zbp->Config('YtUser')->payment !== '1') { ?>
        <input type="text" class="form-control user_input" id="edtverifycode" name="verifycode" placeholder="验证码"><?php  echo $article->verifycode;  ?>
    <?php } ?>	
    <?php if (!$zbp->Config('YtUser')->payment) { ?>
        <button type="button" class="btn btn-block" onclick="return Ytbuypay();">提交</button>
    <?php }else{  ?>
        <?php if ($zbp->Config('YtUser')->payment=='2') { ?>
			<button type="button" class="btn btn-block" onclick="return Ytbuypay();">积分支付</button>
        <?php } ?>
        <button type="button" class="btn btn-block" onclick="return VipRegPage();">支付宝</button>
        <script type="text/javascript">function VipRegPage(){document.getElementById("edit").action="<?php  echo $host;  ?>zb_users/plugin/YtUser/cmd.php?act=UploadPst&token=<?php  echo $zbp->GetToken();  ?>";}</script>
		<?php } ?>
      </div>
<?php } ?>

<?php  include $this->GetTemplate('t_footer');  ?>