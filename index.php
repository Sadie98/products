<?php

session_start();

require_once("config/core.php");
include("commonTemplate.php");

switch ($_GET['option']) {
    case "page":
        include("pages/page.php");
        break;
    default:
        include("pages/home.php");
        break;
}

