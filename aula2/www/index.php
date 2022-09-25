<?php

include_once("pages/header.php");

if (isset($_GET["modulo"])) {
    $modulo = $_GET["modulo"];
} else {
    $modulo = "home";
}

switch ($modulo) {
    case 'home':
        include_once("pages/home.php"); 
        break;
    case 'sobre':
        include_once("pages/sobre.php");
        break;
    case 'produtos':
        include_once("pages/produtos.php");
        break;
    case 'contato':
        include_once("pages/contato.php");
        break;
    default:
        include_once("pages/home.php");
        break;
}

include_once("pages/footer.php");
