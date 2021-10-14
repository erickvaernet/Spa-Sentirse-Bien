let bandera2=0;
const formulario = document.querySelector("form");
const btonEnviar = document.getElementById("enviar");
const radioBtnTarjeta= document.getElementById("tarjeta");

btonEnviar.addEventListener("click",function (event){   

    const nombreF= document.querySelector("#nombre");
    const apellidoF= document.querySelector("#apellido");
    const dniF= document.querySelector("#dni");
    const telefonoF= document.querySelector("#telefono");
    const emailF= document.querySelector("#email");
    const servicioF= document.querySelector("#servicio");
    //const fechaF= document.querySelector("#fecha");
    
    array_errores=[];
    array_errores_tarjeta=[];

    //validamos Nombre
    contieneSoloLetras(nombreF.value)  ? "":array_errores.push("-Solo se pueden usar letras en el campo nombre");
    //validamos Apellido
    contieneSoloLetras(apellidoF.value) ? "":array_errores.push("-Solo se pueden usar letras en el campo apellido");

    //validamos DNI
    contieneSoloNumeros(dniF.value) ? "":array_errores.push("-Solo se pueden usar numeros en el campo dni");
    //validamos Telefono
    contieneSoloNumeros(telefonoF.value) ? "":array_errores.push("-Solo se pueden usar numeros en el campo telefono");
    
    //validar email
    mailValido(emailF.value) ? "":array_errores.push("-Complete el campo de email, con un email valido (Al menos debe contener un @ y .)");

    //validar servicios
    valorServicioValido(servicioF)? "":array_errores.push("-Seleccione un servicio válido para realizar el turno");

    //validar campos de tarjeta en caso de estar seleccionada
    if(bandera1>0){
        const nombreTarjeta = document.getElementById("nombre-tarjeta");
        const numeroTarjeta = document.getElementById("numero-tarjeta");
        const vencimientoTarjeta = document.getElementById("vencimiento-tarjeta");
        const codigoTarjeta = document.getElementById("codigo-tarjeta");

        contieneSoloLetras(nombreTarjeta.value)? "": array_errores_tarjeta.push("-El nombre indicado en la tarjeta solo puede contener letras");
        contieneSoloNumeros(numeroTarjeta.value)? "": array_errores_tarjeta.push("-El campo de número de tarjeta solo puede contener números");
        noContieneLetras(vencimientoTarjeta.value)? "": array_errores_tarjeta.push("-El campo de vencimiento de la tarjeta solo puede contener números y un / para separa el mes y el año ");
        contieneSoloNumeros(codigoTarjeta.value)? "": array_errores_tarjeta.push("-El campo de código de tarjeta solo puede contener números");
    }

    /*Si el arreglo de errores no contiene ningun error, se envia el formulario, sino se genera un reporte de errores
    que se vera por encima del formulario*/
    let error_datos_personales = array_errores.length != 0 ;
    let error_datos_tarjeta=array_errores_tarjeta!=0;
    if(error_datos_personales || error_datos_tarjeta){
        event.preventDefault();
        error_datos_personales? generarReporteDeErrores(array_errores,this):"";
        error_datos_tarjeta? generarReporteDeErroresTarjeta(array_errores_tarjeta,this):"";
        bandera2++;
    }
    else{
        if(bandera2>0){
            let erroresDiv= document.querySelector("#errores")
            erroresDiv.classList.remove("lista-errores");
            erroresDiv.innerHTML="";
        };
    }
    
});

function contieneSoloLetras(valor){    
    const regexSoloLetras = /^[A-Z]*$/i;
    return regexSoloLetras.test(valor);    
}

function noContieneLetras(valor){
    const regexSoloLetras = /^[0-9]*\/[0-9]*$/;
    return regexSoloLetras.test(valor);     
}

function contieneSoloNumeros(valor){
    const regexSoloLetras = /^[0-9]*$/;
    return regexSoloLetras.test(valor);    
}
function mailValido(valor){
    let resultado;
    resultado=valor.includes("@");
    resultado=valor.includes(".");
    return resultado;
}

function valorServicioValido(elementoServicio){    
    let valor= parseInt(elementoServicio.value);
    return (valor>0 && valor<= parseInt(elementoServicio.lastElementChild.value));
}

function generarReporteDeErrores(array_errores,formulario)
{    
    const divErrores= document.querySelector("#errores");
    divErrores.classList.add("lista-errores");
    let erroresString="";
    while(array_errores.length>0){
        erroresString+="<div class='error'>"+array_errores.shift()+"<div>";
    }    
    divErrores.innerHTML= erroresString;
    /*
    let divErrores= document.createElement("div");
    divErrores.classList.add("lista-errores-form");    
    while(array_errores.length!==0){
        let errorDiv= document.createElement("div");
        errorDiv.classList.add("error-form");
        errorDiv.innerText=array_errores.pop();
        divErrores.appendChild(errorDiv);
    }    
    formulario.insertBefore(divErrores,formulario.firstChild)
    */
}
function generarReporteDeErroresTarjeta (array_errores_tarjeta){
    let div_tarjeta=document.getElementById("#div-tarjeta");
    if(document.querySelector("#errores-tarjeta")!=null){
        div_tarjeta.removeChild(document.querySelector("#errores-tarjeta"));
    }
    const divErroresTarjeta= document.createElement("div");
    divErroresTarjeta.classList.add("lista-errores");
    divErroresTarjeta.id="errores-tarjeta";
    let erroresString="";
    while(array_errores_tarjeta.length>0){
        erroresString+="<div class='error'>"+array_errores_tarjeta.shift()+"<div>";
    }    
    divErroresTarjeta.innerHTML= erroresString;
    let legendaError=document.querySelector("#div-tarjeta fieldset legend")
    document.querySelector("#div-tarjeta fieldset").insertBefore(divErroresTarjeta,legendaError);
}