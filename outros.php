<?php

include_once "public/outros/paginas/includes/header.php";

$paginas = isset($_GET['pg']);

if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "public/outros/paginas/inicial.php";
            break;

        default:
            # code...
            break;
    }
} else{
    include_once "public/outros/paginas/inicial.php";
}

include_once "public/outros/paginas/includes/footer.php";