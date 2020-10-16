
<?php 
    $posicion=$this->session->userdata('veri'); 
    include('estilos.php');
    include("estilosTab.php");
    $this->load->view('biblioteca/header');
	$this->load->view('biblioteca/menu');
	$this->load->view('biblioteca/footer');
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataTable Responsive</title>
    
    <script type="text/javascript" src="../datatable/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatable/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../datatable/datatable.js"></script>
    <link rel="stylesheet" href="../datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../datatable/css/responsive.dataTables.min.css">

</head>


<body>

<div class="container">
  <div class=" col-sm-8.2 p-3 bg-white ">
     <h1 class="text-warning text-center font-weight-bold">LISTA DE EJEMPLARES</h1>
           <table id="ejemplar_list" class="table table-active display responsive nowrap" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>EDITORIAL</th>
                        <th>PAGINAS</th>
                        <th>ISBN</th>
                        <th>IDIOMA</th>
                        <th>PORTADA</th>
                        <th>RESUMEM</th>
                        <th>CATE_ID</th>
                        <th>AÑO</th>
                        <?php if($posicion==2):?>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                            <th>IMPRIMIR</th>
                        <?php endif;?>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
    </div>
</div>
  
<script>

    $('#ejemplar_list').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>ctrlejemplar/datosdeejemplar",
            type : 'POST'
        },     
    });
</script>

 