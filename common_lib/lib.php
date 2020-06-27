<?php

   function get_type($db)
  {
	  
	$info["table"] = "type";
	$info["fields"] = array("type.*"); 
	$info["where"]   = "1   $whrstr ORDER BY type_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
  
  function get_breed($db,$type_id)
  {
	  
	$info["table"] = "breed";
	$info["fields"] = array("breed.*"); 
	$info["where"]   = "1  AND type_id='$type_id' ORDER BY breed_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
  
  function get_gender($db,$type_id,$breed_id)
  {
	  
	$info["table"] = "gender";
	$info["fields"] = array("gender.*"); 
	$info["where"]   = "1  AND type_id='$type_id' AND breed_id='$breed_id'  ORDER BY gender_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
  
  function get_age($db,$type_id,$breed_id,$gender_id)
  {  
	$info["table"] = "age";
	$info["fields"] = array("age.*"); 
	$info["where"]   = "1 AND type_id='$type_id' AND breed_id='$breed_id' AND gender_id='$gender_id' ORDER BY age_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
?>