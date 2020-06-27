<?php
       session_start();
       include("../../common/lib.php");
	   include("../../lib/class.db.php");
	   include("../../common/config.php");
	   
	    if(empty($_SESSION['users_id'])) 
	   {
	     Header("Location: ../login/");
	   }
	  
	   $cmd = $_REQUEST['cmd'];
	   switch($cmd)
	   {
	     
		  case 'add': 
				$info['table']    = "favorite";
				$data['users_id']   = $_REQUEST['users_id'];
                $data['type']   = $_REQUEST['type'];
                $data['breed']   = $_REQUEST['breed'];
                $data['gender']   = $_REQUEST['gender'];
                $data['slaugter']   = $_REQUEST['slaugter'];
                $data['contry']   = $_REQUEST['contry'];
                $data['city']   = $_REQUEST['city'];
                $data['favorite_group']   = $_REQUEST['favorite_group'];
                $data['created_date_time']   = $_REQUEST['created_date_time'];
                
				
				$info['data']     =  $data;
				
				if(empty($_REQUEST['id']))
				{
					 $db->insert($info);
				}
				else
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
				
				include("favorite_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "favorite";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$users_id    = $res[0]['users_id'];
					$type    = $res[0]['type'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$slaugter    = $res[0]['slaugter'];
					$contry    = $res[0]['contry'];
					$city    = $res[0]['city'];
					$favorite_group    = $res[0]['favorite_group'];
					$created_date_time    = $res[0]['created_date_time'];
					
				 }
						   
				include("favorite_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "favorite";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("favorite_list.php");						   
				break; 
						   
         case "list" :    	 
			  if(!empty($_REQUEST['page'])&&$_SESSION["search"]=="yes")
				{
				  $_SESSION["search"]="yes";
				}
				else
				{
				   $_SESSION["search"]="no";
					unset($_SESSION["search"]);
					unset($_SESSION['field_name']);
					unset($_SESSION["field_value"]); 
				}
				include("favorite_list.php");
				break; 
        case "search_favorite":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("favorite_list.php");
				break;  								   
						
	     default :    
		       include("favorite_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'favorite'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
