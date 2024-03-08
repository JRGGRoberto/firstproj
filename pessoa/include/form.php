<form method="post">

  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome" value="<?= $pess->nome; ?>"><br>

  <label for="idade">Idade:</label><br>
  <input type="number" id="idade" name="idade" value="<?= $pess->idade; ?>"><br><br>

  <label for="cidades">Qual a sua cidade:</label>
  <select name="cidades" id="cidades">
    <?=  $opt ;?>
  </select>
  <br><br>

  

  <input type="submit" value="Submit">

</form> 