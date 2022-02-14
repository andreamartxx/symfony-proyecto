$(document).ready(function(){
    $(".hover").mouseover(function(){
        console.log("a");
        $(this).tooltip({
            title: fetchData,
            html: true
        });
        $('.ui-tooltip').hide();
    });

    function fetchData()
    {
     var fetch_data = '';
     var azulejoid = $(this).attr('data-id');
     $.ajax({
      url:"/tooltip",
      method:"GET",
      data:{azulejoid:azulejoid},
      
      success:function(data)
      {
       fetch_data = data;
      }
     });   
     return fetch_data;
    }
   });

