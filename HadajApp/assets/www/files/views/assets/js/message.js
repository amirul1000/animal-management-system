var Msg = function(msg,lbl)
{
    Appery(lbl).html(msg);
    Appery(lbl).show();
};

var Toast = function(msg){ 
$("<div class='ui-loader ui-overlay-shadow ui-body-a ui-corner-all'><h3 style='font-size:10px'>"+msg+"</h3></div>")
.css({ display: "block", 
opacity: 0.90, 
position: "fixed", 
padding: "7px", 
"text-align": "center", 
width:"270px", 
left: ($(window).width() - 284)/2, 
top: $(window).height()/2 }) 
.appendTo( $.mobile.pageContainer ).delay( 2500 ) 
.fadeOut( 100, function(){ 
$(this).remove(); 
}); 
};
