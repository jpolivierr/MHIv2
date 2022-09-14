<?php 
   if(!function_exists("empowerSection")){
    function empowerSection(){
        return array(
        "section" => array(
                            "class"=>"av-article-v1 columns-reverse",
                            "custom"=>""
                           ),
        "h2" => array(
                            "content"=>"Empower
                            With Education",
                            "class"=>"",
                            "custom"=>""
        ),
        "h3" => array(
            "content"=>"Support our students in Haiti",
            "class"=>"",
            "custom"=>""
        ),
        "p" => array(
            "content"=>"We are a nonprofit organization dedicated to provide not only an educational pathways for the youth in Haiti but also to enrich their lives and communities through training and education beyond school.",
            "class"=>"",
            "custom"=>""
        ),
             );
          }
   }
 ?>

<?php 
   if(!function_exists("missionSection")){
    function missionSection(){
        return array(
        "section" => array(
                            "class"=>"av-article-v1 columns-reverse",
                            "custom"=>""
                           ),
        "h2" => array(
                            "content"=>"Our Mission",
                            "class"=>"",
                            "custom"=>""
        ),
        "h3" => array(
            "content"=>"To educate and inspire",
            "class"=>"",
            "custom"=>""
        ),
        "p" => array(
            "content"=>"Our mission is to provide a free high quality academic and vocational education for Haitian children to empower them to attain self-sufficiency and to become leaders in their communities. Show your support by contributing to the cause.",
            "class"=>"",
            "custom"=>""
        ),
             );
          }
   }
 ?>

<?php (function($props){ ob_start(); ?>
              <section
                  class="<?php echo $props["section"]["class"] ?>"
                   <?php echo $props["section"]["custom"] ?>
               >
                    <h2
                        class="<?php echo $props["h2"]["class"] ?>"
                        <?php echo $props["h2"]["custom"] ?>
                    ><?php echo $props["h2"]["content"] ?></h2>

                    <h3
                    class="<?php echo $props["h3"]["class"] ?>"
                    <?php echo $props["h3"]["custom"] ?>
                     ><?php echo $props["h3"]["content"] ?></h3>

                    <p
                        class="<?php echo $props["p"]["class"] ?>"
                        <?php echo $props["p"]["custom"] ?>
                    ><?php echo $props["p"]["content"] ?>
                    </p>
                    <?php mount("Button","button",["Learn More","/about","main-btn",null])?>
                </section>
 <?php echo ob_get_clean(); })(mapProps($props)); ?>