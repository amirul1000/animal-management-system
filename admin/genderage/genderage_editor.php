<?php
 include("../template/header.php");
?>
<script language="javascript" src="genderage.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","genderage"))?></b>
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

								 <form name="frm_genderage" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										 <tr>
							 <td>Gender</td>
							 <td><?php
	$info['table']    = "breedgender";
	$info['fields']   = array("*");   	   
	$info['where']    =  "1=1 ORDER BY id DESC";
	$resbreedgender  =  $db->select($info);
?>
<select  name="breedgender_id" id="breedgender_id"   class="textbox">
	<option value="">--Select--</option>
	<?php
	   foreach($resbreedgender as $key=>$each)
	   { 
	?>
	  <option value="<?=$resbreedgender[$key]['id']?>" <?php if($resbreedgender[$key]['id']==$breedgender_id){ echo "selected"; }?>><?=$resbreedgender[$key]['gender_name']?></option>
	<?php
	 }
	?> 
</select></td>
					  </tr><tr>
						 <td>Age</td>
						 <td>
						    <input type="text" name="age" id="age"  value="<?=$age?>" class="textbox">
						 </td>
				     </tr><tr>
		           		 <td>Status</td>
				   		 <td><?php
	$enumgenderage = getEnumFieldValues('genderage','status');
?>
<select  name="status" id="status"   class="textbox">
<?php
   foreach($enumgenderage as $key=>$value)
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

