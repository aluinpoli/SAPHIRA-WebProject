$(document).ready(function(){
    $('#add').click(function(){
        $('#jokes').slideUp(500);
        $('#addJoke').slideDown(500);
                
    });
    $('#allJokes').click(function(){
        $('#jokes').slideDown(500);
        $('#addJoke').slideUp(500);
                
    });
});