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
				$info['table']    = "animal";
				$data['type']   = get_type($db,$_REQUEST['type_id']);
                $data['breed']   = get_breed($db,$_REQUEST['breed_id']);
                $data['gender']   =  get_gender($db,$_REQUEST['gender_id']);
                $data['age']   =  get_age($db,$_REQUEST['age_id']);
                $data['status']   = $_REQUEST['status'];
                
				
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
				
				include("animal_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "animal";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$type    = $res[0]['type'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$age    = $res[0]['age'];
					$status    = $res[0]['status'];
					
				 }
						   
				include("animal_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "animal";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("animal_list.php");						   
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
				include("animal_list.php");
				break; 
        case "search_animal":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("animal_list.php");
				break;  								   
						
	     default :    
		       include("animal_list.php");		         
	   }

//Protect same image name
function getMaxId($db)
 {	  
    $sql    = "SHOW TABLE STATUS LIKE 'animal'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 
 
function  get_type($db,$type_id)
{
	$info["table"] = "type";
	$info["fields"] = array("type.*"); 
	$info["where"]   = "1  AND id='".$type_id."'";
	$arr =  $db->select($info);
	return $arr[0]['type_name'];
}
function get_breed($db,$breed_id)
{
    $info["table"] = "breed";
	$info["fields"] = array("breed.*"); 
	$info["where"]   = "1 AND  id='".$_REQUEST['breed_id']."'  ORDER BY breed_name ASC";
	$arr =  $db->select($info);
	return $arr[0]['breed_name'];  	
}
function get_gender($db,$gender_id)
 {
	$info["table"] = "breedgender";
	$info["fields"] = array("breedgender.*"); 
	$info["where"]   = "1 AND  id='".$_REQUEST['gender_id']."'  ORDER BY gender_name ASC";
	$arr =  $db->select($info);
	return $arr[0]['gender_name'];
 }
function get_age($db,$age_id)
 {
	 $info["table"] = "genderage";
	$info["fields"] = array("genderage.*"); 
	$info["where"]   = "1 AND  id='".$_REQUEST['age_id']."'  ORDER BY age ASC";
	$arr =  $db->select($info);
	return $arr[0]['age'];
	 
 }
?>
