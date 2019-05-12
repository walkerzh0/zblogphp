
<?php  include $this->GetTemplate('header');  ?>

	<div class="IndexMiddle">
	
		<div class="article_list">
		
			<div class="ad_top">
				<a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo $zbp->Config('simples')->thumbnail;  ?>" alt="<?php  echo $article->Title;  ?>" class="wp-post-image" width="830px" height="280px"  /></a>
			</div>
			
			<!--文章列表-->
			<?php  foreach ( $articles as $article) { ?>
				<?php if ($article->IsTop) { ?>
					<?php  include $this->GetTemplate('post-istop');  ?>
				<?php }else{  ?>
					<?php  include $this->GetTemplate('post-multi');  ?>
				<?php } ?>
			<?php }   ?>

			<!--分页条-->
			<div class="pagebar">
				<?php  include $this->GetTemplate('pagebar');  ?>
			</div>

		</div>

		<?php  include $this->GetTemplate('itwlk_sidebar');  ?>
	
	</div>
	





<?php  include $this->GetTemplate('footer');  ?>