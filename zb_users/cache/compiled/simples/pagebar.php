
<?php if ($pagebar) { ?>
	<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
		<?php if ($pagebar->PageNow==$k) { ?>
			<li><span class='page-numbers current'><?php  echo $k;  ?></span></li>
		<?php }elseif($k=='‹‹' and $pagebar->PageNow!=$pagebar->PageFirst) {  ?>
		<?php }elseif($k=='‹‹' and $pagebar->PageNow==$pagebar->PageFirst) {  ?>
		<?php }elseif($k=='››' and $pagebar->PageNow==$pagebar->PageLast) {  ?>
		<?php }elseif($k=='››' and $pagebar->PageNow!=$pagebar->PageLast) {  ?>
		<?php }elseif($k=='‹') {  ?>
			<li><a href="<?php  echo $v;  ?>" class="next page-numbers">上一页</a></li>
		<?php }elseif($k=='›') {  ?>
			<li><a href="<?php  echo $v;  ?>" class="next page-numbers">下一页</a></li>
		<?php }else{  ?>
			<li><a href="<?php  echo $v;  ?>" class='page-numbers'><?php  echo $k;  ?></a></li>
		<?php } ?>
	<?php }   ?>
<?php } ?>