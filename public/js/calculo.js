window.onload = function(){

    document.getElementById("btncalculo").addEventListener("click", (e)=>{
        e.preventDefault();
        enviaDatos();

    });
}

function enviaDatos(){
    
    var seleccion = document.getElementById("selector");

    var ancho = 0;

    var largo = 0;

    if([seleccion.selectedIndex] == "1"){
        ancho = 20;
        largo = 40;
    }
    if([seleccion.selectedIndex] == "2"){
        ancho = 7.5;
        largo = 30;
    }
    if([seleccion.selectedIndex] == "4" || [seleccion.selectedIndex] == "7"){
        ancho = 60;
        largo = 60;
    }
    if([seleccion.selectedIndex] == "5"){
        ancho = 19.5;
        largo = 121.5;
    }
    if([seleccion.selectedIndex] == "6"){
        ancho = 15;
        largo = 90;
    }
    if([seleccion.selectedIndex] == "3"|| [seleccion.selectedIndex] == "8" ||[seleccion.selectedIndex] == "9"){
        ancho = 30;
        largo = 30;
    }
    if([seleccion.selectedIndex] == "10"){
        ancho = 45.5;
        largo = 67.5;
    }
    if([seleccion.selectedIndex] == "11" || [seleccion.selectedIndex] == "12"){
        ancho = 45;
        largo = 45;
    }

    //calculo num azulejos necesarios con valores ancho y largo

    var largoSuperficie = document.getElementById("largo").value;

    var anchoSuperficie = document.getElementById("ancho").value;


    //superficie en metros cuadrados

    var metroCuadrado = parseFloat(anchoSuperficie/100)*parseFloat(largoSuperficie/100);


    //numAzulejos, ancho de la superficie partido por ancho azulejo, lo mismo para el largo
    
    var numAzulejosAncho = (anchoSuperficie/100)/(ancho/100);

    var numAzulejosLargo = (largoSuperficie/100)/(largo/100);

    var total = (numAzulejosAncho)*(numAzulejosLargo);
    

    //azulejos por m2

    var numAzulejo = 100/total;

    //num de cajas, de 1m^2

    if(numAzulejo > 10){

        caja = total/5;

       if(numAzulejo%5 > 0){
           caja++;
       }

   }else{

       caja = total/10;

       if(numAzulejo%10 > 0){
           caja++;
       }
   }

    //Azulejos por caja

    var azulejoCaja = (total/caja);

    //añade 15% por roturas

    var addAzulejo = azulejoCaja + (15/100);

    //imprimir en pantalla
    
    document.getElementById("text").innerHTML = 
    "<p>Azulejo Seleccionado: "+seleccion.options[seleccion.selectedIndex].text+ " </p>" + 
    "<p>Superficie en metros cuadrados: " +metroCuadrado.toFixed(0) + " m²</p>"+
    "<p>Número de azulejos necesario: " +total.toFixed(0) + " </p>"+
    "<p>Azulejos por metro cuadrado: " +numAzulejo.toFixed(0) + " azulejo/m²</p>"+
    "<p>Cajas necesarias: " +caja.toFixed(0) +" cajas</p>"+
    "<p>Azulejos por caja: " +addAzulejo.toFixed(0)+ " azulejos</p>";

   //creaciónJSON

    let uploadData = {
        azulejoSeleccionado : seleccion.options[seleccion.selectedIndex].text,
        superficie : metroCuadrado.toFixed(0),
        numAzulejo : total.toFixed(0),
        azulejoMetro : numAzulejo.toFixed(0),
        numCaja : caja.toFixed(0),
        azulejoCaja : addAzulejo.toFixed(0)
    }

    //conexión con php para guardar los datos
    $.ajax({
        type : "POST",
        url : "/resultado/uploadAzulejo",
        data: JSON.stringify(uploadData)

    })
    .done (()=>{
        alert("Los datos se han guardado");
    })  
    


}
