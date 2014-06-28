$(document).ready(function(){
    $('#imgJoke').click(function(){
        $('#textFormat').slideUp(500);
        $('#imgFormat').slideDown(500);
                
    });
    $('#textJoke').click(function(){
        
        $('#textFormat').slideDown(500);
        $('#imgFormat').slideUp(500);
                
    });
});