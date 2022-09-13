<?php
if(!function_exists("navLinks")){
    function navLinks(){
        return array(
                        "home" => array(
                            "link" => "/",
                            "class" => "active",
                            "custom" => ""
                                ),
                        "about" => array(
                            "link" => "/about",
                            "class" => "",
                            "custom" => ""
                        ),
                        "Our Progress" => array(
                            "link" => "/progress",
                            "class" => "",
                            "custom" => ""
                        ),
                        "contact" => array(
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
                class="<?php echo $value["class"] ?>"
                <?php echo $value["custom"] ?>
                ><?php echo $key ?>
            </li>
            </a>
        <?php endforeach ?>
    </ul>
<?php echo ob_get_clean(); })(mapProps($props));?>

