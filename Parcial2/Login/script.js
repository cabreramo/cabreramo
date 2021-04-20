function validar(){
 var usuario = document.getElementById("usuario").value;
 var contrasena = document.getElementById("contrasena").value;

 if(usuario="admin" && contrasena=="1234"){
    alert("LOGEADO");
 }else{
     alert("error");
 }
}