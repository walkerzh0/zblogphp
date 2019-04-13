<?php  /* Template Name:dm_uc 分页*/  ?>
<?php if ($pagebar) { ?>
<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
<?php if ($pagebar->PageNow==$k) { ?>
<span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em><?php  echo $k;  ?></em></span>
<?php }else{  ?>
<a href="<?php  echo $v;  ?>" data-page="<?php  echo $k;  ?>"><?php  echo $k;  ?></a>
<?php } ?>
<?php }   ?>
<span class="layui-laypage-last"><em class="layui-laypage-em"></em><em>总计<?php  echo $pagebar->PageAll;  ?>页</em></span>
<?php } ?>


