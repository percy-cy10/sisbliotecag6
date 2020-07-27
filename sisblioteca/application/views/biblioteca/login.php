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
<<<<<<< HEAD
    <h1 style="text-align: center;color: blue">BIBLIOTECA GRUPO 6</h1>
    <div class="form-container">
  <div class="card" style="width:30%;float: left;left: 36%">
  <div class="card-body">
        <form action="<?php echo base_url('biblioteca/evaluar')?>" method="post">
          <p class="text-center" style="margin-top: 17px;">
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width=100px height=100px>
         </p>
         <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>








            <label for="usuario">USUARIO:</label>
            <input type="text" name="usuario" class="form-control" placeholder="Enter su usuario" >
            <br>




           <label for="password">CONTRASEÑA</label>
           <input type="password" name="password" class="form-control password1" value="" placeholder="imgrese se contraseña" />
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
          <a href="#">
            <button class="btn btn-info" type="submit"> Registrarse </button>
          </a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input class="btn btn-success" type="submit" value="ingresar"> 

           </form>
          
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
password = document.querySelector('.password1');

if ( password.type === "text" ) {
password1.type = "password"
showPassword.classList.remove('fa-eye-slash');
} else {
password.type = "text"
showPassword.classList.toggle("fa-eye-slash");
}
})
});
</script>
=======
    <form action="<?php echo base_url('biblioteca/evaluar')?>" method="post">
        <p class="text-center" style="margin-top: 17px;">
           <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eleconomista.es%2Fstatus%2Fnoticias%2F10083026%2F09%2F19%2FLa-biblioteca-cambia-de-rol-de-los-libros-a-la-formacion.html&psig=AOvVaw1dmUJ5sr6Fyso63kyePE7R&ust=1595881644771000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPiW48rg6-oCFQAAAAAdAAAAABAD" width="100" height="100">
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>
       <p>
         <label for="usuario">usuario</label>
         <input type="text" name="usuario">
       </p>
       <p>
         <label for="password">password</label>
         <input type="password" name="password">
       </p>
          <div class="group-material">
              <select class="material-control-login" required >
                  <option value="" disabled="" selected="">Tipo de usuario</option>
                  <option value="Student">Estudiante</option>
                  <option value="Teacher">Docente</option>
                  <option value="Admin">Administrador</option>
              </select>
          </div>
       <p>
         <input class="btn btn-success" type="submit" value="ingresar">
       </p>
    </form>
            <a href="registro.php">
            <button class="btn btn-success" type="submit"><i class="zmdi zmdi-arrow-left"></i> &nbsp; Registrarse </button>
          </a>
    </div>    
>>>>>>> 127dda328b3d57b0d03b62bee5357238e0b0e22b
</body>
</html>