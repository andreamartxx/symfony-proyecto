$(document).ready(function(){
    $(".hover").mouseover(function(){
        azulejoid = $(this).attr('data-id')
        $(this).tooltip({
            title: fetchData(azulejoid),
            html: true
        });
      
        $('.ui-tooltip').hide();
    });

    function fetchData(azulejoid)
    {
     var fetch_data = '';
     $.ajax({
      url:"/tooltip/" + azulejoid,
      method:"GET",
      
      success:function(data)
      {
       fetch_data = data;
       alert(data);
/*        return fetch_data;
 */   }
     });   
     
    }
});

