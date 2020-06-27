function delete_favorite(listitem)
{
   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_favorite_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
   localStorage.setItem('id',id);
   
   restservice_favorite_delete.execute();
} 


function signle_favorite_group_details(listitem)
{
  
   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_favorite_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
   localStorage.setItem('id',id);
   
  Appery.navigateTo('SingleFavoriteGroup', { });
  
}
