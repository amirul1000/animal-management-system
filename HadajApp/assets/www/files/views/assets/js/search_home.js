function search_by_type(listitem)
{
    
   _idx = $(listitem).attr('_idx');
   disid = "mobilelabel_type"+_idx;   
   type_name = $("[dsid="+disid+"]").html();


   _idx = $(listitem).attr('_idx');
    disid = "mobilelabel_type_id"+_idx;   
   id = $("[dsid="+disid+"]").html();
   
  
   
   //search option
   var dataStr = {};
   dataStr['type_id'] = id;
   //saerchPara = {'search_type':'favorite_group','search_key_json':JSON.stringify(dataStr)};
   saerchPara = {'search_type':'type_group','search_key_json':type_name};
   Apperyio.storage.searchPara.set(saerchPara);
   
  

    //$('[name="infinite_list"]').empty();
    Apperyio("infinite_list").empty(""); 
   
    
    //Here you can set the needed "limit". Currently it's set to 12.
    var infiniteList = {limit: "10", skip: "0", noMoreItems: undefined};
    Apperyio.storage.dogsInfinite.set(infiniteList);
    
    
    
        
    infiniteList = Apperyio.storage.dogsInfinite.get();
    if(infiniteList.noMoreItems == "true")
       return;   
       
    infiniteList.skip = parseInt(infiniteList.skip) + parseInt(infiniteList.limit) + "";
    
    
     Apperyio.storage.dogsInfinite.set(infiniteList);
     dogsListInfinite.execute();//{async:false}
     
     
     Apperyio("mobilebutton_clr").show();
    
}

function search_by_user(search_txt)
{
 
   //search option
   var dataStr = {};
   dataStr['users'] = search_txt;
   //saerchPara = {'search_type':'users','search_key_json':JSON.stringify(dataStr)};
   saerchPara = {'search_type':'users','search_key_json':search_txt};
   Apperyio.storage.searchPara.set(saerchPara);
   
   
    //Apperyio("infinite_list").html(""); 
    
    //Here you can set the needed "limit". Currently it's set to 12.
    var infiniteList = {limit: "10", skip: "0", noMoreItems: undefined};
    Apperyio.storage.dogsInfinite.set(infiniteList);
    
    
    
        
    infiniteList = Apperyio.storage.dogsInfinite.get();
    if(infiniteList.noMoreItems == "true")
       return;   
       
    infiniteList.skip = parseInt(infiniteList.skip) + parseInt(infiniteList.limit) + "";
    
    
     Apperyio.storage.dogsInfinite.set(infiniteList);
     dogsListInfinite.execute();//{async:false}
     
     Apperyio("mobilebutton_clr").show();
}


function default_search()
{
    //search option
    saerchPara = {'search_type':'auto','search_key_json':'null'}
    Apperyio.storage.searchPara.set(saerchPara);
    
    //Here you can set the needed "limit". Currently it's set to 12.
    var infiniteList = {limit: "10", skip: "0", noMoreItems: undefined};
    Apperyio.storage.dogsInfinite.set(infiniteList);
    
    // Apperyio("infinite_list").html(""); 
        
    //Here you can set the needed "limit". Currently it's set to 12.
    infiniteList = {limit: "10", skip: "0", noMoreItems: undefined};
    Apperyio.storage.dogsInfinite.set(infiniteList);
    
        
    infiniteList = Apperyio.storage.dogsInfinite.get();
    if(infiniteList.noMoreItems == "true")
       return;   
           
    infiniteList.skip = parseInt(infiniteList.skip) + parseInt(infiniteList.limit) + "";
    
    
     Apperyio.storage.dogsInfinite.set(infiniteList);
     dogsListInfinite.execute();//{async:false}
     
     Apperyio("mobilebutton_clr").hide();
}