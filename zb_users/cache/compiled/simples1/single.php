<?php  /* Template Name:文章页单页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
	<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
	<?php  include $this->GetTemplate('post-single');  ?>
	<?php }else{  ?>
	<?php  include $this->GetTemplate('post-page');  ?>
	<?php } ?>
<?php  include $this->GetTemplate('footer');  ?>

