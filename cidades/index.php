<?php 
    require '../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Cidade;

    $cidade = Cidade::gets();

    /*
    echo '<pre>';
    print_r( $pessoa );
    echo '</pre>';
    */
    $dados = '';
    foreach ( $cidade as $cid){
      $dados .= '<tr>';
      $dados .= ' <td><a href="./editar.php?id='.  $cid->id_cidade .'" >editar</a></td>';
      $dados .= ' <td>'.  $cid->nome .'</td>';
      $dados .= ' <td>'.  $cid->uf .'</td>';
      $dados .= '</tr>';
    }
    
    include '../include/header.php';
    include './include/conteudo.php';
    include '../include/footer.php';

?>