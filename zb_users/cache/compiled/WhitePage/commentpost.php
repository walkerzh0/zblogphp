<div class="post" id="divCommentPost">
	<p><a name="comment"><?php if ($user->ID>0) { ?><?php  echo $user->Name#;  ?><?php } ?>发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></p>
	<form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>" >
	<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
<?php if ($user->ID>0) { ?>
	<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->StaticName;  ?>" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />	
<?php }else{  ?>
	<p><input type="text" name="inpName" id="inpName" class="text" value="<?php  echo $user->StaticName;  ?>" size="28" tabindex="1" /> <label for="name">名称(*)</label></p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" value="<?php  echo $user->Email;  ?>" size="28" tabindex="2" /> <label for="email">邮箱</label></p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="<?php  echo $user->HomePage;  ?>" size="28" tabindex="3" /> <label for="homepage">网址</label></p>

<?php } ?>
	<?php  include $this->GetTemplate('commentpost-verify');  ?>
	<p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return VerifyMessage()" class="button" /></p>
	</form>
</div>