<?php

include_once "paginas/includes/header.php";

$paginas = isset($_GET['pg']);

if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
        case 'tecnologia':
            include_once "paginas/tecnologia.php";
            break;

        default:
            # code...
            break;
    }
} else{
    include_once "paginas/inicial.php";
}

include_once "paginas/includes/footer.php";