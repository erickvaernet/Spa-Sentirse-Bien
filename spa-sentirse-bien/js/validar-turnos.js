const formulario = document.querySelector("form");
const btonEnviar = document.getElementById("enviar");
btonEnviar.addEventListener("click",function (event){
    event.preventDefault();

    const nombreF= document.querySelector("#nombre");
    const apellidoF= document.querySelector("#apellido");
    const dniF= document.querySelector("#dni");
    const telefonoF= document.querySelector("#telefono");
    const emailF= document.querySelector("#email");
    const servicioF= document.querySelector("#servicio");
    //const fechaF= document.querySelector("#fecha");
    
    array_errores=[];

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

    /*Si el arreglo de errores no contiene ningun error, se envia el formulario,sino se genera un reporte de errores
    que se vera por encima del formulario*/
    array_errores.length == 0 ? this.submit():generarReporteDeErrores(array_errores,this) ;
    
});

function contieneSoloLetras(valor){    
    const regexSoloLetras = /^[A-Z]*$/i;
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
    let valor= elementoServicio.value;
    return (valor>0 && valor<=elementoServicio.lastElementChild.value);
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