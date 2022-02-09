$(document).ready(function(){

    /*FALTA PONER PHP*/
    
    $( ".content span" ).tooltip({
        track:true,
        open: function( event, ui ) {
              var id = this.id; 
              var userid = $(this).attr('data-id');
              
              $.ajax({
                  url:'fetch_details.php',
                  type:'post',
                  data:{userid:userid},
                  success: function(response){
                      
                      // Setting content option
                      $("#"+id).tooltip('option','content',response);
                        
                  }
              });
        }
    });

    $(".content span").mouseout(function(){
        // re-initializing tooltip
        $(this).attr('title','Por favor, espere...');
        $(this).tooltip();
        $('.ui-tooltip').hide();
    });

    
});

