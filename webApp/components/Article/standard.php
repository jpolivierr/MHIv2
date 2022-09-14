
<?php 
   if(!function_exists("empowerArticle")){
    function empowerArticle(){
        return array(
        "image" => "Media/images/students.png",
        "section" => array(
                            "class"=>"av-article-v1",
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

<?php 
   if(!function_exists("missionArticle")){
    function missionArticle(){
        return array(
        "image" => "Media/images/students.png",
        "section" => array(
                            "class"=>"av-article-v1 columns-reverse",
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


<?php (function($props){ ob_start(); ?>
 <article 
        class="<?php echo $props["section"]["class"] ?>"
        <?php echo $props["section"]["custom"] ?>
        >
        <div
            class="<?php echo $props["container"]["class"] ?>"
            <?php echo $props["container"]["custom"] ?>
          >
            <?php mount("Section","standard","missionSection") ?>
                <figure >
                   <img src="<?php echo $props["image"] ?>" ?>
                </figure>
            
        </div>
        
    </article>
    
 <?php echo ob_get_clean(); })(mapProps($props)); ?>
