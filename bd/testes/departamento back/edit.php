<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Departamento</h2>

<form action="edit.php?id=<?php echo $departamentos['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome </label>
      <input type="text" class="form-control" name="departamentos['dep_nome']" value="<?php echo $departamentos['dep_nome']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">Sigla</label>
      <input type="text" class="form-control" name="departamentos['dep_sigla']" value="<?php echo $departamentos['dep_sigla']; ?>">
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