<?php


   function miinput($type, $id,$label,$placeholder,$required=''){

      $out= '<div class="form-group  was-validated ">';
      $out.= '<label for="'.$id.'">'.$label.'</label>';
      $out.= '<input type="'.$type.'" class="form-control" id="'.$id.'" name="'.$id.'" 
               placeholder="'.$placeholder.'" '.$required.'> ';
      $out.= '</div>';
   
      return $out;
   }

   function miSelect($id,$label,$registro){

    $out= '<label for="'.$id.'">'.$label.'</label>';
    $out.= '<select class="form-control" name="'.$id.'" id="'.$id.'">';


    foreach ($registro as $valu){
       $out.=   '<option value="'.$valu->cate_id.'">'.$valu->cate_nombre.'</option>';
    }


    $out.= '</select>';

    return $out;
   }

   function miButon($class,$nombre){
      $out= '</br>';
      $out.='<button type="submit" class="'.$class.'" >'.$nombre.'</button>';
      return $out;
   }

?>