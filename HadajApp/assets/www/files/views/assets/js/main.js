var not_execute = false;

function check_ad_required()
{
   
    if(ImageData.length===0)
    {
        Apperyio("mobilelabel_error").show();
        Msg("Image can't be empty","mobilelabel_error");
        return false;
    }
    
    if(Apperyio("mobiletextinput_quantity").val()==="" || Apperyio("mobiletextinput_quantity").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("Quantity can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_breed").val()==="" || Apperyio("mobileselectmenu_breed").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("Breed can't be empty","mobilelabel_error");
        return false;
    }
    
    if(Apperyio("mobileselectmenu_gender").val()==="" || Apperyio("mobileselectmenu_gender").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("Gender can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_age").val()==="" || Apperyio("mobileselectmenu_age").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("Age can't be empty","mobilelabel_error");
        return false;
    }
    
    if(Apperyio("mobileselectmenu_contry").val()==="" || Apperyio("mobileselectmenu_contry").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("Contry can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_city").val()==="" || Apperyio("mobileselectmenu_city").val()==="null")
    {
         Apperyio("mobilelabel_error").show();
        Msg("City can't be empty","mobilelabel_error");
        return false;
    }
    
    return true;
}

function check_favorite_required()
{
    
  
    if(Apperyio("mobileselectmenu_breed").val()==="" || Apperyio("mobileselectmenu_breed").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("Breed can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_gender").val()==="" || Apperyio("mobileselectmenu_gender").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("Gender can't be empty","mobilelabel_error");
        return false;
    }
    
    if(Apperyio("mobileselectmenu_from_contry").val()==="" || Apperyio("mobileselectmenu_from_contry").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("Contry can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_from_city").val()==="" || Apperyio("mobileselectmenu_from_city").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("City can't be empty","mobilelabel_error");
        return false;
    }
    
    if(Apperyio("mobileselectmenu_to_contry").val()==="" || Apperyio("mobileselectmenu_to_contry").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("Contry can't be empty","mobilelabel_error");
        return false;
    }
    if(Apperyio("mobileselectmenu_to_city").val()==="" || Apperyio("mobileselectmenu_to_city").val()==="null")
    {
        Apperyio("mobilelabel_error").show();
        Msg("City can't be empty","mobilelabel_error");
        return false;
    }
    
    return true;
}

$(document).ready(function(){
$("#RecevingSMSCode_mobiletextinput_activation_code").bind('keyup', function() {
   
   alert(1);
    
});
});

function favorite_notification()
{
  setInterval(function() {
      restservice_favorite_notification.execute();
  }, 50000);
   
}
//favorite_notification();


/*SmsPlugin.prototype.send('+61402884334', 'Your Message Here!', 'INTENT',
                             
                             function() {
                                 alert('Message sent successfully');
                             },
                             
                             function(e) {
                                 alert('Message Failed:' + e);
                             });*/
                             
//https://getsatisfaction.com/apperyio/topics/grid_left_to_right                             