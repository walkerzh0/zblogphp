
<?php  include $this->GetTemplate('header');  ?>
<div class="articleList container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
				<?php  include $this->GetTemplate('post-single');  ?>
			<?php }else{  ?>
				<?php  include $this->GetTemplate('post-page');  ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>