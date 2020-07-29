<?php 
 include("estilos.php");

  $posicion=$this->session->userdata('veri'); 
  
?>
<link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
<div >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link" href="index.php">
             </a>
      </nav>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url() ?>"><i class="fas fa-home fa-lg"></i> INICIO&nbsp;&nbsp;</a>
        </li>


        <?php if($posicion==2):?>
         <li class="nav-item active">
          <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabusuarios') ?>"><i class="fas fa-users fa-lg"></i> USUARIOS&nbsp;&nbsp;</a>
         </li>
       <?php endif;?>

       
      
      <?php if($posicion==2):?>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/ejemplar') ?>"> <i class="fas fa-book fa-lg"></i> EJEMPLAR&nbsp;&nbsp;</a>
        </li>
      <?php endif;?>

        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabejemplar') ?>"><i class="fas fa-books fa-lg"></i> EJEMPLARES&nbsp;&nbsp;</a>
        </li>
        <?php if($posicion==2):?>
        <li class="nav-item active">

            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/categoria') ?>"><i class="fas fa-send-back fa-lg"></i> CATEGORIA&nbsp;&nbsp;</a>

        </li>
        <?php endif;?>
    

      <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabcategoria') ?>"><i class="fas fa-sort-amount-up-alt fa-lg"></i> CATEGORIAS&nbsp;&nbsp;</a>
           

        <?php if($posicion==1):?>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Biblioteca/mostrar') ?>"><i class="far fa-info-circle fa-lg"></i> INFORMACION PERSONAL&nbsp;&nbsp;</a>

        </li>
        <?php endif;?>


        
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/buscar') ?>"><i class="far fa-info-circle fa-lg"></i>BUSCAR&nbsp;&nbsp;</a>

        </li>
     

        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('biblioteca/salir') ?>"> <i class="fas fa-sign-out-alt fa-lg"></i> SALIR&nbsp;&nbsp;</a>

        <li class="nav-item active" >
            <a class="flex-sm-fill text-sm-center nav-link " style="float: right;right: 7%;position: absolute;"href="<?php echo base_url('biblioteca/salir') ?>"> <i class="fas fa-sign-out-alt fa-lg"></i> CERRAR SECCION&nbsp;&nbsp;</a>


        </li>

       

      </ul>
      
    </div>
  
</nav>
</div>

