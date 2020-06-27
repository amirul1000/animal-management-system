<?php 
     $server = 1;
   if($server ==1)
   {
	  $host     = "localhost"; 
      $database = "hadajapp";
      $user     = "root";
      $password = "secret";
   }
   else
   {
	   
   }
   
   
   
   $db  = new Db($host,$user,$password,$database);

?>
