function valida_envia(){
    //valido el nombre
    if (document.form.primer_nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.nombre.focus()
           return 0;
    }
    if (document.form.apellidos.value.length==0){
        alert("Tiene que escribir sus apellidos");
        document.form.descripcion.focus()
        return 0;
 }
 if (document.form.direccion.value.length==0){
    alert("Tiene que escribir su direccion");
    document.form.correo.focus()
    return 0;
}
    document.fvalida.submit();
}
function valida_envia2(){
    //valido el nombre
    if (document.form.nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.nombre.focus()
           return 0;
    }
    if (document.form.descripcion.value.length==0){
        alert("Tiene que escribir una descripcion");
        document.form.descripcion.focus()
        return 0;
 }
 if (document.form.correo.value.length==0){
    alert("Tiene que escribir su correo");
    document.form.correo.focus()
    return 0;
}
    document.fvalida2.submit();
}
function valida_envia3(){
    //valido el nombre
    if (document.form.nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.nombre.focus()
           return 0;
    }
    if (document.form.descripcion.value.length==0){
        alert("Tiene que escribir una descripcion");
        document.form.descripcion.focus()
        return 0;
 }
 if (document.form.correo.value.length==0){
    alert("Tiene que escribir su correo");
    document.form.correo.focus()
    return 0;
}
    document.fvalida3.submit();
}

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
    
