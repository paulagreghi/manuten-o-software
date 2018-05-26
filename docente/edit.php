<?php 
  require_once('functions.php'); 
  edit();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Docente</h2>

<form action="edit.php?doc_id=<?php echo $docentes['doc_id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required">Nome </label>
      <input type="text" class="form-control" name="docentes['doc_nome']" value="<?php echo $docentes['doc_nome']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="docentes['doc_cpf']" value="<?php echo $docentes['doc_cpf']; ?>">
    </div>
  

    <div class="form-group col-md-3">
      <label for="campo2" class="required">RG</label>
      <input type="text" class="form-control" name="docentes['doc_rg']" value="<?php echo $docentes['doc_rg']; ?>">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">E-mail</label>
      <input type="text" class="form-control" name="docentes['doc_email']" value="<?php echo $docentes['doc_email']; ?>">
    </div> 
 
    <div class="form-group col-md-3">
      <label for="campo2" class="required">Departamento</label>
      <select class="form-control">
          <?php if ($departamentos) : ?>
            <?php foreach ($departamentos as $departamento) : ?>
              <?php if ($docente['dep_id'] == $departamento['dep_id']) : ?>
                <option value="<?php echo $departamento['dep_id']; ?>" name="docente['dep_id']">
                  <?php echo $departamento['dep_sigla']; ?>
                </option>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php if ($departamentos) : ?>
          <?php foreach ($departamentos as $departamento) : ?>
            <?php if ($docente['dep_id'] != $departamento['dep_id']) : ?>
            <option value="<?php echo $departamento['dep_id']; ?>" name="docente['dep_id']">
              <?php echo $departamento['dep_sigla']; ?>
            </option>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="docentes['dep_id']" value="<?php echo $docentes['dep_id']; ?>">-->
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