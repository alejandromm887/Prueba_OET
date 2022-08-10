function valida_envia(){
    
    if (document.form.numero_cedula.value.length==0){
        alert("Tiene que escribir su numero cedula");
        document.form.numero_cedula.focus()
        return 0;
    }
    if (document.form.primer_nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.primer_nombre.focus()
           return 0;
    }
    if (document.form.apellidos.value.length==0){
        alert("Tiene que escribir sus apellidos");
        document.form.apellidos.focus()
        return 0;
    }
    if (document.form.direccion.value.length==0){
        alert("Tiene que escribir su direccion");
        document.form.direccion.focus()
        return 0;
    }
    if (document.form.telefono.value.length==0){
        alert("Tiene que escribir su telefono");
        document.form.telefono.focus()
        return 0;
    }
    if (document.form.ciudad.value.length==0){
        alert("Tiene que escribir su ciudad");
        document.form.ciudad.focus()
        return 0;
    }
    if (document.form.vehiculo.value.length==0){
        alert("Tiene que escribir la placa del vehiculo");
        document.form.vehiculo.focus()
        return 0;
    }
    document.fvalida.submit();
}
function valida_envia2(){

    if (document.form.numerocedula.value.length==0){
        alert("Tiene que escribir su numero cedula");
        document.form.numerocedula.focus()
        return 0;
    }
    if (document.form.primer_nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.primer_nombre.focus()
           return 0;
    }
    if (document.form.apellidos.value.length==0){
        alert("Tiene que escribir sus apellidos");
        document.form.apellidos.focus()
        return 0;
    }
    if (document.form.direccion.value.length==0){
        alert("Tiene que escribir su direccion");
        document.form.direccion.focus()
        return 0;
    }
    if (document.form.telefono.value.length==0){
        alert("Tiene que escribir su telefono");
        document.form.telefono.focus()
        return 0;
    }
    if (document.form.ciudad.value.length==0){
        alert("Tiene que escribir su ciudad");
        document.form.ciudad.focus()
        return 0;
    }
    if (document.form.vehiculo.value.length==0){
        alert("Tiene que escribir la placa del vehiculo");
        document.form.vehiculo.focus()
        return 0;
    }
    document.fvalida2.submit();
}
function valida_envia3(){
    //valido el nombre
    if (document.form.placa.value.length==0){
        alert("Tiene que escribir la placa del vehículo");
        document.form.placa.focus()
        return 0;
    }
    if (document.form.color.value.length==0){
        alert("Tiene que escribir el color del vehículo");
        document.form.color.focus()
        return 0;
    }
    if (document.form.marca.value.length==0){
        alert("Tiene que escribir la marca");
        document.form.marca.focus()
        return 0;
    }
    if (document.form.tipo_vehiculo.value.length==0){
        alert("Tiene que seleccionar el tipo de vehículo");
        document.form.tipo_vehiculo.focus()
        return 0;
    }
    
    document.fvalida3.submit();
}
// accion mostrar u ocultar depende del boton que se elija
window.addEventListener('load', function() {
    var z = document.getElementById("id2");
    z.style.display = "none";
})
function b1() {
    var x = document.getElementById("id1");
    var z = document.getElementById("id2");
    var y = document.getElementById("id3");
    x.style.display = "block";
    z.style.display = "none";
    y.style.display = "none";
    
    
    
}
function b2() {
    var x = document.getElementById("id1");
    var z = document.getElementById("id2");
    var y = document.getElementById("id3");
    
    x.style.display = "none";
    z.style.display = "block";
    y.style.display = "none";

}
function b3() {
    var x = document.getElementById("id1");
    var z = document.getElementById("id2");
    var y = document.getElementById("id3");
    
    x.style.display = "none";
    z.style.display = "none";
    y.style.display = "block";
    
}
    
