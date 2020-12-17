function controlarFiltroIdentificacion(){
    if(document.getElementById("cbIdentificacion").checked){
        document.getElementById("identificacionPaciente").readOnly = false;
    }
    else{
        document.getElementById("identificacionPaciente").readOnly = true;
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