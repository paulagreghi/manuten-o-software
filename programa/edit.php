<?php 
  require_once('functions.php'); 
  edit();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Programa</h2>

<form action="edit.php?pro_id=<?php echo $programas['pro_id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name" class="required">Nome </label>
      <input type="text" class="form-control" name="programas['pro_nome']" value="<?php echo $programas['pro_nome']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="name" class="required">Fonte de Fomento </label>
      <select class="form-control">
          <?php if ($fontes) : ?>
            <?php foreach ($fontes as $fonte) : ?>
              <?php if ($programas['fon_id'] == $fonte['fon_id']) : ?>
                <option value="<?php echo $fonte['fon_id']; ?>" name="programas['fon_id']">
                  <?php echo $fonte['fon_nome']; ?>
                </option>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php if ($fontes) : ?>
          <?php foreach ($fontes as $fonte) : ?>
            <?php if ($programas['fon_id'] != $fonte['fon_id']) : ?>
            <option value="<?php echo $fonte['fon_id']; ?>" name="programas['fon_id']">
              <?php echo $fonte['fon_nome']; ?>
            </option>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="programas['fon_id']" value="<?php echo $programas['fon_id']; ?>">-->
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