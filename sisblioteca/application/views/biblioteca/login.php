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
                  <header class="container " >
                        <br>
                        <div class="card container "style="width: 100%;height: auto;">
                          <div class="card-body">

                          <form method="post"  action="<?php echo base_url();?>ctrlusuarios/guardar"  >
                          <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">LOGIN</span>
                            </div>
                            <input type="text" class="form-control" name="login">
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
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>