<?php 
  require_once('functions.php');
  add();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Docente</h2>

<form action="add.php" method="post">
  
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required">Nome</label>
      <input type="text" class="form-control" name="docentes['doc_nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2" class="required">CPF</label>
      <input type="text" class="form-control" name="docentes['doc_cpf']">
    </div>  

    <div class="form-group col-md-3">
      <label for="campo2" class="required">RG</label>
      <input type="text" class="form-control" name="docentes['doc_rg']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">E-mail</label>
      <input type="text" class="form-control" name="docentes['doc_email']">
    </div> 
 
    <div class="form-group col-md-3">
      <label for="campo2" class="required">Departamento</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($departamentos) : ?>
          <?php foreach ($departamentos as $departamento) : ?>
            <option value="<?php echo $departamento['dep_id']; ?>" name="docente['dep_id']">
              <?php echo $departamento['dep_sigla']; ?>
            </option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="docentes['dep_id']">-->
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