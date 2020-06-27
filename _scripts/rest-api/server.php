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
	      case "register":
						unset($info);
						unset($data);
					$info["table"] = "users";
					$info["fields"] = array("users.*"); 
					$info["where"]   = "1 AND  phone_no='".trim($_REQUEST['phone_no'])."'";	
					$res =  $db->select($info);
					
					if(count($res)==0)
					{
							$info['table']             = "users";
						$data['password']              = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);	
						$data['nick_name']             = $_REQUEST['nick_name'];
						$data['username']              = $_REQUEST['username'];
						$data['first_name']            = $_REQUEST['first_name'];
						$data['last_name']             = $_REQUEST['last_name'];
						$data['phone_no']              = trim($_REQUEST['phone_no']);
						$data['delivery_driver_job']   = $_REQUEST['delivery_driver_job'];
						$data['activation_code']       = $_REQUEST['activation_code']; 
						$data['verified']              = 'yes'; 
						$info['data']                  = $data;
						 $db->insert($info);
						
						$id = $db->lastInsert($result);
						 
						 
						$message = "Registration has been completed successfully";	  	
						$arr[0]['users_id'] = $id;
						$arr[0]['msg'] = $message;
						$arr[0]['status'] = 'success';
					}
					else
					{
				    	
						$message = "Error-Duplicate phone no";
						$arr[0]['users_id'] = $id;
						$arr[0]['msg'] = $message;
						$arr[0]['status'] = 'fail';
					}	
					
					echo json_encode($arr);
	              break;
	      case "login":					
					$info["table"] = "users";
					$info["fields"] = array("users.*"); 
					$info["where"]   = "1 AND  phone_no='".mysql_real_escape_string(trim($_REQUEST['phone_no']))."' 
					                      AND  verified='yes'
					                      AND  CHAR_LENGTH(phone_no)>0";
					$res =  $db->select($info);					
					if(count($res)==0)
					{
					   $message = "You are not registered or not verified";
					   $arr['user'] = $res; 
					   $arr['login_status']['msg'] = $message;
					   $arr['login_status']['status'] = 'fail';
					}
					else
					{
					   $message = "Login successfully"; 
					   $arr['user'] = $res; 
					   $arr['login_status']['msg'] = $message;
					   $arr['login_status']['status'] = 'success';	
					}
					echo json_encode($arr);
	           break;
		  case "type":
				$info["table"] = "type";
				$info["fields"] = array("type.*"); 
				$info["where"]   = "1  ORDER BY type_name ASC";
				$arr =  $db->select($info);
				echo json_encode($arr);   	   
		      break;
		 case "breed":
			     $info["table"] = "breed";
				 $info["fields"] = array("breed.*"); 
				 $info["where"]   = "1   AND type_id='".$_REQUEST['type_id']."' ORDER By breed_name ASC";
				 $arr =  $db->select($info);   
				 echo json_encode($arr);   	   
		      break;
		 case "gender":
			    $info["table"] = "breedgender";
				$info["fields"] = array("breedgender.*"); 
				$info["where"]   = "1   AND  breed_id='".$_REQUEST['breed_id']."' ORDER BY gender_name ASC";
				$arr =  $db->select($info);
				echo json_encode($arr);   	   
		      break;    
		 case "age":
			    $info["table"] = "genderage";
				$info["fields"] = array("genderage.*"); 
				$info["where"]   = "1   AND  breedgender_id='".$_REQUEST['breedgender_id']."' ORDER BY age ASC";
				$arr =  $db->select($info);
				echo json_encode($arr);   	   
		      break;   
		 case "contry":
		        $info["table"] = "contry";
				$info["fields"] = array("contry.*"); 
				$info["where"]   = "1  ORDER BY contry_name ASC";
				$arr =  $db->select($info);
		  	    echo json_encode($arr);   	   
		      break;
		 case "city":
			    $info["table"] = "city";
				$info["fields"] = array("city.*"); 
				$info["where"]   = "1   AND  contry_id='".$_REQUEST['contry_id']."' ORDER BY city_name ASC";
				$arr =  $db->select($info);
				echo json_encode($arr);   	   
		      break;
		 case "terms_services":
			        $info["table"] = "terms_services";
					$info["fields"] = array("terms_services.*"); 
					$info["where"]   = "1  ORDER BY order_no ASC";
					$arr =  $db->select($info);
					echo json_encode($arr);   
		     break;	 
		 case "welcome_content":
			        $info["table"] = "welcome_content";
					$info["fields"] = array("welcome_content.*"); 
					$info["where"]   = "1";
					$arr =  $db->select($info);
					echo json_encode($arr);   
		     break;	
	    case "get_posted_ad":
		        ////////////////Where condition////////////////////
				 /* unset($info);
				  unset($data);
				$info['table']             = "test";
				$data['content']               = $_REQUEST['search_type'];				
				$info['data']                  = $data;
				 $db->insert($info);*/
				
		        if($_REQUEST['search_type']=='type_group')
				{
					//$search_key_json = $_REQUEST['search_key_json'];
					//$arr_json = json_decode($search_key_json);
					
					/*$favorite_id = $_REQUEST['search_key_json'];
					
					 unset($info);
					 unset($data);
					$info["table"] = "favorite";
					$info["fields"] = array("favorite.*"); 
					$info["where"]   = "1 AND id='".$favorite_id."'";
					$res =  $db->select($info);
					
					$type    = $res[0]['type'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$slaugter    = $res[0]['slaugter'];
					$contry    = $res[0]['contry'];
					$city    = $res[0]['city'];
					
					$where = " AND  ad.type LIKE '%".$type."%' AND  ad.breed LIKE '%".$breed."%' AND  ad.gender LIKE '%".$gender."%'  
					           AND  ad.slaugter LIKE '%".$slaugter."%' AND  ad.contry LIKE '%".$contry."%' AND  ad.city LIKE '%".$city."%'";
				
				   			*/ 
				   $where = " AND  ad.type LIKE '%".$_REQUEST['search_key_json']."%'";		
					
				}
				else if($_REQUEST['search_type']=='users')
				{
					//$search_key_json = $_REQUEST['search_key_json'];
					//$arr_json = json_decode($search_key_json);
					
					$users  = $_REQUEST['search_key_json'];
					
					 unset($info);
					 unset($data);
					$info["table"] = "users";
					$info["fields"] = array("users.*"); 
					$info["where"]   = "1  AND ( nick_name LIKE '%".$users."%'  OR  username LIKE '%".$users."%' 
										   OR  first_name LIKE '%".$users."%' OR  last_name LIKE '%".$users."%')";
					$arr =  $db->select($info);
					
					for($i=0;$i<count($arr);$i++)
					{
						$user_arr[] = $arr[$i]['id'];
					}
					
					$where = " AND users.id=-1";
					
					if(count($user_arr)>0)
					{
						$id_list = implode(",",$user_arr);
						$where = " AND users.id in($id_list)";
					}
					
				}
				
				///////////////////////////////////////////////
		
		
		        $limit = $_REQUEST['limit'];
				$offset = $_REQUEST['skip']-$_REQUEST['limit'];
		        
				
								
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*,users.username,users.phone_no"); 
				$info["where"]   = "1 $where  ORDER BY ad.id DESC LIMIT $offset, $limit";
				$arr =  $db->select($info);
				
				for($i=0;$i<count($arr);$i++)
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
				}
				
				echo json_encode($arr); 
		      break;
		 case "get_my_posted_ad":
		        
		        $where = " AND  users.id='".$_REQUEST['users_id']."'";
				
								
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*"); 
				$info["where"]   = "1 $where  ORDER BY ad.id DESC";
				$arr =  $db->select($info);
				
				$total = count($arr);
				
				/////////////unsold/////////////
				 $unsold = 0;
				 for($j=0;$j<count($arr);$j++)
				 {
					 if($arr[$j]['sold_status'] == 'unsold')
					 {
						$unsold = $unsold + 1; 
					 }
				 }
				//////////////unsold///////////
				
				for($i=0;$i<count($arr);$i++)
				{
					      unset($info);
						  unset($data);
						$info['table']    = "adimage";
						$info["fields"] = array("adimage.*"); 
					    $info["where"]   = "1 AND ad_id='".$arr[$i]['id']."' ORDER BY id DESC LIMIT  0,1";
						  $arr_image =  $db->select($info);
						
						 
					 $arr[$i]['image'] = $arr_image;
					 //$arr[$i]['video'] = $arr_video;
					 $arr[$i]['posted_date_time'] = calculate_time_span($arr[$i]['posted_date_time']);
					 $arr[$i]['info'] = $arr[$i]['type'].' '.$arr[$i]['gender'].' '.$arr[$i]['breed'];
					 $arr[$i]['numrows'] = $total;					
					 $arr[$i]['unsold'] = floor(100/$total)*$unsold;	 
				}
				
				echo json_encode($arr); 
		      break;	  
		case "get_image":
					  unset($info);
					  unset($data);
					$info['table']    = "adimage";
					$info["fields"] = array("adimage.*"); 
					$info["where"]   = "1 AND id='".$_REQUEST['adimage_id']."' ORDER BY id DESC LIMIT  0,1";
					  $arr_image =  $db->select($info);
					echo json_encode($arr_image);    
		      break;  	 
		  case "get_ad_details":
		        $info["table"] = "ad";
				$info["fields"] = array("ad.*"); 
				$info["where"]   = "1  AND id='".$_REQUEST['ad_id']."' ORDER BY ad.id DESC";
				$arr =  $db->select($info);
				
				for($i=0;$i<count($arr);$i++)
				{
					      unset($info);
						  unset($data);
						$info['table']    = "adimage";
						$info["fields"] = array("adimage.*"); 
					    $info["where"]   = "1 AND ad_id='".$arr[$i]['id']."' ORDER BY id DESC";
						  $arr_image =  $db->select($info);
						  
						  
						  unset($info);
						  unset($data);
						$info['table']    = "advideo";
						$info["fields"] = array("advideo.*"); 
					    $info["where"]   = "1 AND ad_id='".$arr[$i]['id']."'  ORDER BY id DESC";
						 $arr_video =  $db->select($info);
						 
						 
						 $arr[$i]['image'] = $arr_image;
						 $arr[$i]['video'] = $arr_video;
						 $arr[$i]['posted_date_time'] = calculate_time_span($arr[$i]['posted_date_time']);
				}
				
				echo json_encode($arr);  
			break;
		 case "get_guide_info":
				$info["table"] = "guideinfo";
				$info["fields"] = array("guideinfo.*"); 
				$info["where"]   = "1";
				$arr =  $db->select($info);
				echo json_encode($arr);  
			break; 	
		 case "get_favorite_group":
				$info["table"] = "favorite";
				$info["fields"] = array("favorite.*"); 
				$info["where"]   = "1  AND users_id='".$_REQUEST['users_id']."'";
				$arr =  $db->select($info);
				echo json_encode($arr);  
			break; 
		 case "get_favorite_posted_ad":
				////////////////Where condition////////////////////
					 unset($info);
					 unset($data);
					$info["table"] = "favorite";
					$info["fields"] = array("favorite.*"); 
					$info["where"]   = "1 AND id='".$_REQUEST['id']."'
					                      AND users_id='".$_REQUEST['users_id']."'";
					$res =  $db->select($info);
					
					
					$type    = $res[0]['type'];
					$breed    = $res[0]['breed'];
					$gender    = $res[0]['gender'];
					$contry    = $res[0]['contry'];
					$city    = $res[0]['city'];
				
					$where1 .= "  ( ad.type LIKE '%".$type."%' AND  
										ad.breed LIKE '%".$breed."%' AND  
										ad.gender LIKE '%".$gender."%' AND
										ad.contry LIKE '%".$contry."%' AND 
										ad.city LIKE '%".$city."%' ) OR";
					
					
					if(strlen($where1)>0)
					{
						$where  = " AND ( ".substr($where1,0,strlen($where1)-2)." )";
					}
					else
					{
						exit;
					}
				///////////////////////////////////////////////
		
				  unset($info);
				  unset($data);			
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*,users.username,users.phone_no"); 
				$info["where"]   = "1 $where  ORDER BY ad.id DESC";
				$arr =  $db->select($info);
				
				for($i=0;$i<count($arr);$i++)
				{
					      unset($info);
						  unset($data);
						$info['table']    = "adimage";
						$info["fields"] = array("adimage.*"); 
					    $info["where"]   = "1 AND ad_id='".$arr[$i]['id']."' ORDER BY id DESC LIMIT  0,1";
						  $arr_image =  $db->select($info);
						 
						 
						 
						 $arr[$i]['image'] = $arr_image;
						 //$arr[$i]['video'] = $arr_video;
						 $arr[$i]['posted_date_time'] = calculate_time_span($arr[$i]['posted_date_time']);
						 $arr[$i]['info'] = $arr[$i]['age'].' '.$arr[$i]['gender'].' '.$arr[$i]['breed'].
											 ' '.$arr[$i]['type'].
						 $arr[$i]['numrows'] = count($arr);
					  
				}
				
				echo json_encode($arr); 
		      break;	
	    case "get_profile_image":
				  unset($info);
				  unset($data);
				$info['table']    = "profileimage";
				$info["fields"] = array("profileimage.*"); 
				$info["where"]   = "1 AND users_id='".$_REQUEST['users_id']."' ORDER BY id DESC LIMIT 0,1";
				$arr_image =  $db->select($info);
				echo json_encode($arr_image);    
		      break; 
	    case "get_choice":
				  unset($info);
				  unset($data);
				$info['table']    = "choice";
				$info["fields"] = array("choice.*"); 
				$info["where"]   = "1 AND users_id='".$_REQUEST['users_id']."' ORDER BY id DESC";
				$arr_image =  $db->select($info);
				echo json_encode($arr_image);    
		      break; 
		case "get_users":
		        $limit = $_REQUEST['limit'];
				$offset = $_REQUEST['skip']-$_REQUEST['limit'];
				if($offset<0)
				{
					$offset = 0;
				}
		        $info["table"] = "users LEFT OUTER JOIN profileimage ON (users.id = profileimage.users_id)";
				$info["fields"] = array("users.*,profileimage.image"); 
				$info["where"]   = "1  ORDER BY users.id DESC LIMIT $offset, $limit";
				$arr =  $db->select($info);
				echo json_encode($arr);  
			break;
		case "get_choices_posted_ad":
		        ////////////////Where condition////////////////////
					 unset($info);
					 unset($data);
					$info["table"] = "choice";
					$info["fields"] = array("choice.*"); 
					$info["where"]   = "1 AND users_id='".$_REQUEST['users_id']."'";
					$res =  $db->select($info);
					
					
					for($i=0;$i<=count($res);$i++)
					{
					
						$type    = $res[$i]['type'];
						$breed    = $res[$i]['breed'];
						$gender    = $res[$i]['gender'];
						$contry    = $res[$i]['to_contry'];
						$city    = $res[$i]['to_city'];
					
						$where1 .= "  ( ad.type LIKE '%".$type."%' AND  
											ad.breed LIKE '%".$breed."%' AND  
											ad.gender LIKE '%".$gender."%' AND
											ad.contry LIKE '%".$contry."%' AND 
											ad.city LIKE '%".$city."%' ) OR";
					}
					
					if(strlen($where1)>0)
					{
						$where  = " AND ( ".substr($where1,0,strlen($where1)-2)." )";
					}
					else
					{
						exit;
					}
				///////////////////////////////////////////////
		
				  unset($info);
				  unset($data);			
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*,users.username,users.phone_no"); 
				$info["where"]   = "1 $where  ORDER BY ad.id DESC";
				$arr =  $db->select($info);
				
				for($i=0;$i<count($arr);$i++)
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
				}
				
				echo json_encode($arr); 
		      break;
		case "get_favorite_noti_posted_ad":
		        $info["table"] = "favorite_sent_notification";
				$info["fields"] = array("favorite_sent_notification.*"); 
				$info["where"]   =  "1 AND users_id='".$_REQUEST['users_id']."'";
				$arr_sent =  $db->select($info);
				
				$ad_id_list = "";
				for($i=0;$i<count($arr_sent);$i++)
				{
				   $ad_id_list .= $arr_sent[$i]['ad_id'].',';
				}
				
				////////////////Where condition////////////////////
					 unset($info);
					 unset($data);
					$info["table"] = "favorite";
					$info["fields"] = array("favorite.*"); 
					$info["where"]   = "1 AND users_id='".$_REQUEST['users_id']."'";
					$res =  $db->select($info);
					
					for($i=0;$i<=count($res);$i++)
					{
					
						$type    = $res[$i]['type'];
						$breed    = $res[$i]['breed'];
						$gender    = $res[$i]['gender'];
						$contry    = $res[$i]['contry'];
						$city    = $res[$i]['city'];
					
						$where1 .= "  ( ad.type LIKE '%".$type."%' AND  
											ad.breed LIKE '%".$breed."%' AND  
											ad.gender LIKE '%".$gender."%' AND
											ad.contry LIKE '%".$contry."%' AND 
											ad.city LIKE '%".$city."%' ) OR";
					}
					
					if(strlen($where1)>0)
					{
						$where  = " AND ( ".substr($where1,0,strlen($where1)-2)." )";
					}
					else
					{
						exit;
					}
					
					if(strlen($ad_id_list)>0)
					{
					  $ad_id_list = substr($ad_id_list,0,strlen($ad_id_list)-1);
					  $where  .= " AND ad.id NOT IN($ad_id_list)";	
					}
				///////////////////////////////////////////////
		
				  unset($info);
				  unset($data);			
		        $info["table"] = "ad LEFT OUTER JOIN users ON(ad.users_id=users.id)";
				$info["fields"] = array("ad.*,users.username,users.phone_no"); 
				$info["where"]   = "1 $where  ORDER BY ad.id DESC";
				$arr =  $db->select($info);
				
				for($i=0;$i<count($arr);$i++)
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
						 
						 
					   /////////////////////update//////////////////////
							unset($info);
							unset($data);
						$info['table']    = "favorite_sent_notification";
						$data['ad_id']   = $arr[$i]['id'];
						$data['users_id']   = $_REQUEST['users_id'];
						$data['sent_date_time']   = date("Y-m-d H:i:s");
						$info['data']     =  $data;							
							$db->insert($info);
					   ////////////////////////////////////////////////	 
				}
				
				echo json_encode($arr); 
		      break;	  			   	 			   	     	  
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
			    case "save_ad":
						 
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
						$data['posted_date_time'] = date("Y-m-d H:i:s");
						$info['data']     =  $data;
						 $result = $db->insert($info);
						 $Id =  $db->lastInsert($result);
						
						 $arr["ad_id"] = $Id;
						
						 echo json_encode($arr);
						  
						/*
						$image = explode("xxx",$_REQUEST['ImageData']); 
						
						for($i=0;$i<count($image);$i++)
						{
							
							  unset($info);
							  unset($data);
							$info['table']    = "adimage";
							$data['ad_id']    = $Id;
							$data['image']    = $image[$i];
							$info['data']     =  $data;
							  $db->insert($info);
							
						}*/
		     break;	    	  	  
			 case "save_image":
					   unset($info);
					   unset($data);
					$info["table"] = "storage";
					$info["fields"] = array("storage.*"); 
					$info["where"]   = "1 AND ad_id='".$_REQUEST['ad_id']."'";
					$arrstorage =  $db->select($info);
					$s_data  = $arrstorage[0]['s_data'];
					  
			      if($_REQUEST['image']=="STOP")
				  {
					  $data_arr = explode("END",$s_data);
					  
					for($i=0;$i<count($data_arr)-1;$i++)
					{ 
						  unset($info);
						  unset($data);
						$info['table']    = "adimage";
						$data['ad_id']    = $_REQUEST['ad_id'];
						$data['image']    = $data_arr[$i];
						$info['data']     =  $data;
						  $db->insert($info);
					}
					      
				  }
				  else
				  {
					   if(count($arrstorage)==0)
					   {
					
						  unset($info);
						  unset($data);
						$info['table']    = "storage";
						$data['ad_id']    = $_REQUEST['ad_id'];
						$data['s_data']    = $_REQUEST['image'];
						$info['data']     =  $data;
						  $db->insert($info);
					   }
					   else
					   {
						   unset($info);
						  unset($data);
						$info['table']    = "storage";
						$data['s_data']    = $s_data.$_REQUEST['image'];
						$info["where"]   = "1 AND  ad_id='".$_REQUEST['ad_id']."'";
						$info['data']     =  $data;
						  $db->update($info);
						   
					   }
				  }
		     break;	 
			 case "save_video":
			           unset($info);
					   unset($data);
					$info["table"] = "storage2";
					$info["fields"] = array("storage2.*"); 
					$info["where"]   = "1 AND ad_id='".$_REQUEST['ad_id']."'";
					$arrstorage =  $db->select($info);
					$s_data  = $arrstorage[0]['s_data'];
					  
			      if($_REQUEST['video']=="STOP")
				  {
					  $data_arr = explode("END",$s_data);
					  
					for($i=0;$i<count($data_arr)-1;$i++)
					{ 
						  unset($info);
						  unset($data);
						$info['table']    = "advideo";
						$data['ad_id']    = $_REQUEST['ad_id'];
						$data['video']    = $data_arr[$i];
						$info['data']     =  $data;
						  $db->insert($info);
					}
					      
				  }
				  else
				  {
					   if(count($arrstorage)==0)
					   {
						  unset($info);
						  unset($data);
						$info['table']    = "storage2";
						$data['ad_id']    = $_REQUEST['ad_id'];
						$data['s_data']    = $_REQUEST['video'];
						$info['data']     =  $data;
						  $db->insert($info);
					   }
					   else
					   {
						   unset($info);
						   unset($data);
						$info['table']    = "storage2";
						$data['s_data']    = $s_data.$_REQUEST['video'];
						$info["where"]   = "1 AND  ad_id='".$_REQUEST['ad_id']."'";
						$info['data']     =  $data;
						  $db->update($info);
						   
					   }
				  }
		     break;	
		case "save_favorite_group":
			    $info['table']    = "favorite";
				$data['users_id']   = $_REQUEST['users_id'];
                $data['type']   = $_REQUEST['type'];
                $data['breed']   = $_REQUEST['breed'];
                $data['gender']   = $_REQUEST['gender'];
                $data['slaugter']   = $_REQUEST['slaugter'];
                $data['contry']   = $_REQUEST['contry'];
                $data['city']   = $_REQUEST['city'];
                $data['favorite_group']   = $_REQUEST['favorite_group'];
                $data['created_date_time']   =  date("Y-m-d H:i:s");
				$info['data']     =  $data;
				  $db->insert($info);
			break; 
		case "save_choice":
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
                $data['created_date_time']   =  date("Y-m-d H:i:s");
				$info['data']     =  $data;
				  $db->insert($info);
			break; 	
		case "save_profile_image":
					   unset($info);
					   unset($data);
					$info["table"] = "storage3";
					$info["fields"] = array("storage3.*"); 
					$info["where"]   = "1 AND users_id='".$_REQUEST['users_id']."'";
					$arrstorage =  $db->select($info);
					$s_data  = $arrstorage[0]['s_data'];
					  
			      if($_REQUEST['image']=="STOP")
				  {
					 
					  $data_arr = explode("END",$s_data);
					  
					for($i=0;$i<count($data_arr)-1;$i++)
					{ 
						  unset($info);
						  unset($data);
						$info['table']    = "profileimage";
						$data['users_id']    = $_REQUEST['users_id'];
						$data['image']    = $data_arr[$i];
						$info['data']     =  $data;
						  $db->insert($info);
					}
					      
				  }
				  else
				  {
					   if(count($arrstorage)==0)
					   {
					
						  unset($info);
						  unset($data);
						$info['table']    = "storage3";
						$data['users_id']    = $_REQUEST['users_id'];
						$data['s_data']    = $_REQUEST['image'];
						$info['data']     =  $data;
						  $db->insert($info);
					   }
					   else
					   {
						   unset($info);
						   unset($data);
						$info['table']    = "storage3";
						$data['s_data']    = $s_data.$_REQUEST['image'];
						$info["where"]   = "1 AND  users_id='".$_REQUEST['users_id']."'";
						$info['data']     =  $data;
						  $db->update($info);
						   
					   }
				  }
		     break;
		  case 'delete_my_choice':
						$Id               = $_REQUEST['id'];
			
						$info['table']    = "choice";
						$info['where']    = "id='$Id' AND users_id='".$_REQUEST['users_id']."'";
						
						if($Id)
						{
							$db->delete($info);
						}
					 break;
		  case 'delete_ad':
						$Id               = $_REQUEST['id'];
			
						$info['table']    = "ad";
						$info['where']    = "id='$Id' AND users_id='".$_REQUEST['users_id']."'";
						
						if($Id)
						{
							$db->delete($info);	
							
							//delete
							$info['table']    = "adimage";
							$info['where']    = "ad_id='$Id'";
								$db->delete($info);
						}
					 break;
			case 'change_ad_sold_status':
				      unset($info);
					  unset($data);
					$info["table"] = "ad";
					$info["fields"] = array("ad.*"); 
					$info["where"]   = "1 AND  id='".$_REQUEST['id']."' AND users_id='".$_REQUEST['users_id']."'";
					$res =  $db->select($info); 
					
					if($res[0]['sold_status']=='sold')
					{
						$sold_status = 'unsold';
					}
					else
					{
						$sold_status = 'sold';
					}
					  
					  unset($info);
					  unset($data);
					$info['table']    = "ad";
					$data['sold_status'] = $sold_status;
					$info["where"]   = "1 AND  id='".$_REQUEST['id']."' AND users_id='".$_REQUEST['users_id']."'";
					$info['data']     =  $data;
					  $db->update($info);					  
			        break;
			case 'favorite_delete':
						$Id               = $_REQUEST['id'];
			
						$info['table']    = "favorite";
						$info['where']    = "id='$Id' AND users_id='".$_REQUEST['users_id']."'";
						
						if($Id)
						{
							$db->delete($info);
						}
					 break;				 			 
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