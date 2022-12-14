
<?php 
   if(!function_exists("navContent")){
    function navContent(){
        return array(
        "logo" => "Media/images/mhilogos.png",
        "section" => array(
                            "class"=>"av-header-v1",
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
                    <a href="/">
                        <img src="<?php echo $props["logo"] ?>" ?>
                    </a>
                </figure>
                <nav>
                   <?php mount("List","list","navLinks")?>
                </nav>
                <section>
                    <?php mount("Button","button",["Donate","https://interland3.donorperfect.net/weblink/weblink.aspx?name=E355232&id=2","main-btn","id='donate-btn'"]) ?>
                </section>
                <menu>
                    <div></div>
                    <div></div>
                    <div></div>
                </menu>
            </article>
        </header> 

<?php echo ob_get_clean(); })(mapProps($props)); ?> 

