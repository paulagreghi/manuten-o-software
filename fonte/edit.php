<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Fonte de Fomento</h2>

<form action="edit.php?fon_id=<?php echo $fontes['fon_id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required">Nome </label>
      <input type="text" class="form-control" name="fontes['fon_nome']" value="<?php echo $fontes['fon_nome']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>