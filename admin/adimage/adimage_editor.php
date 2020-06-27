<?php
 include("../template/header.php");
?>
<script language="javascript" src="adimage.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","adimage"))?></b>
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

								 <form name="frm_adimage" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
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
						 <td valign="top">Image</td>
						 <td>
						    <textarea name="image" id="image"  class="textbox" style="width:200px;height:100px;"><?=$image?></textarea>
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

