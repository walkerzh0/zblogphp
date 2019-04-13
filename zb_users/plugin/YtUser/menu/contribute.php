<?php
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';
$zbp->Load();     			  		    	      	
$action='root';       				       					 
    	 	   	        		 	 
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}    					 	      			  	 
if (!$zbp->CheckPlugin('YtUser')) {$zbp->ShowError(48);die();}    								     	    		
if (isset($_GET['act'])){$act = $_GET['act'];}else{$act = 'base';}       		 	        		   
      					     			    	
$blogtitle='用户中心';    	 	 	 		      	 		  
require $blogpath . 'zb_system/admin/admin_header.php';    	  				     			 	   
require $blogpath . 'zb_system/admin/admin_top.php';    	  	 		        	 	  
?>
<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
		<?php echo YtUser_SubMenu('contribute'); ?>
		<a href="http://www.kancloud.cn/showhand/zbloguser" target="_blank"><span class="m-left" style="color:#F00">适配教程</span></a>
		<?php if ($act == 'buy'){?>
		<a href="?act=buy&buystate=nopay"><span class="m-right" style="color:red">未付款</span></a>
		<a href="?act=buy&buystate=paid"><span class="m-right" style="color:green">已付款</span></a>
		<?php }?>
    </div>
  <div id="divMain2">
<form enctype="multipart/form-data" method="post" action="save.php?type=contribute">  
  <input id="reset" name="reset" type="hidden" value="" />
  <table border="1" class="tableFull tableBorder">
  <tr>
	  <th><p align='left'><b>选项</b><br><span class='note'></span></p></th>
	  <th>说明</th>
  </tr>

  <tr>
	  <td><p align='left'><b>是否开启投稿送积分</b></p></td>
	  <td><input type="text" class="checkbox" name="contribute_on" value="<?php echo $zbp->Config('YtUser')->contribute_on;?>" /></td>
  </tr>
  <tr>
	  <td><p align='left'><b>投稿成功奖励积分</b></p></td>
	  <td><input type="text" name="contribute_jf" style="width:150px;" value="<?php echo (int)$zbp->Config('YtUser')->contribute_jf ? $zbp->Config('YtUser')->contribute_jf : "5" ;?>" style="width:89%;" /></td>
  </tr>
  <tr>
	  <td><p align='left'><b>扩展说明：</b></p></td>
	  <td>可通过“分类权限角色分配器”插件来设置相关用户组仅能在哪个分类投稿</td>
	</tr>
  </table>
		<hr/>
		<p>
		  <input type="submit" class="button" value="<?php echo $lang['msg']['submit']?>" />
		</p>
  </form>

	<script type="text/javascript">ActiveLeftMenu("aPluginMng");</script>

	<script type="text/javascript">AddHeaderIcon("<?php echo $bloghost . 'zb_users/plugin/YtUser/logo.png';?>");</script>	

  </div>

</div>



<?php
    			   	     	 	  	 	
require $blogpath . 'zb_system/admin/admin_footer.php';    	     	      				   
    	 		   	       		 	 
RunTime();     	 			            		
    	   			     			  		 
?>