
$(document).ready(()=>{

  $("#btnGenera").on("click", (e)=>{
    var texto = $("#text").text();
    jQuery("#qrcode").qrcode({
      width: 128,
      height: 128,
      text: texto
    });
    e.preventDefault();
  });    
});