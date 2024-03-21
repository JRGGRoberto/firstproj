<form method="post">

  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome" value="<?= $cid->nome; ?>"><br>

  <label for="uf">UF:</label><br>
  <input type="number" id="uf" name="uf" value="<?= $cid->uf; ?>"><br><br>


  <input type="submit" value="Submit">

</form> 