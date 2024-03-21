
<?php 
    require '../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Pessoa;
    use \App\Entity\Cidade;

    $pess = new Pessoa;
    $id = $_GET['id'];
    $pess = Pessoa::get( $id);

    if (isset($_POST['nome'])){
        $pess->nome = $_POST['nome'];
        $pess->idade = $_POST['idade'];
        $pess->id_cidade = $_POST['cidades'];
        $pess->atualizar();
        header('location: ./');
        exit;
    }
    
    $opt = '';
    $ord = 'nome ';

    $cidade =  Cidade::gets($w = null, $ord);
    foreach ($cidade as $c){
        $selecionado = $c->id_cidade == $pess->id_cidade ? 'selected' : '';


        $opt .= '<option value="'. $c->id_cidade .'" '. $selecionado.'>'. $c->nome  .'</option>';
    }


  

    include '../include/header.php';
    include './include/form.php';
    include '../include/footer.php';

?>