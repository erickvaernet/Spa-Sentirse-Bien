let bandera1=0;
//const radioBtnTarjeta= document.getElementById("tarjeta");
const contenedorBtnEnviar= document.querySelector("form div.contenedor-btn");
const radioBtnEfectivo= document.getElementById("efectivo");

radioBtnTarjeta.addEventListener("click",function(){
    if(bandera1>0) return ;
    const divTarjeta=document.createElement("div");
    //divTarjeta.classList.add("form-serv-indiv");
    divTarjeta.id="div-tarjeta"
    divTarjeta.style.width="100%";
    divTarjeta.innerHTML=`
    <fieldset class="form-serv-indiv" style="width: 100%; padding: 0  10px 10px 10px">
        <legend style="text-decoration:underline">Datos de Tarjeta</legend>
        <label for="nombre-tarjeta">Nombre indicado en la tarjeta*</label>
        <input id="nombre-tarjeta" name="nombre-tarjeta" type="text" placeholder="Nombre como se indica en la tarjeta" required>

        <label for="numero-tarjeta">Número de la tarjeta*</label>
        <input id="numero-tarjeta" name="numero-tarjeta" type="number" placeholder="número de tarjeta" required>
        
        <label for="vencimiento-tarjeta">Vencimiento de la tarjeta*</label>
        <input id="vencimiento-tarjeta" name="vencimiento-tarjeta" type="text" placeholder="MM/AA" required>

        <label for="codigo-tarjeta">Código de seguridad*</label>
        <input id="codigo-tarjeta" name="codigo-tarjeta" type="number" placeholder="código" required>
    </fieldset>
    `;
    document.querySelector("form").insertBefore(divTarjeta,contenedorBtnEnviar);
    bandera1++;
});

radioBtnEfectivo.addEventListener("click",function(){
    if(bandera1>0){
        document.querySelector("form").removeChild(document.getElementById("div-tarjeta"));
        bandera1--;
    }
})