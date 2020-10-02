<?php


   function miinput($type, $id,$label,$placeholder,$required=''){

      $out= '<div class="form-group  was-validated ">';
      $out.= '<label for="'.$id.'">'.$label.'</label>';
      $out.= '<input type="'.$type.'" class="form-control" id="'.$id.'" name="'.$id.'" 
              placeholder="'.$placeholder.'" '.$required.'> ';
      $out.= '</div>';
   

      return $out;
   }

   function miButon($class,$nombre){
      $out='<button type="submit" class="'.$class.'" >'.$nombre.'</button>';
      return $out;
   }
?>