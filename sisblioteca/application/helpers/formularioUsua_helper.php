<?php


   function miForm($id){
      $out='<form action="http://localhost/sisbliotecag6/sisblioteca/ctrlusuarios/guardar?id='.$id.'" 
         class="form-inline" method="post">';
      return $out;
   }
   function miform2(){
      $out='</form>';
      return $out;
      
   }


   function miinput($type, $id,$label,$placeholder,$required='',$value,$tamaño,$col){

      $out= '<div class="form-group col-md-'.$col.' mb-4 was-validated  ">';
      $out.= '<label for="'.$id.'">'.$label.'</label>';
      $out.= '<input maxlength="'.$tamaño.'" minlength="'.$tamaño.'" type="'.$type.'" class="form-control " id="'.$id.'" name="'.$id.'" 
              value= "'.$value.'"placeholder="'.$placeholder.'" '.$required.'>';

      $out.= '</div>';
      

      return $out;
   }


   function miButon($class,$nombre){
      $out='<button type="submit" class="'.$class.'" >'.$nombre.'</button>';
      return $out;
   }
   
?>