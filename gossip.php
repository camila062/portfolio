<?php

include_once "public/gossip/paginas/includes/header.php";

$paginas = isset($_GET['pg']);

if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "public/gossip/paginas/inicial.php";
            break;
             case'dailyhoroscope':
                include_once "public/gossip/paginas/dailyhoroscope.php";
                break;
                case'templantes':
                    include_once "public/gossip/paginas/templantes.php";
                    break;
                case'sobre':
                    include_once "public/gossip/paginas/sobre.php";
                    break;
                case'musicas':
                    include_once "public/gossip/paginas/musicas.php";
                    break;
                case'noticias':
                    include_once "public/gossip/paginas/noticias.php";
                    break;
                case'cadastro':
                    include_once "public/gossip/paginas/cadastro.php";
                    break;
                case'wallpaper':
                    include_once "public/gossip/paginas/wallpaper.php";
                    break;
        default:
            # code...
            break;
    }
} else {
 include_once "public/gossip/paginas/inicial.php";
}


include_once "public/gossip/paginas/includes/footer.php";


?>