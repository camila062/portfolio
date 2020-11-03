<?php

include_once "public/site/paginas/includes/header.php"; //HEADER



//PÁGINAS 

$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "public/site/paginas/inicial.php";
            break;
            case 'cadastro':
            include_once "public/site/paginas/cadastro.php";
            break;
            case 'contato':
            include_once "public/site/paginas/contato.php";
            break;
            case 'produtos':
            include_once "public/site/paginas/produtos.php";
            break;
            case 'sobre':
            include_once "public/site/paginas/sobre.php";
            break;
            case 'carrinho':
            include_once "public/site/paginas/carrinho.php";
            break;
            case 'confirmacao':
            include_once "public/site/paginas/confirmacao.php";
            break;
        
        default:
            # code...
            break;
    }
} else {
    include_once "public/site/paginas/inicial.php";
}



include_once "public/site/paginas/includes/footer.php"; //FOOTER
