<?php 
   
   if(!function_exists("navContent")){
    function navContent(){
        return array(
        "logo" => "Media/images/logo.png",
        "section" => array(
                            "class"=>"",
                            "custom"=>""
                           ),
        "container" => array(
                            "class"=>"container",
                            "custom"=>""
                           ),                   
        "navLinks" => array(
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
                        "contact" => array(
                            "link" => "/contact",
                            "class" => "",
                            "custom" => ""
                            )
                        )
             );
          }
   }
?>