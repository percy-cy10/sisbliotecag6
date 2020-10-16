<?php 
 include("estilos.php");

  $posicion=$this->session->userdata('veri'); 
  
?>
<link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill  nav-link" href="index.php">
             </a>
      </nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="flex-sm-fill nav-link " href="<?php echo base_url() ?>"><i class="fas fa-home fa-lg"></i> INICIO&nbsp;&nbsp;</a>
      </li>
      <?php if($posicion==2):?>
         <li class="nav-item active">
          <a class="flex-sm-fill nav-link " href="<?php echo base_url('Welcome/tabusuarios') ?>"><i class="fas fa-users fa-lg"></i> USUARIOS&nbsp;&nbsp;</a>
         </li>
       <?php endif;?>
      

       <li class="nav-item dropdown active " style="text-color: white;">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" ><i class="fas fa-book fa-lg"></i>
LIBROS</a>
        <div class="dropdown-menu">
          <?php if($posicion==2):?>
            <a class="dropdown-item  " href="<?php echo base_url('Welcome/ejemplar') ?>"><i class="fas fa-book fa-lg" ></i> EJEMPLAR&nbsp;&nbsp;</a>
          <?php endif;?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item    " href="<?php echo base_url('Welcome/tabejemplar') ?>"><i class="fas fa-books fa-lg"></i> EJEMPLARES&nbsp;&nbsp;</a>
        </div>
      </li>
      
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" ><i class="fa fa-folder-open fa-lg"></i>&nbsp;CATEGORIA DE LIBROS</a>
        <div class="dropdown-menu">
          <?php if($posicion==2):?>
            <a class="dropdown-item" href="<?php echo base_url('Welcome/categoria') ?>"><i class="fas fa-send-back fa-lg"></i> CATEGORIA&nbsp;&nbsp;</a>
          <?php endif;?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('Welcome/tablacategoria') ?>"><i class="fas fa-sort-amount-up-alt fa-lg"></i> CATEGORIAS&nbsp;&nbsp;</a>
        </div>
      </li>







      <?php if($posicion==1):?>
      <li class="nav-item active">
      <a class="flex-sm-fill  nav-link " href="<?php echo base_url('Biblioteca/mostrar') ?>"><i class="far fa-info-circle fa-lg"></i> INFORMACION PERSONAL&nbsp;&nbsp;</a>
      </li>
      <?php endif;?>

      <li class="nav-item active">
          <a class="flex-sm-fill  nav-link " href="<?php echo base_url('Welcome/buscar') ?>"><i class="fal fa-search fa-lg"></i> BUSCAR&nbsp;&nbsp;</a>
      </li>

    
      <li class="nav-item active" style="right: 10%;position: absolute;">
          <a class="flex-sm-fill nav-link btn btn-outline-danger " href="<?php echo base_url('biblioteca/salir') ?>"><i class=" fas fa-sign-out-alt fa-lg"  ></i></a>  
      </li>
          
        

        
        
    </ul>
  </div>
</nav>

