function controlarFiltroIdentificacion(){
    if(document.getElementById("cbIdentificacion").checked){
        document.getElementById("identificacionPaciente").readOnly = false;
        document.getElementById("estadoCita").value = "2";
        document.getElementById("estadoCita").disabled = true;
    }
    else{
        document.getElementById("identificacionPaciente").readOnly = true;
        document.getElementById("estadoCita").disabled = false;
    }
}

function controlarFiltroFecha(){
    if(document.getElementById("cbFecha").checked){
        document.getElementById("fechaCitas").readOnly = false;
    }
    else{
        document.getElementById("fechaCitas").readOnly = true;
    }
}