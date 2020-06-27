function delete_my_order(listitem)
{
   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_my_choice_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
   localStorage.setItem('id',id);
   
  // $('[name="mobilelistitem_my_orders"]').html("");
   
   restservice_delete_my_choice.execute();
   
}   