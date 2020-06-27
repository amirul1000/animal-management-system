function delete_ad(listitem)
{
   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_profile_ad_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
   localStorage.setItem('id',id);
   
   restservice_ad_delete.execute();
}   

function change_status(listitem)
{
   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_profile_ad_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
   localStorage.setItem('id',id);
   
   restservice_change_ad_sold_status.execute();
}   