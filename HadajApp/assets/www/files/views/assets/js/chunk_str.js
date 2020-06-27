function chunkString(str, len) {
  var _size = Math.ceil(str.length/len),
      _ret  = new Array(_size),
      _offset
  ;

  for (var _i=0; _i<_size; _i++) {
    _offset = _i * len;
    _ret[_i] = str.substring(_offset, _offset + len);
  }

  return _ret;
}


  
function sendImageData(ImageData)
{
    
      if(ImageData.length===0)
        return 0;
    
      var str = "";
      len = 4000;
      
        for(i=0;i<ImageData.length;i++)
        { 
          str = str+ImageData[i]+"END";
        }  
        
        
        data = chunkString(str, len);
        data[data.length+1] = "STOP";
        
        for(i=0;i<data.length;i++)
        { 
          if(typeof data[i] == "undefined")
          {
              continue;
          }
          
           localStorage.setItem("image",data[i]);
           restservice_adpost_image.execute({async:false});
        }

}



function sendVideoData(VideoData)
{
       
              
      if(VideoData.length===0)
        return 0;
    
      var str = "";
      len = 4000;
      
        for(i=0;i<VideoData.length;i++)
        { 
          str = str+VideoData[i]+"END";
        }  
        
        data = chunkString(str, len);
        data[data.length+1] = "STOP";
        
        for(i=0;i<data.length;i++)
        { 
          if(typeof data[i] == "undefined")
          {
              continue;
          }
          
           localStorage.setItem("video",data[i]);
           restservice_adpost_video.execute({async:false});
        }
       
}


function sendProfileImageData(ImageData2)
{
    
    if(ImageData2.length===0)
    return 0;
    
    var str = "";
    len = 4000;
    
    for(i=0;i<ImageData2.length;i++)
    { 
      str = str+ImageData2[i]+"END";
    }  
    
    
    data = chunkString(str, len);
    data[data.length+1] = "STOP";
    
    for(i=0;i<data.length;i++)
    { 
      if(typeof data[i] == "undefined")
      {
          continue;
      }
      
   
       localStorage.setItem("image",data[i]);
       restservice_profile_image_save.execute({async:false});
    }

}