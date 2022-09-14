<?php
    
    require_once dirname(__DIR__)."/function.php";
     require_once dirname(__DIR__)."/system.php";


    addHeader("header", "MHI");

     mount("Navigation","navigation", "navContent");
     mount("Article","standard", "empowerArticle");
     mount("Article","standard", "missionArticle");



    ?>

    </body>
    </html>