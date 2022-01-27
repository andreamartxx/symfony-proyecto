window.onload = function(){

    document.getElementById("btncalculo").addEventListener("click", (e)=>{
        e.preventDefault();
        enviaDatos();

    });

}

function enviaDatos(){
    
    var seleccion = document.getElementById("selector");

    var junta = document.getElementById("selectJunta");

    var ancho = 0;

    var largo = 0;

    var resultado;

    var largo2 = 0 ;

    var ancho2 = 0;

    if([seleccion.selectedIndex] == "1"){
        ancho = 20;
        largo = 40;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "2"){
        ancho = 7.5;
        largo = 30;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "3"){
        ancho = 7.5;
        largo = 45;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "4"){
        ancho = 15;
        largo = 90;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "5" || [seleccion.selectedIndex] == "12"){
        ancho = 60;
        largo = 60;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "6" || [seleccion.selectedIndex] == "7" || [seleccion.selectedIndex] == "11"){
        ancho = 30;
        largo = 30;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "8"){
        ancho = 45.5;
        largo = 67.5;
        resultado = ancho*largo;
    }
    if([seleccion.selectedIndex] == "9" || [seleccion.selectedIndex] == "10"){
        ancho = 45;
        largo = 45;

        resultado = ancho*largo;
    }

    //JUNTA
            if([junta.selectedIndex] == "0"){
                ancho2 = ancho+0;
                largo2 = largo+0;
            } 
            if([junta.selectedIndex]=="1"){
                ancho2 = ancho+0.10;
                largo2 = largo+0.10;
            }
            if([junta.selectedIndex] == "2"){
                ancho2 = ancho + 0.20;
                largo2 = ancho + 0.20;
            }
            if([junta.selectedIndex] == "3"){
                ancho2 = ancho + 0.30;
                largo2 = ancho + 0.30;
            }
            if([junta.selectedIndex] == "4"){
                ancho2 = ancho + 0.40;
                largo2 = ancho + 0.40;
            }
            if([junta.selectedIndex] == "5"){
                ancho2 = ancho + 0.50;
                largo2 = ancho + 0.50;
            }

    //calculo num azulejos necesarios con valores ancho y largo

    var largoSuperficie = document.getElementById("largo").value; //valor input

    var anchoSuperficie = document.getElementById("ancho").value; //valor input

    var numAzulejosAncho = anchoSuperficie/parseFloat(ancho2);

    var numAzulejosLargo = largoSuperficie/parseFloat(largo2);

    //superficie en metros cuadrados

    var metroCuadrado = parseFloat(anchoSuperficie/100)*parseFloat(largoSuperficie/100);

    // console.log(metroCuadrado);

    //numAzulejos

    var total = numAzulejosAncho*numAzulejosLargo;
    
    // Num total de cajas, supongamos que las cajas contienen para cubrir la superficie de
    // 0.5m2, las cajas tenemos en cuenta que las va a cargar una persona.

    //azulejos por m2

    var numAzulejo = total/metroCuadrado;

    // console.log(numAzulejo);

    //num de cajas

    if(numAzulejo > 10){

         caja = numAzulejo/5; //m2

        if(numAzulejo%5 > 0){
            caja++;
        }

    }else{

        caja = numAzulejo/10; //m2

        if(numAzulejo%10 > 0){
            caja++;
        }
    }

    //Azulejos por caja

    var azulejoCaja = (total/caja)+1;

    // console.log(caja);

    //imprimir en pantalla

    document.getElementById("text").innerHTML = 
    "<p>Azulejo Seleccionado: "+seleccion.options[seleccion.selectedIndex].text+ " </p>" + 
    "<p>Superficie en metros cuadrados: " +metroCuadrado.toFixed(0) + " m²</p>"+
    "Número de azulejos necesario: " +total.toFixed(0) + " </p>"+
    "Azulejos por metro cuadrado: " +numAzulejo.toFixed(0) + " azulejo/m²</p>"+
    "Cajas necesarias: " +caja.toFixed(0) +" cajas</p>"+
    "Azulejos por caja: " +azulejoCaja.toFixed(0)+ " azulejos</p>";
}
