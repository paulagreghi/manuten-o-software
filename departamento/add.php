<?php 
  header('Content-Type: text/html; charset=utf-8');
  require_once('functions.php'); 
  add();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Departamento</h2>

<form action="add.php" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required">Nome</label>
      <input type="text" class="form-control" name="departamentos['dep_nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Sigla</label>
      <input type="text" class="form-control" name="departamentos['dep_sigla']">
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