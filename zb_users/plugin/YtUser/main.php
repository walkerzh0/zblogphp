<?php /* EL PSY CONGROO */ /* EL PSY CONGROO */ /* EL PSY CONGROO */    		   	 	     				       						 	
require '../../../zb_system/function/c_system_base.php';    	 	    	      		  		     	    	 
require '../../../zb_system/function/c_system_admin.php';    				 			    	  		  	      	 	 	 
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
		<a href="http://www.kancloud.cn/showhand/zbloguser" target="_blank"><span class="m-left" style="color:#F00">适配教程</span></a>
		<?php if ($act == 'buy'){?>
		<a href="?act=buy&buystate=nopay"><span class="m-right" style="color:red">未付款</span></a>
		<a href="?act=buy&buystate=paid"><span class="m-right" style="color:green">已付款</span></a>
		<?php }?>
    </div>
  <div id="divMain2">
	用户中心
	<script type="text/javascript">ActiveLeftMenu("aPluginMng");</script>
	<script type="text/javascript">AddHeaderIcon("<?php echo $bloghost . 'zb_users/plugin/YtUser/logo.png';?>");</script>	
  </div>
</div>

<?php
require $blogpath . 'zb_system/admin/admin_footer.php';     			 		      						     		   	  
RunTime();    		    	       	          		 	   
?>