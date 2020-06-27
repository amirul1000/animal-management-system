<?php
  //date_default_timezone_set('Australia/Brisbane'); 
  session_start();
  set_time_limit(0); 
  
class Server {

    public function serve() {
	
			$uri = $_SERVER['REQUEST_URI'];
			$method = $_SERVER['REQUEST_METHOD'];
			$arrreq = explode("/",$_REQUEST['_url']);
			array_shift($arrreq);
			array_shift($arrreq);
			$cmd = $arrreq[0];
			
			debug($method);
			
			switch($method)
			{   
			     //search
				 case "GET":
				           $this->get($cmd,$arrreq);
						   break;
				 //insert		   
				 case "POST":
						   $this->post($cmd,$arrreq);	
						   break;
				 //update		   
				 case "PUT":
						   $this->put($cmd,$arrreq);	
						   break;
				//delete		   
				 case "DELETE":
						   $this->delete($cmd,$arrreq);	
						   break;
				   default:
						   echo 'error';
			}
	
	}
	
	//search
	function get($cmd,$arrreq)
	{
		       session_start();
		   include("../../common/lib.php");
		   include("../../lib/class.db.php");
		   include("../../common/config.php");
	       include("lib.php");

	   switch($cmd)
	   {
	     
	    case "get_posted_ad":
				   exit;
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*,users.username,users.phone_no"); 
				$info["where"]   = "1";
				$info["debug"]   = true;
				$arr =  $db->select($info);
				
				/*for($i=0;$i<count($arr);$i++)
				{
					      unset($info);
						  unset($data);
						$info['table']    = "adimage";
						$info["fields"] = array("adimage.*"); 
					    $info["where"]   = "1 AND ad_id='".$arr[$i]['id']."' ORDER BY id DESC LIMIT  0,1";
						  $arr_image =  $db->select($info);
						  
						
						 
						 
						 unset($info);
						 unset($data);
					   $info["table"] = "ad";
					   $info["fields"] = array("count(*) as total_rows"); 
					   $info["where"]   = "1  ORDER BY id DESC";					  
					   $res  = $db->select($info); 
					   
					   $numrows = $res[0]['total_rows'];
					   
						 
						 
						 $arr[$i]['image'] = $arr_image;
						 //$arr[$i]['video'] = $arr_video;
						 $arr[$i]['posted_date_time'] = calculate_time_span($arr[$i]['posted_date_time']);
						 $arr[$i]['info'] = $arr[$i]['age'].' '.$arr[$i]['gender'].' '.$arr[$i]['breed'].
											 ' '.$arr[$i]['type'].' '.$arr[$i]['information'].
						 $arr[$i]['numrows'] = $numrows;
				}*/
			   echo json_encode($arr); 
		      break;
		 default:
				 echo 'Error';
	   }
	}
	//update		
	function post($cmd,$arrreq)
	{
		   session_start();
		   include("../../common/lib.php");
		   include("../../lib/class.db.php");
		   include("../../common/config.php");
	       include("lib.php");
		    
	     switch($cmd)
		   {
			    		 
		     default:
			      echo 'Error';
		   }
	
	}
	//update		
	function put($cmd,$arrreq)
	{
	     switch($cmd)
		   {
			   case '':
				  
						 break;
						 
				   default:
					   echo 'Error';
		   }
	
	}
	//delete	
	function delete($cmd,$arrreq)
	{
	    switch($cmd)
		   {
			  	
			 	 	      	  	  			
				   default:
					   echo 'Error';
		   }
	
	}
  }
$server = new Server;
$server->serve();

?>