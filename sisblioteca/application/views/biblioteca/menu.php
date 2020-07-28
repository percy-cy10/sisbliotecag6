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
          <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabusuarios') ?>">TABUSUARIOS&nbsp;&nbsp;</a>
        </li>
       
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/ejemplar') ?>">EJEMPLAR&nbsp;&nbsp;</a>
        </li>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabejemplar') ?>">TBEJEMPLAR&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/categoria') ?>">CATEGORIA&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabcategoria') ?>">TBCATEGORIA&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('biblioteca/salir') ?>">LOGOUT&nbsp;&nbsp;</a>

    </li>

        </li>

      </ul>
      
    </div>
  
</nav>

