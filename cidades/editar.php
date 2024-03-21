<?php 
    require '../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Cidade;
    $id = $_GET['id_cidade'];

     $cid = Cidade::get( $id);


    include '../include/header.php';
        echo '<pre>';
        print_r($cid);
        echo '</pre>';
    include '../include/footer.php';

?>