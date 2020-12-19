<?php

session_start();

require_once("config/core.php");
include("commonTemplate.php");

switch ($_GET['page']) {
    case "all":
        include("pages/all.php");
        break;
    case "add":
        include("pages/add.php");
        break;
    case "one":
        include("pages/one.php");
        break;
    default:
        include("pages/home.php");
        break;
}

