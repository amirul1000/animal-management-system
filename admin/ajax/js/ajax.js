// JavaScript Document
// A $( document ).ready() block.
$( document ).ready(function() {
	
    $("#type_id").change(function() {
  					fillUpBreed($(this).val());
			});
	$("#breed_id").change(function() {
  					fillUpGender($(this).val());
			});	
	$("#gender_id").change(function() {
  					fillUpAge($(this).val());
			});					

});
function fillUpBreed(type_id)
{
    objselect = document.getElementById("breed_id");
    objselect.options.length = 0;
    $("#spinner2").html('<img src="../../images/indicator.gif" alt="Wait" />');
    $.ajax({  
      url: '../ajax/load.php?cmd=breed&type_id='+type_id,
      success: function(data) {
              var obj = eval(data);    
              
              objselect.add(new Option('--select--',''), null);
              for(var i=0;i<obj.length;i++)
              {
                 text = obj[i].breed_name;
                 objselect.add(new Option(text,obj[i].id), null);
              }
            $("#spinner2").html('');
          }
        });
}
function fillUpGender(breed_id)
{   
    //type_id = $("#type_id").val(); 
    objselect = document.getElementById("gender_id");
    objselect.options.length = 0;
    $("#spinner2").html('<img src="../../images/indicator.gif" alt="Wait" />');
    $.ajax({  
      url: '../ajax/load.php?cmd=gender&breed_id='+breed_id,
      success: function(data) {
              var obj = eval(data);    
              
              objselect.add(new Option('--select--',''), null);
              for(var i=0;i<obj.length;i++)
              {
                 text = obj[i].gender_name;
                 objselect.add(new Option(text,obj[i].id), null);
              }
            $("#spinner2").html('');
          }
        });
}
function fillUpAge(gender_id)
{   
    type_id = $("#type_id").val(); 
	breed_id = $("#breed_id").val();
    objselect = document.getElementById("age_id");
    objselect.options.length = 0;
    $("#spinner2").html('<img src="../../images/indicator.gif" alt="Wait" />');
    $.ajax({  
      url: '../ajax/load.php?cmd=age&gender_id='+gender_id,
      success: function(data) {
              var obj = eval(data);    
              
              objselect.add(new Option('--select--',''), null);
              for(var i=0;i<obj.length;i++)
              {
                 text = obj[i].age;
                 objselect.add(new Option(text,obj[i].id), null);
              }
            $("#spinner2").html('');
          }
        });
}
