<?php
       session_start();
       include("../../common/lib.php");
	   include("../../lib/class.db.php");
	   include("../../common/config.php");
	   include("../../common_lib/lib.php");
	   
	    if(empty($_SESSION['users_id'])) 
	   {
	     Header("Location: ../login/");
	   }
	  
	   $cmd = $_REQUEST['cmd'];
	   switch($cmd)
	   {
		   case "breed":
					 $data = get_breed($db,$_REQUEST['type_id']);
					 echo json_encode($data);
				 break;
		  case "gender":
					$info["table"] = "breedgender";
					$info["fields"] = array("breedgender.*"); 
					$info["where"]   = "1 AND  breed_id='".$_REQUEST['breed_id']."'  ORDER BY gender_name ASC";
					$data =  $db->select($info);
					echo json_encode($data);
				 break;
	      case "age":
					$info["table"] = "genderage";
					$info["fields"] = array("genderage.*"); 
					$info["where"]   = "1 AND  breedgender_id='".$_REQUEST['gender_id']."'  ORDER BY age ASC";
					$data =  $db->select($info);
					echo json_encode($data);
				 break;	 
	   }
?>