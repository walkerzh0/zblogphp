
<?php if ($pagebar) { ?>
	<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
		<?php if ($pagebar->PageNow==$k) { ?>
			<span class='page-numbers current'><?php  echo $k;  ?></span>
		<?php }elseif($k=='‹‹' and $pagebar->PageNow!=$pagebar->PageFirst) {  ?>
		<?php }elseif($k=='‹‹' and $pagebar->PageNow==$pagebar->PageFirst) {  ?>
		<?php }elseif($k=='››' and $pagebar->PageNow==$pagebar->PageLast) {  ?>
		<?php }elseif($k=='››' and $pagebar->PageNow!=$pagebar->PageLast) {  ?>
		<?php }elseif($k=='‹') {  ?>
			<a href="<?php  echo $v;  ?>" class="prev page-numbers">上一页</a>
		<?php }elseif($k=='›') {  ?>
			<a href="<?php  echo $v;  ?>" class="next page-numbers">下一页</a>
		<?php }else{  ?>
			<a href="<?php  echo $v;  ?>" class='page-numbers'><?php  echo $k;  ?></a>
		<?php } ?>
	<?php }   ?>
<?php } ?>