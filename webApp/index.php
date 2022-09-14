<?php
    
    require_once dirname(__DIR__)."/function.php";
     require_once dirname(__DIR__)."/system.php";


    addHeader("header", "MHI");

     mount("Navigation","navigation", "navContent");
     mount("Article","empower", null);
     mount("Article","mission", null);
     mount("Article","pledge", null);
     mount("Article","social", null);



    ?>

    </body>
    </html>