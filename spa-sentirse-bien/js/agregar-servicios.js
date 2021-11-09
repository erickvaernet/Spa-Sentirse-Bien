const contenedorServicios=document.getElementById("container-servicios"); 
const botonAgregar=document.getElementById("agregarBton");

botonAgregar.addEventListener("click", agregarServicio);

function agregarServicio(){
    
    let divContenedor=document.createElement("div");

    divContenedor.innerHTML=`<label for='servicio' style='margin-top: 30px; max-width: 95%; width: 90%'>Servicio*:</label>
    <select name='servicios[]' id='serv2' >
        <option value='1'>Masajes Anti-stress</option>
        <option value='2'>Masajes Descontracturantes</option>
        <option value='3'>Masajes con piedras calientes</option>
        <option value='4'>Masajes Circulatorios</option>
        <option value='5'>Lifting de pestaña</option>
        <option value='6'>Depilación Facial</option>
        <option value='7'>Belleza de manos y pies</option>
        <option value='8'>Micro exfoliación facial con punta de diamante</option>
        <option value='9'>Limpieza facial profunda + Hidratación</option>
        <option value='10'>Crio frecuencia facial con efecto lifting</option>
        <option value='11'>VelaSlim</option>
        <option value='12'>DermoHealth</option>
        <option value='13'>Crio frecuencia corporal con efecto lifting</option>
        <option value='14'>Ultracavitación</option>
    </select>

    <label for='fecha'>Fecha y hora del turno*</label>
    <input type='datetime-local' id='fecha2' name='fechas[]' required='required' style='max-width: 100%; width: 100%'> `
    
    contenedorServicios.insertBefore(divContenedor,botonAgregar);
}