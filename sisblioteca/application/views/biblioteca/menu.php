<?php 
 include("estilos.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link" href="index.php">
             </a>
      </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url() ?>">INICIO&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
          <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/confidencial') ?>">INFORMACION CONFIDENCIAL&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
          <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/usuarios') ?>">USUARIOS&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('biblioteca/salir') ?>">LOGOUT&nbsp;&nbsp;</a>
        </li>

      </ul>
      
    </div>
  
</nav>






<<<<<<< HEAD
    <ul>
       <li><a href="<?php echo base_url() ?>">inicio</a></li>
       <li><a href="<?php echo base_url('Welcome/confidencial') ?>">informacion confidencial</a></li>
       <li><a href="<?php echo base_url('Welcome/usuarios') ?>">usuarios</a></li>
       <li><a href="<?php echo base_url('biblioteca/salir') ?>">logout</a></li>
       <li><a href="<?php echo base_url('Welcome/Registro') ?>">registro</a></li>
    </ul>
=======
>>>>>>> 0f7912eb48052e1e25521ab2ff5d5810fce7d9d5
