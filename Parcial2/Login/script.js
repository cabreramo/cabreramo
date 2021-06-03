// function validar(){
//  var usuario = document.getElementById("usuario").value;
//  var contrasena = document.getElementById("contrasena").value;

//  if(usuario="admin" && contrasena=="1234"){
//     alert("LOGEADO");
//  }else{
//      alert("error");
//  }
// }


// <!-- JQUERY -->
 $(document).ready(function()
 {
                    $("#validar").click(function(){
                        var usuario=$('#usuario').val();
                        var contrasena=$('#contrasena').val();

                     if( usuario=='admin' && contrasena=='1234') {
                        $('#myModal').modal('show');                                         
                       }
                     else {
                        $('#myModal').modal('show');
                        $('.modal-body').html("CONTRASEÑA INCORRECTA");

                                         }
              
             });
     
         });