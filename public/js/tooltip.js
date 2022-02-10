$(document).ready(function(){
    
    $( ".content span" ).tooltip({
        track:true,
        open: function(event, ui ) {
              var id = this.id; 
              var azulejoid = $(this).attr('data-id');
              
              $.ajax({
                  url:'../../src/Repository/AzulejoRepository.php',
                  type:'GET',
                  data:{azulejoid:azulejoid},
                  success: function(response){
                      
                      $("#"+id).tooltip('option','content',response);
                        
                  }
              });
        }
    });

    $(".content span").mouseover(function(){
        $(this).attr('title','Por favor, espere...');
        $(this).tooltip();
        $('.ui-tooltip').hide();
    });

    
});

