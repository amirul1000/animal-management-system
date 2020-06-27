<?php
  function get_type($db)
  {
	  
	$info["table"] = "type";
	$info["fields"] = array("type.*"); 
	$info["where"]   = "1   $whrstr ORDER BY type_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
  
  function get_breed($db)
  {
	  
	$info["table"] = "breed";
	$info["fields"] = array("breed.*"); 
	$info["where"]   = "1   $whrstr ORDER BY breed_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }
  
  function get_gender($db)
  {
	  
	$info["table"] = "gender";
	$info["fields"] = array("gender.*"); 
	$info["where"]   = "1   $whrstr ORDER BY gender_name ASC";
	$arr =  $db->select($info);
	
	return $arr;
  }

function calculate_time_span($date){
		$ms  = strtotime(date('Y-m-d H:i:s')) - strtotime($date);
		$ms  = $ms*1000;
		
		$d=0;
		$h=0;
		$m=0;
		$s=0;
		$str="";
		$s = floor($ms / 1000);
		$m = floor($s / 60);
		$s = $s % 60;
		$h = floor($m / 60);
		$m = $m % 60;
		$d = floor($h / 24);
		$h = $h % 24;
		if($d>0)
		{
		  $str = $d." day ";
		}
		if($h>0)
		{
		  $str .= $h." hour ";
		}
		if($m>0)
		{
		  $str .= $m." minute ";
		}
		if($s>0)
		{
		  $str .= $s." second ";
		}
		return $str;
}
?>