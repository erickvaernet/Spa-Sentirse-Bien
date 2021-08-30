let select1= document.getElementById("seccion-servicio");
let select2= document.getElementById("servicio");

select1.addEventListener("change",()=>{
    if(select1.value==="masajes"){
        sobrescribirOpciones(select2,"anti-stress", "descontracturante","con piedras calientes","circulatorios");
    }
    else if(select1.value==="belleza"){
        sobrescribirOpciones(select2,"Lifting de pestaña", "Depilacion facial","Belleza de Manos y Pies");
    }    
    else if(select1.value==="punta-diamante"){
        sobrescribirOpciones(select2,"Punta de Diamante: Microexfoliación", "Limpieza Profunda + Hidratación","Crio Frecuencia Facial");
    }
    else if(select1.value==="tratamientos-corporales"){
        sobrescribirOpciones(select2,"VelaSlim", "DermoHealth","Criofrecuencia","Ultracavitación");
    }
});

function sobrescribirOpciones(elementoSelect,...opciones){
    let i=0;
    let contenido="";
    for(opc of opciones){
        contenido+=`
        <option value=${i}>${opc}</option>
        `;
        i++;
    }
    elementoSelect.innerHTML=contenido;
}