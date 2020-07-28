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

   <img src="data:image/jpeg;base64,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" width="120" height="120"  class="rounded float-left" id="img">
          <img src="data:image/jpeg;base64,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" width="120" height="120"  class="rounded float-right" id="img1" >



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