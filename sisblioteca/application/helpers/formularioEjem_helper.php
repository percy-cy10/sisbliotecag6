<?php


   function miinput($type, $id,$label,$placeholder,$required='',$tamaño,$col){
         $out= '<div class="form-group col-md-'.$col.' mb-4 was-validated ">';
         $out.= '<label for="'.$id.'">'.$label.'</label>';
         $out.= '<input type="'.$type.'" maxlength="'.$tamaño.'" minlength="'.$tamaño.'" class="form-control" id="'.$id.'" name="'.$id.'" 
                  placeholder="'.$placeholder.'" '.$required.'> ';
         $out.= '</div>';
         return $out;
      }

   function miSelect($id,$label,$registro){
         $out= '<div class="form-group col-md-3 mb-4 was-validated ">';
         $out.= '<label for="'.$id.'">'.$label.'</label>';
         $out.= '<select class="form-control" name="'.$id.'" id="'.$id.'">';
         foreach ($registro as $valu){
            $out.=   '<option value="'.$valu->cate_id.'">'.$valu->cate_nombre.'</option>';
         }
         $out.= '</select></br>';
         $out.= '</div>';

         return $out;
   }



   function miButon($class,$nombre){
      $out='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
      $out.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
      $out.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
      $out.='<div class="form-group row">';
      $out.= '<div class="col-sm-10">';
      $out.='<button type="submit" class="'.$class.'" >'.$nombre.'</button>';
      $out.='</div>';
      $out.='</div>';
      return $out;
   }

?>