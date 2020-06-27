var VideoData = [];
//var Video = [];
function uploadVideo(evt)  
{
    var files = evt.target.files;
    
  
    
    //for(i=0;i<files.length;i++)
    //{
        i=0;
        var file = files[i];
              if (files && file) {
                
                    var reader = new FileReader();
                    reader.onload = function(readerEvt) {
                    var binaryString = readerEvt.target.result;
                    data = 'data:'+file.type+';base64,'+ btoa(binaryString);
                    //video = '<img src="'+data+'" style="width:50px;height:50px;">';  
                    VideoData[i] = data; 
                    //Video[i] = video;
                   // $("#id_image_content").html(img); 
                   
                     show_video();
                   
                 };
                 reader.readAsBinaryString(file);
              }
    //}
    show_video();
}    

function show_video()
{
  /*  str = "";
    str2 = "";
    
      str = str + Video[0];
     
   $("#id_video_content").html(str);  */
   
}