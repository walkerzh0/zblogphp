<?php /* EL PSY CONGROO */ /* EL PSY CONGROO */ /* EL PSY CONGROO */ /* EL PSY CONGROO */     	  	 	        	 		      		   	 
/**       		  	    	    	 	    				  	 
 * YtVerification类     		 		 	    					 		     	 		 	 
 *    				 		     	  				     	    	  
 * @subpackage ClassLib/YtVerification 类库    			 				     		   		      	 	 		
 */    	            		   		    			    	
class YtVerification extends Base {    	 		   	    					  	     							
    			   	      					         	  		    	 	 	   
    public function __construct() {     	   		      	   	       		 			 
        global $zbp;    		 		 	      	 	  		    			   		
        parent::__construct($GLOBALS['YtVerification_Table'],$GLOBALS['YtVerification_DataInfo'], __CLASS__);     			          		 	 	       		 	 
    }    					 	     	      	    	    			
     					      	 	   	       	 	 		    						 	
    public function Send($s = 'Y-m-d H:i:s') {    	  			 	     	   			    		 		 		
        return date($s, (int) $this->Send);      	 		 	    		 	  		    	  		 		
    }    	      	     		  			    	  	   	
    	 	         				 	 	    		    	 
    public function Expire($s = 'Y-m-d H:i:s') {    	   				    								      	 	 		
        return date($s, (int) $this->Expire);    		 	        	  				     		 	 	 	
    }        	 	       		        	  	  		
    			          		 	  	     			 	 	
    public function __get($name) {     		 			     	   	          	 		 
        global $zbp;    	    	 	    	 	 		 	     							
        switch ($name) {    			   	       			 	      	   	 	
        case 'Author':     	  			     		 		 	     	 		    
            return $zbp->GetMemberByID($this->Uid);     		 				    		 	        						  
            break;    		 		           		       		 	  	
        default:    								    	 		 			     		  		 
            return parent::__get($name);     	  	        		 	         	  	  
            break;    			  		     		    	      		   		
        }     					      		  		        	 	 		
    }     			 			    	  	 		      	  	 		
    		     	      			       	   		  
    public function YtByField($field, $field_value) {      						    	   			     			 	 	 
        global $zbp;    		 			        	    	         			
        $field_table = $GLOBALS['YtVerification_Table'];    	  	  		    		 	  		    	      	
        $field_name = $GLOBALS['YtVerification_DataInfo'][$field][0];      	   		     		 			     	   	 	 
        $sql = $this->db->sql->Select($field_table, array('*'), array(array('=', $field_name, $field_value)), null, null, null);    		   			    			 			      	 		  	
        $array = null;    	    		      				 		       			 	
        $list = array();    				 		     	  		           			 
        $array = $this->db->Query($sql);    	  		       	   	 		     	  		  
        if (!isset($array)) {return array();}     	 	  	     			   		       				 
        foreach ($array as $a) {      	  	       		 		          	 		
            $l = new YtVerification();    				  	     	   	 	     	 				 	
            $l->LoadInfoByAssoc($a);    	  	 	           		      	 	 	  
            $list[] = $l;    					           	 	         		  
        }        		       	  	       	 				 	
        return $list;    			    	      		 	 	    	  			  
    }    	   		 	     			 	       						 
     		 			     	  		  	    		 		 		
    public function YtTypeCount($type) {    	  				      	  	        	  	   
        global $zbp;                		 	  	        	 	 	
        $field_table = $GLOBALS['YtVerification_Table'];     		 		 	      	         	   	 		
        $sql = $this->db->sql->Select($field_table, array('*'), array(array('=', 'vf_type', $type),array('=', 'vf_uid', $zbp->user->ID)), null, null, null);    	 	  		      	 		         		 		 
        $array = $this->db->Query($sql);      	  	       							    		 				 
        if (count($array) > 0) {    					 		           	    				   	
            $this->LoadInfoByAssoc($array[0]);          	     	  			 	    	  	 		 
            return true;      		 	      	 	 		 	     	    		
        } else {         			      			  	    					 		
            return false;    	   	 		     				        	 		 	 
        }      	         					 		    					  	
    }      				 	     	 			 	     		 	 	 
     						     	           	 	 	 		
    public function YtTypeMobile($type,$account) {      		 	 	    		 			      		  		  
        global $zbp;    			           			  	    	 		   	
        $field_table = $GLOBALS['YtVerification_Table'];    		 		 		       				        				 
        $sql = $this->db->sql->Select($field_table, array('*'), array(array('=', 'vf_type', $type),array('=', 'vf_account', $account)), null, null, null);      	  			    	    			         	 	
        $array = $this->db->Query($sql);     	 		       	 	   	     	 		  		
        if (count($array) > 0) {    		 			       	  				    			  			
            $this->LoadInfoByAssoc($array[0]);      						     	 					         		 
            return true;        	 	     		   		      		  	 	
        } else {     			 			    	 	 	  	    		 	 			
            return false;    	 	 		        	 			      	 	  		
        }    	    		       	 			         	 		
    }     	  	 	                  	 			  
}     	  				    			  		      		 	 		