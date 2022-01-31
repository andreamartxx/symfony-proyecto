/* const $imagen = document.querySelector("#codigo"),
			$boton = document.querySelector("#btnDescargar");
		new QRious({
			element: $imagen,
			value: "https://parzibyte.me/blog", // La URL o el texto
			size: 500,
			backgroundAlpha: 0, // 0 para fondo transparente
			foreground: "#8bc34a", // Color del QR
			level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)
		});
		$boton.onclick = () => {
			const enlace = document.createElement("a");
			enlace.href = $imagen.src;
			enlace.download = "Código QR generado desde parzibyte.me.png";
			enlace.click();
} */

/* var miCodigoQR = new QRCode("codigoQR");

$(document).ready(function(){
  $("#generarCodigo").on("click",function(){
    var cadena = $("#item_txt").val();
    if (cadena == "") {
        alert("Ingresa un texto");
        $("#item_txt").focus();
    }else{
      $("#descargarCodigo").css("display","inline-block");
      miCodigoQR.makeCode(cadena);
    }
  });

  $("#descargarCodigo").on("click",function(){
    var base64 = $("#codigoQR img").attr('src');
    $("#descargarCodigo").attr('href', base64);
    $("#descargarCodigo").attr('download', "codigoQR");
    $("#descargarCodigo").trigger("click");
  });
}); */