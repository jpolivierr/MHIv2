<?php if(!function_exists("mainBtnProps")){
    function mainBtnProps($props){

      $btnProps = array(
        "label"=>$props[0],
        "link" => $props[1],
        "class" => $props[2],
        "custom" => $props[3]
      );
        return $btnProps;
   }
  }
?>

<?php (function($props) { ob_start();?>
        <a href="<?php echo $props["link"] ?>">
          <button 
             class="<?php echo $props["class"]?>"
             <?php echo $props["custom"]?>
          >
            <?php echo $props["label"] ?>
        </button>   
        </a> 

<?php echo ob_get_clean(); })(mainBtnProps($props)); ?>