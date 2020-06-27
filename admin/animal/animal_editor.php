<?php
 include("../template/header.php");
?>
<script language="javascript" src="animal.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<script language="javascript" src="../ajax/js/ajax.js"></script>

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","animal"))?></b>
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

								 <form name="frm_animal" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
                                    <div class="portlet-body">
                                     <div class="table-responsive">	
                                            <table class="table">
                                                 <tr>
                                                     <td>Type</td>
                                                     <td><?php
                                                            $info['table']    = "type";
                                                            $info['fields']   = array("*");   	   
                                                            $info['where']    =  "1=1 ORDER BY id DESC";
                                                            $restype  =  $db->select($info);
                                                        ?>
                                                        <select  name="type_id" id="type_id"   class="textbox">
                                                            <option value="">--Select--</option>
                                                            <?php
                                                               foreach($restype as $key=>$each)
                                                               { 
                                                            ?>
                                                              <option value="<?=$restype[$key]['id']?>" <?php if($restype[$key]['id']==$type_id){ echo "selected"; }?>><?=$restype[$key]['type_name']?></option>
                                                            <?php
                                                             }
                                                            ?> 
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                     <td>Breed</td>
                                                     <td>
                            
                                                        <select  name="breed_id" id="breed_id"   class="textbox">
                                                        </select>
                                                     </td>
                                               </tr>
                                               <tr>
                                                     <td>Gender</td>
                                                     <td>
                                                        <select  name="gender_id" id="gender_id"   class="textbox">
                                                        </select>
                                                     </td>
                                               </tr>
                                              <tr>
                                                     <td>Age</td>
                                                     <td>
                                                        <select  name="age_id" id="age_id"   class="textbox">
                                                        </select>
                                                     </td>
                                              </tr>
                                              <tr>
                                                 <td>Status</td>
                                                 <td><?php
                                                            $enumanimal = getEnumFieldValues('animal','status');
                                                        ?>
                                                        <select  name="status" id="status"   class="textbox">
                                                        <?php
                                                           foreach($enumanimal as $key=>$value)
                                                           { 
                                                        ?>
                                                          <option value="<?=$value?>" <?php if($value==$status){ echo "selected"; }?>><?=$value?></option>
                                                         <?php
                                                          }
                                                        ?> 
                                                        </select>
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

