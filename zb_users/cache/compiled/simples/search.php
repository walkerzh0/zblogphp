
<?php  include $this->GetTemplate('header');  ?>
<div class="articleList container">
	<div class="row">
		<div class="col-md-12">
			<?php  foreach ( $articles as $article) { ?>
				<?php  include $this->GetTemplate('post-multi');  ?>
			<?php }   ?>
		</div>
	</div>
</div>
<div class="container pageNav">
	<div class="row">	
		<div class="col-md-12">
			<nav>
				<ul class="pagination">
					<?php  include $this->GetTemplate('pagebar');  ?>
				</ul>
			</nav>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>
