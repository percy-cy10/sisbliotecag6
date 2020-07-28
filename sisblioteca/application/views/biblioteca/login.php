<?php
  include('estilos.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">

  <style type="text/css">
    .password-icon {
    float: right;
    position: relative;
    margin: -25px 10px 0 0;
    cursor: pointer;
  }
  h1{
    margin:0 0 0 5%;
  }
    
  </style>

<body class="full-cover-background" style="background-image:url(https://libreriaesoterica.net/wp-content/uploads/2019/12/biblioteca.jpg);">
  <br>
  <div class="container">
    <h1 style="color: red;text-align: center;">BIBLIOTECA GRUPO 6</h1>
  <div class="card" style="width:35%;float: left;left: 35%">
  <div class="card-body">
        <form action="<?php echo base_url('Biblioteca/evaluar')?>" method="post">
          <p class="text-center" style="margin-top: 17px;">
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width=100px height=100px>
         </p>
         <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>








            <label for="usuario">USUARIO:</label>
            <input type="text" name="usuario" class="form-control" placeholder="Enter su usuario" required >

<br>

           <label for="password">CONTRASEÑA</label>
           <input type="password" name="password" class="form-control password1" value="" placeholder="ingrese se contraseña" required/>
            <span class="fa fa-fw fa-eye password-icon show-password"></span>

<br>
            <div class="group-material">
                <select class="form-control" required >
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="estudiante">Estudiante</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div><br>
         <p>
           <input class="btn btn-success" type="submit" value="ingresar">
          
          </p>
      </form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"style="top: 86%;position: absolute;float: left;left: 60%">
            REGISTARSE</button>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">REGISTARASE</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
                <div class="container">

                <form name="registro" id="register-form" action="<?php echo base_url();?>ctrlusuarios/guardar?id=0" method="post" role="form" style="display: block;">
                      <div class="card container "style="width: 100%;height: auto;">
                          <div class="card-body">


                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usua_login" placeholder="Escriba su login" required >
                          </div>
                          <div>
                            <p>Tu contraseña debe constar de 6 caracteres</p>
                          </div>

                                    <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>                                   
                                         <input type="password" name="usua_password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                  </div>
                                  <div class="input-group mb-3 input-group-lg">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>                                   

                                          <input type="password" name="confirm-passwordreg" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña">
                                    </div>



                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-code"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usua_codigo" placeholder="INGRESE SU CODIGO">
                          </div>







                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control" name="usua_nombres" placeholder="NOMBRE">
                          </div>
                        <div class="input-group mb-3 input-group-lg">
                        <div class="input-group-prepend">
                              <span class="input-group-text">Surname</span>
                            </div>
                            <input type="text" class="form-control" name="usua_apellidos" placeholder="APELLIDO">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="usua_email" placeholder="EMAIL@Ejemplo.com">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-address-card"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usua_direccion" placeholder="DIRECCION">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="usua_telefono" placeholder="TELEFONO/CELULAR">
                          </div>
                          
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">Esadmin</span>
                            </div>
                            <input type="text" class="form-control" name="usua_esadmin"placeholder="ESADMIN">
                          </div>
                              <button  class="btn btn-success" type="submit">ENVIAR</button>
                </form>
   </div>




              
              <!-- Modal footer -->
              <div class="modal-footer" style="top: 90%;position: absolute;float: left;left: 75%">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
     
     <script>
window.addEventListener("load", function() {
// icono para poder interaccionar con el elemento
showPassword = document.querySelector('.show-password');

showPassword.addEventListener('click', () => {
// elementos input de tipo password
password1 = document.querySelector('.password1');
if ( password1.type === "text" ) {
password1.type = "password"
showPassword.classList.remove('fa-eye-slash');
} else {
password1.type = "text"
showPassword.classList.toggle("fa-eye-slash");
}
})
});



//validar contraseña

</script>

  <script type="text/javascript">
    function validar_clave(e) {

      var caract_invalido = " ";
      var caract_longitud = 6;
      var cla1 = $('#register-form #password').val();
      var cla2 = $('#register-form #confirm-password').val();
      if (cla1 == '' || cla2 == '') {
        alert('Debes introducir tu contraseña en los dos campos.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.length < caract_longitud) {
        alert('Tu contraseña debe constar de ' + caract_longitud + ' carácteres.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.indexOf(caract_invalido) > -1) {
        alert("Las contraseñas no pueden contener espacios");
        //document.registro
        e.preventDefault();
        return false;
      } else {
        if (cla1 != cla2) {
          alert("Las contraseñas introducidas no son iguales");
          //document.registro
          e.preventDefault();
          return false;
        } else {
          //$('#register-form').trigger('submit');
          alert("Estimado usuario sus datos fueron registardos satisfactoriamente y seran administrados por el ADMIN  .................... Acepta los terminos y condiciones..");
          return true;
        }
      }
    }

    $(function() {

      $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });
      $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });

      $('#register-form').submit(function(e) {
        validar_clave(e);
      });
    });
  </script>
</body>
</html>