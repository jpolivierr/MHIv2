
<?php 
   if(!function_exists("navContent")){
    function navContent(){
        return array(
        "logo" => "Media/images/logo.png",
        "section" => array(
                            "class"=>"av-header-v1 border-bottom",
                            "custom"=>""
                           ),
        "container" => array(
                            "class"=>"container",
                            "custom"=>""
                           )
             );
          }
   }
 ?>

<?php (function($props) { ob_start() ;?>
        <header 
                 class="<?php echo $props["section"]["class"] ?>"
                 <?php echo $props["section"]["custom"] ?>
                 >
            <article 
                  class="<?php echo $props["container"]["class"] ?>"
                  <?php echo $props["container"]["custom"] ?>
                  >
                <figure>
                    <img src="<?php echo $props["logo"] ?>" ?>
                </figure>
                <nav>
                   <?php mount("List","list","navLinks")?>
                </nav>
                <section>
                    <?php mount("Button","button",["Donate","/donate","main-btn",null]) ?>
                </section>
                <menu>
                    <div></div>
                    <div></div>
                    <div></div>
                </menu>
            </article>
        </header> 

<?php echo ob_get_clean(); })(mapProps($props)); ?> 

