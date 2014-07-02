$(document).ready(function(){
    $('#add').click(function(){
        $('#jokes').slideUp(500);
        $('#addJoke').slideDown(500);
                
    });
    $('#allJokes').click(function(){
        $('#jokes').slideDown(500);
        $('#addJoke').slideUp(500);
                
    });
    $('.filter').click(function(){
        //$('.drop-down').slideUp(500);        
    if ( $( ".drop-down" ).is( ":hidden" ) ) {
        $( ".drop-down" ).slideDown( "slow" );
    } else {
         $( ".drop-down" ).slideUp(500);
    }
  });
});