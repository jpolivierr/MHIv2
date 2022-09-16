

<?php

  if(!function_exists("activeStyle")){
    function activeStyle($link){
        $uri = $_SERVER['REQUEST_URI'];
        if($link !== "/"){
            if(strpos($uri,"$link") !== false){
                echo "av-active";
            }
        }else if($uri === "/"){
             echo "av-active" ;
        }
    }
  }
   
?>
<?php
if(!function_exists("navLinks")){
    function navLinks(){
        return array(
                        "Home" => array(
                            "link" => "/",
                            "class" => "",
                            "custom" => ""
                                ),
                        "About MHI" => array(
                            "link" => "/about",
                            "class" => "",
                            "custom" => ""
                        ),
                        "FAQ" => array(
                            "link" => "/faq",
                            "class" => "",
                            "custom" => ""
                        ),
                        "Volunteer" => array(
                            "link" => "/volunteer",
                            "class" => "",
                            "custom" => ""
                        ),
                        "Contact Us" => array(
                            "link" => "/contact",
                            "class" => "",
                            "custom" => ""
                            )
                        );
    }
}
?>

<?php (function ($props){ ob_start(); ?>
    <ul>
        <?php foreach($props as $key => $value) :?>
            <a href="<?php echo $value["link"] ?>">
            <li 
                class="<?php echo $value["class"]?> <?php activeStyle($value["link"]) ?>"
                <?php echo $value["custom"] ?>
                ><?php echo $key ?>
            </li>
            </a>
        <?php endforeach ?>
    </ul>
<?php echo ob_get_clean(); })(mapProps($props));?>

