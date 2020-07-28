<?php 
   include('estilos.php');
?>

<style>
 body{ 
     background-image:url('https://upload.wikimedia.org/wikipedia/commons/8/86/Portal_UNAP.jpg');
     background-position: center center;



background-repeat: no-repeat;


background-attachment: fixed;


background-size: cover;
    }
  .form-group{
       margin:0 0 0 27%;
       border-radius:1%;
  }

  #img{
    margin:0 0 0 5%;
  }
  #img1{
    margin:0 5% 0 0;
  }



</style>
<br><br>

<div class="container col-sm-7 shadow-lg p-2 mb-10 bg-white rounded">
   
		<h2 class="text-secondary  text-center font-weight-bold">Registro de Usuarios</h2>
    <br>


   <form method="post"  action="<?php echo base_url();?>ctrlejemplar/guardar" > 

<<<<<<< HEAD
  

=======
>>>>>>> 8de8b2671b4d08512887a0d226b8475c2294d374


        <div class="form-group col-md-6 ">
            <label for="" class="text-primary font-weight-bold ">titulo</label >
            <input type="text" class="form-control" name="titulo"  placeholder="titulo" >

            <div class="valid-feedback"><li class="fa fa-check"></li></div>
            <div class="invalid-feedback"><li class="fa fa-close"></li></div>
        </div>
        


        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">editorial</label>
            <input type="text" class="form-control" name="editorial"  placeholder="editorial" >
   
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">paginas</label>
            <input type="text" class="form-control" name="paginas" placeholder="paginas" >
        </div>


        
        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">isbn</label>
            <input type="text" class="form-control" name="isbn"  placeholder="isbn" >
        </div>


        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">idioma</label>
            <input type="text" class="form-control" id=""name="idioma"  placeholder="idioma" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">postada</label>
            <input type="text" class="form-control" id=""name="postada"  placeholder="postada" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">digital</label>
            <input type="text" class="form-control" id=""name="digital"  placeholder="digital" >     
        </div>
        
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">audio</label>
            <input type="text" class="form-control" id=""name="audio"  placeholder="audio" >     
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">resumen</label>
            <input type="text" class="form-control" id=""name="resumen"  placeholder="resumen" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">tipo_id</label>
            <input type="text" class="form-control" id=""name="tipo_id"  placeholder="tipo_id" >     
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">cate_id</label>
            <input type="text" class="form-control" id=""name="cate_id"  placeholder="cate_id" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">valoracion</label>
            <input type="text" class="form-control" id=""name="valoracion"  placeholder="valoracion" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">anio</label>
            <input type="text" class="form-control" id=""name="anio"  placeholder="anio" >     
        </div>
        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">prestamos</label>
            <input type="text" class="form-control" id=""name="prestamos"  placeholder="prestamos" >     
        </div>


        <br>
        <div class="text-center">
            <button  type="submit" class="btn btn-primary"> <li class="fa fa-save"> </li>&nbspGuardar</button>
        </div>
        
   </form>

</div>