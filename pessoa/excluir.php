<?php 
    require '../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Pessoa;


    $id = $_GET['id'];
    $pess = Pessoa::get( $id);
    $pess = new Pessoa;

    if (isset($_POST['ida'])){

        $pess->excluir();
        header('location: ../');
        exit;
    }
  

    include '../include/header.php';

    ?>
    Tem certeza que deseja excluir <?= $pess->nome; ?><br>
    <form method="post">
    <input type="hidden" name="ida">
    <input type="submit" value="Excluir">
  
  </form> 

  <?php 
    include '../include/footer.php';

?>