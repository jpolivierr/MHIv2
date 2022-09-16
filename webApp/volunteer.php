<?php

    require_once dirname(__DIR__)."/function.php";
    require_once dirname(__DIR__)."/system.php";
     addHeader("header", "MHI");

     mount("Navigation","header", "navContent");
     mount("Article","volunteer", null);
     mount("Article","social", null);
     mount("Navigation","footer", null);
     mount("Article","copyright", null);

     addFooter("footer");