<?php
 include("../template/header.php");
?>
<script language="javascript" src="storage2.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","storage2"))?></b>
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

								 <form name="frm_storage2" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										 <tr>
							 <td>Ad</td>
							 <td><?php
	$info['table']    = "ad";
	$info['fields']   = array("*");   	   
	$info['where']    =  "1=1 ORDER BY id DESC";
	$resad  =  $db->select($info);
?>
<select  name="ad_id" id="ad_id"   class="textbox">
	<option value="">--Select--</option>
	<?php
	   foreach($resad as $key=>$each)
	   { 
	?>
	  <option value="<?=$resad[$key]['id']?>" <?php if($resad[$key]['id']==$ad_id){ echo "selected"; }?>><?=$resad[$key]['type']?></option>
	<?php
	 }
	?> 
</select></td>
					  </tr><tr>
						 <td valign="top">S Data</td>
						 <td>
						    <textarea name="s_data" id="s_data"  class="textbox" style="width:200px;height:100px;"><?=$s_data?></textarea>
						 </td>
				     </tr><tr>
		           		 <td>Read Status</td>
				   		 <td><?php
	$enumstorage2 = getEnumFieldValues('storage2','read_status');
?>
<select  name="read_status" id="read_status"   class="textbox">
<?php
   foreach($enumstorage2 as $key=>$value)
   { 
?>
  <option value="<?=$value?>" <?php if($value==$read_status){ echo "selected"; }?>><?=$value?></option>
 <?php
  }
?> 
</select></td>
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

