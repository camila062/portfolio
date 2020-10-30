<?php

//Header
include_once "public/curriculo/paginas/includes/header.php";

//Páginas

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "public/curriculo/paginas/inicial.php";
            break;
        case 'educacao':
            include_once "public/curriculo/paginas/educacao.php";
            break;
        case 'empresa1':
            include_once "public/curriculo/paginas/empresa1.php";
            break;
        case 'empresa2':
            include_once "public/curriculo/paginas/empresa2.php";
            break;
        case 'empresa3':
            include_once "public/curriculo/paginas/empresa3.php";
            break;

        default:
            # code...
            break;
    }
} else {
    include_once "public/curriculo/paginas/inicial.php";
}



//Footer
include_once "public/curriculo/paginas/includes/footer.php";
