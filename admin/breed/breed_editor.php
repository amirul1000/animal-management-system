<?php
 include("../template/header.php");
?>
<script language="javascript" src="breed.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","breed"))?></b>
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

								 <form name="frm_breed" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
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
					  </tr><tr>
						 <td>Breed Name</td>
						 <td>
						    <input type="text" name="breed_name" id="breed_name"  value="<?=$breed_name?>" class="textbox">
						 </td>
				     </tr><tr>
		           		 <td>Status</td>
				   		 <td><?php
	$enumbreed = getEnumFieldValues('breed','status');
?>
<select  name="status" id="status"   class="textbox">
<?php
   foreach($enumbreed as $key=>$value)
   { 
?>
  <option value="<?=$value?>" <?php if($value==$status){ echo "selected"; }?>><?=$value?></option>
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

