<?php 
    require './vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Pessoa;

    $pessoa = Pessoa::gets();

    include './include/header.php';

    echo '<pre>';
    print_r( $pessoa );
    echo '</pre>';


    foreach ( $pessoa as $chave){
        echo $chave->nome .'</br>';
    }


    include './include/footer.php';

?>

