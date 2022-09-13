<?php if(!function_exists("mainBtnProps")){
    function mainBtnProps($label, $class, $custom, $link){
        return array(
               "label"=>$label,
               "link" => $link,
               "class" => $class,
               "custom" => $custom
             );
          }
   }
?>