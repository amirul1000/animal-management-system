<?php
 include("../template/header.php");
?>
<script language="javascript" src="ad.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","ad"))?></b>
          </div>
          <div class="tools">
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
          </div>
      </div>
	   <div class="portlet-body">
		         <div class="table-responsive">	
                        <table class="table">
                                 <tr>
                                          <td>  
            
                                             <form name="frm_ad" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
                                              <div class="portlet-body">
                                             <div class="table-responsive">	
                                                <table class="table">
                                                 <tr>
                                                             <td>Users</td>
                                                             <td><?php
                                                                $info['table']    = "users";
                                                                $info['fields']   = array("*");   	   
                                                                $info['where']    =  "1=1 ORDER BY id DESC";
                                                                $resusers  =  $db->select($info);
                                                            ?>
                                                            <select  name="users_id" id="users_id"   class="textbox">
                                                                <option value="">--Select--</option>
                                                                <?php
                                                                   foreach($resusers as $key=>$each)
                                                                   { 
                                                                ?>
                                                                  <option value="<?=$resusers[$key]['id']?>" <?php if($resusers[$key]['id']==$users_id){ echo "selected"; }?>><?=$resusers[$key]['email']?></option>
                                                                <?php
                                                                 }
                                                                ?> 
                                                            </select>
                                                            </td>
                                                    </tr>
                                                     <tr>
                                     <td>Type</td>
                                     <td>
                                        <input type="text" name="type" id="type"  value="<?=$type?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Quantity</td>
                                     <td>
                                        <input type="text" name="quantity" id="quantity"  value="<?=$quantity?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Breed</td>
                                     <td>
                                        <input type="text" name="breed" id="breed"  value="<?=$breed?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gender</td>
                                     <td>
                                        <input type="text" name="gender" id="gender"  value="<?=$gender?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Known Animal</td>
                                     <td>
                                        <input type="text" name="known_animal" id="known_animal"  value="<?=$known_animal?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Its Name</td>
                                     <td>
                                        <input type="text" name="its_name" id="its_name"  value="<?=$its_name?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Age</td>
                                     <td>
                                        <input type="text" name="age" id="age"  value="<?=$age?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Slaugter</td>
                                     <td>
                                        <input type="text" name="slaugter" id="slaugter"  value="<?=$slaugter?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td valign="top">Information</td>
                                     <td>
                                        <textarea name="information" id="information"  class="textbox" style="width:200px;height:100px;"><?=$information?></textarea>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Contry</td>
                                     <td>
                                        <input type="text" name="contry" id="contry"  value="<?=$contry?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>City</td>
                                     <td>
                                        <input type="text" name="city" id="city"  value="<?=$city?>" class="textbox">
                                     </td>
                                 </tr>
                                 <tr> 
                                     <td align="right"></td>
                                     <td>
                                        <input type="hidden" name="cmd" value="add">
                                        <input type="hidden" name="id" value="<?=$Id?>">			
                                        <input type="submit" name="btn_submit" id="btn_submit" value="submit" class="button_blue">
                                     </td>     
                                 </tr>
                                </table>
                                </div>
                                </div>
                        </form>
                      </td>
                     </tr>
                    </table>
			      </div>
			</div>
  </div>			
<?php
 include("../template/footer.php");
?>

