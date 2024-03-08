<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './include/header.php';
echo '<a href="./pessoa">Pessoas</a>';
echo '</br><a href="./cidades">Cidade</a>';
include './include/footer.php';

?>