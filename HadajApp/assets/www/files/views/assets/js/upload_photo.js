var ImageData = [];
var ImageImg = [];
function uploadPhoto(evt)  
{
    var files = evt.target.files;
    
    for(i=0;i<files.length;i++)
    {
        
        var file = files[i];
              if (files && file) {
                
                    var reader = new FileReader();
                    reader.onload = function(readerEvt) {
                    var binaryString = readerEvt.target.result;
                    data = 'data:'+file.type+';base64,'+  btoa(binaryString);
                    
                    //console.log(data);
                    
                    img = '<img src="'+data+'" style="width:50px;height:50px;">';  
                    ImageData[i] = data; 
                    ImageImg[i] = img;
                    
                   // $("#id_image_content").html(img); 
                   
                     show_images();
                   
                 };
                 reader.readAsBinaryString(file);
              }
    }
    show_images();
}    

function show_images()
{
    str = "";
    str2 = "";
    for(i=0;i<ImageData.length;i++)
    {
      str = str + ImageImg[i];
      //str2 = str2 +ImageData[i]+'xxx';
      //alert(str2);
    }
   $("#id_image_content").html(str);  
   //localStorage.setItem("ImageData",str2);
   
}