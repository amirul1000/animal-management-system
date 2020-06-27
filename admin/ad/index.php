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
				$info['table']    = "ad";
				$data['users_id']   = $_REQUEST['users_id'];
				$data['type']   = $_REQUEST['type'];
                $data['quantity']   = $_REQUEST['quantity'];
                $data['breed']   = $_REQUEST['breed'];
                $data['gender']   = $_REQUEST['gender'];
                $data['known_animal']   = $_REQUEST['known_animal'];
                $data['its_name']   = $_REQUEST['its_name'];
                $data['age']   = $_REQUEST['age'];
				$data['slaugter']   = $_REQUEST['slaugter'];
                $data['information']   = $_REQUEST['information'];
                $data['contry']   = $_REQUEST['contry'];
                $data['city']   = $_REQUEST['city'];
				
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
				
				include("ad_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "ad";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$users_id    = $res[0]['users_id'];
					$type    = $res[0]['type'];
					$quantity    = $res[0]['quantity'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$known_animal    = $res[0]['known_animal'];
					$its_name    = $res[0]['its_name'];
					$age    = $res[0]['age'];
					$slaugter    = $res[0]['slaugter'];
					$information    = $res[0]['information'];
					$contry    = $res[0]['contry'];
					$city    = $res[0]['city'];
				 }
						   
				include("ad_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "ad";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
					
					//delete
					$info['table']    = "adimage";
					$info['where']    = "ad_id='$Id'";
						$db->delete($info);
				}
				include("ad_list.php");						   
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
				include("ad_list.php");
				break; 
        case "search_ad":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("ad_list.php");
				break;  								   
						
	     default :    
		       include("ad_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'ad'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
