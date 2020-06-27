var myString = function(){/*<tr class="Home_infinite_list_row_k">
    
    <td id="Home_mobilegridcell_40_k" name="mobilegridcell_40" class="Home_mobilegridcell_40" colspan="1" rowspan="1" _idx="_k">
        <div class="cell-wrapper">
            <img class="img-circle  Home_mobileimage_52" src="IMG_SRC" id="Home_mobileimage_52_k" dsid="mobileimage_52_k" name="mobileimage_52" dsrefid="mobileimage_52" _idx="_k">
        </div>
    </td>
    
    <td id="Home_mobilegridcell_41_k" name="mobilegridcell_41" class="Home_mobilegridcell_41" colspan="1" rowspan="1" _idx="_k">
        <div class="cell-wrapper">
            <div name="mobilelabel_info" id="Home_mobilelabel_info_k" dsid="mobilelabel_info_k" data-role="appery_label" class="Home_mobilelabel_info" dsrefid="mobilelabel_info" _idx="_k">INFO</div>
            
            <div name="mobilelabel_posted_time" id="Home_mobilelabel_posted_time_k" dsid="mobilelabel_posted_time_k" data-role="appery_label" class="Home_mobilelabel_posted_time" dsrefid="mobilelabel_posted_time" _idx="_k">POSTED_DATE_TIME</div>
            
            <div name="mobilelabel_id" id="Home_mobilelabel_id_k" dsid="mobilelabel_id_k" data-role="appery_label" class="Home_mobilelabel_id" dsrefid="mobilelabel_id" _idx="_k" style="display:none;">ID</div>
            <a data-role="button" name="mobilebutton_bid" dsid="mobilebutton_bid_k" class="Home_mobilebutton_bid ui-link ui-btn ui-btn-b ui-icon-carat-r ui-btn-icon-left ui-btn-inline ui-shadow ui-corner-all" id="Home_mobilebutton_bid_k" data-corners="true" 
            data-icon="carat-r" data-iconpos="left" x-apple-data-detectors="false" data-inline="true" data-mini="false" data-theme="b" tabindex="2" role="button" dsrefid="mobilebutton_bid" _idx="_k">
                        Bid
            </a>
        </div>
    </td>
    <td>@USERNAME</td>
</tr>*/}.toString().slice(14, - 3);


function  get_row_data(i,data)
{
 
    
   /*html_str ='<tr class="Home_infinite_list_row_'+k+'">'+
'<td id="Home_mobilegridcell_40_'+k+'" name="mobilegridcell_40" class="Home_mobilegridcell_40" colspan="1" rowspan="1"'+ '_idx="_'+k+'">'+
        '<div class="cell-wrapper">'+
    '<img class="img-circle  Home_mobileimage_52" src="'+data['image'][0]['image']+'" id="Home_mobileimage_52_'+k+'"'+
           'dsid="mobileimage_52_'+k+'" name="mobileimage_52" dsrefid="mobileimage_52" _idx="_'+k+'">'+
        '</div>'+
    '</td>'+
    '<td id="Home_mobilegridcell_41_'+k+'" name="mobilegridcell_41" class="Home_mobilegridcell_41" colspan="1"'+
    'rowspan="1"'+ '_idx="_'+k+'">'+
        '<div class="cell-wrapper">'+
        '<div name="mobilelabel_info" id="Home_mobilelabel_info_'+k+'" dsid="mobilelabel_info_'+k+'"'+ 
'data-role="appery_label" class="Home_mobilelabel_info" dsrefid="mobilelabel_info" _idx="_'+k+'">'+data['info']+   
'</div>'+
 '<div name="mobilelabel_posted_time" id="Home_mobilelabel_posted_time_'+k+'" dsid="mobilelabel_posted_time_'+k+'"'+ 'data-role="appery_label" class="Home_mobilelabel_posted_time" dsrefid="mobilelabel_posted_time"'+
            '_idx="_'+k+'">'+data['posted_date_time']+'</div>'+
    '<div name="mobilelabel_id" id="Home_mobilelabel_id_'+k+'" dsid="mobilelabel_id_'+k+'" data-role="appery_label"'+ 'class="Home_mobilelabel_id" dsrefid="mobilelabel_id" _idx="_'+k+'" style="display:none;">'+data['id']+  
    '</div>'+
        '<a data-role="button" name="mobilebutton_bid" dsid="mobilebutton_bid_'+k+'"'+ 
        ' class="Home_mobilebutton_bid ui-link ui-btn ui-btn-b ui-icon-carat-r ui-btn-icon-left ui-btn-inline'+
      'ui-shadow ui-corner-all" id''="Home_mobilebutton_bid_'+k+'" data-corners="true" '+
        'data-icon="carat-r" data-iconpos="left" x-apple-data-detectors="false" data-inline="true" '+
        'data-mini="false" data-theme="b" tabindex="2" role="button" dsrefid="mobilebutton_bid" '+
        '_idx="_'+k+'">Bid'+
        '</a>'+
    '</div>'+
    '</td>'+
'</tr>';*/

html_str  = '<tr><td><div class="cell-wrapper">'+
    '<img class="img-circle  Home_mobileimage_52" src="" id="Home_mobileimage_52_'+i+'"'+
           'dsid="mobileimage_52_'+i+'" name="mobileimage_52" dsrefid="mobileimage_52" _idx="_'+i+'">'+
        '</div><td><tr>';
    

return html_str;
    
}