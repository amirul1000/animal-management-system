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
				$info['table']    = "choice";
				$data['users_id']   = $_REQUEST['users_id'];
                $data['type']   = $_REQUEST['type'];
                $data['breed']   = $_REQUEST['breed'];
                $data['gender']   = $_REQUEST['gender'];
                $data['slaugter']   = $_REQUEST['slaugter'];
                $data['from_contry']   = $_REQUEST['from_contry'];
                $data['from_city']   = $_REQUEST['from_city'];
                $data['to_contry']   = $_REQUEST['to_contry'];
                $data['to_city']   = $_REQUEST['to_city'];
                $data['quantity']   = $_REQUEST['quantity'];
                $data['info']   = $_REQUEST['info'];
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
				
				include("choice_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "choice";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$users_id    = $res[0]['users_id'];
					$type    = $res[0]['type'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$slaugter    = $res[0]['slaugter'];
					$from_contry    = $res[0]['from_contry'];
					$from_city    = $res[0]['from_city'];
					$to_contry    = $res[0]['to_contry'];
					$to_city    = $res[0]['to_city'];
					$quantity    = $res[0]['quantity'];
					$info    = $res[0]['info'];
					$created_date_time    = $res[0]['created_date_time'];
					
				 }
						   
				include("choice_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "choice";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("choice_list.php");						   
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
				include("choice_list.php");
				break; 
        case "search_choice":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("choice_list.php");
				break;  								   
						
	     default :    
		       include("choice_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'choice'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
