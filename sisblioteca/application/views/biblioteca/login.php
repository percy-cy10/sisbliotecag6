<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio</title>
  <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style type="text/css">
    .password-icon {
    float: right;
    position: relative;
    margin: -25px 10px 0 0;
    cursor: pointer;
  }
    
  </style>

<body class="full-cover-background" style="background-image:url(https://libreriaesoterica.net/wp-content/uploads/2019/12/biblioteca.jpg);">
  <br>
  <div class="container">
    <h1 style="color: blue;text-align: center;">BIBLIOTECA GRUPO 6</h1>
  <div class="card" style="width:30%;float: left;left: 36%">
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
                <select class="material-control-login" required >
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Student">Estudiante</option>
                    <option value="Teacher">Docente</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div><br>
         <p>
           <input class="btn btn-success" type="submit" value="ingresar">
          
          </p>
      </form>
          <a href="#" style="top: 86%;position: absolute;float: left;left: 60%">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            REGISTARSE</button>
          </a>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">REGISTARASE</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="card" style="width:400px;">
                <div class="card-body">
                </div>
              </div>
                <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="register-form-link">Registrar</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form name="registro" id="register-form" action="<?php echo base_url();?>ctrlusuarios/guardar" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="usernamereg" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="namereg" id="username" tabindex="1" class="form-control" placeholder="Nombre" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="lastnamereg" id="username" tabindex="1" class="form-control" placeholder="Apellido" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="passwordreg" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-passwordreg" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="btninicio" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>








                  <header class="container " >
                        <br>
                        <div class="card container "style="width: 100%;height: auto;">
                          <div class="card-body">

                          <form method="post"  action="<?php echo base_url();?>ctrlusuarios/guardar" >
                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">LOGIN</span>
                            </div>
                            <input type="text" class="form-control" name="login" placeholder="Escriba su login" required >
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">PASSWORD</span>
                            </div>
                            <input type="password" class="form-control" name="password">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">CODIGO</span>
                            </div>
                            <input type="text" class="form-control" name="codigo">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">NOMBRES</span>
                            </div>
                            <input type="text" class="form-control" name="nombres">
                          </div>
                        <div class="input-group mb-3 input-group-lg">
                        <div class="input-group-prepend">
                              <span class="input-group-text">APELLIDOS</span>
                            </div>
                            <input type="text" class="form-control" name="apellidos">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">E-MAIL</span>
                            </div>
                            <input type="email" class="form-control" name="correo">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">DIRECCION</span>
                            </div>
                            <input type="text" class="form-control" name="direccion">
                          </div>
                          <div class="input-group mb-3 input-group-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">TELEFONO</span>
                            </div>
                            <input type="number" class="form-control" name="telefono">
                          </div>
                          <button  class="btn btn-success" type="submit">ENVIAR</button>
                        </form>

                          </div>
                        </div>
                    </header>
              
              <!-- Modal footer -->
              <div class="modal-footer">
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
        alert('Debes introducir tu clave en los dos campos.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.length < caract_longitud) {
        alert('Tu clave debe constar de ' + caract_longitud + ' carácteres.');
        //document.registro
        e.preventDefault();
        return false;
      }
      if (cla1.indexOf(caract_invalido) > -1) {
        alert("Las claves no pueden contener espacios");
        //document.registro
        e.preventDefault();
        return false;
      } else {
        if (cla1 != cla2) {
          alert("Las claves introducidas no son iguales");
          //document.registro
          e.preventDefault();
          return false;
        } else {
          //$('#register-form').trigger('submit');
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