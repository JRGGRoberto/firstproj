<?php 
    require './vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \App\Entity\Pessoa;

    $pessoa = Pessoa::gets();

    /*
    echo '<pre>';
    print_r( $pessoa );
    echo '</pre>';
    */
   $dados = '';
    foreach ( $pessoa as $pes){


      $dados .= '<tr>';
      $dados .= ' <td>'.  $pes->nome .'</td>';
      $dados .= ' <td>'.  $pes->idade .'</td>';
      $dados .= '</tr>';
    }
    
    include './include/header.php';
    include './include/conteudo.php';
    include './include/footer.php';

?>

