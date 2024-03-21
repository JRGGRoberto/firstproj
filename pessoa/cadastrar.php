<?php 
    require '../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Pessoa;
    use \App\Entity\Cidade;

    $pess = new Pessoa;
  

    if (isset($_POST['nome'])){
        $pess->nome = $_POST['nome'];
        $pess->idade = $_POST['idade'];
        $pess->id_cidade = $_POST['cidades'];
        $pess->cadastrar();
        header('location: ./');
        exit;
    }
    
    $opt = '';
    $ord = 'nome ';

    $cidade =  Cidade::gets($w = null, $ord);
    foreach ($cidade as $c){
        $opt .= '<option value="'. $c->id_cidade .'">'. $c->nome  .'</option>';
    }


  

    include '../include/header.php';
    include './include/form.php';
    include '../include/footer.php';

?>