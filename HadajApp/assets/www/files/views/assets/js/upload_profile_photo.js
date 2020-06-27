var ImageData2 = [];
function uploadProfilePhoto(evt)  
{
    var files = evt.target.files;
    
    
        
        var file = files[0];
              if (files && file) {
                
                    var reader = new FileReader();
                    reader.onload = function(readerEvt) {
                    var binaryString = readerEvt.target.result;
                    data = 'data:'+file.type+';base64,'+  btoa(binaryString);
                    ImageData2[0] = data; 
                    
                    Apperyio("mobileimage_profile").attr("src", data);   
                    
                   sendProfileImageData(ImageData2);
                   
                 };
                 reader.readAsBinaryString(file);
              }
    
    //sendProfileImageData(ImageData2);
}    

