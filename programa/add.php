<?php 
  require_once('functions.php'); 
  add();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Programa</h2>

<form action="add.php" method="post">
  
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required">Nome</label>
      <input type="text" class="form-control" name="programas['pro_nome']">
    </div>   
    <div class="form-group col-md-3">
      <label for="campo2" class="required">Fonte de Fomento</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($fontes) : ?>
          <?php foreach ($fontes as $fonte) : ?>
            <option value="<?php echo $fonte['fon_id']; ?>" name="programas['fon_id']">
              <?php echo $fonte['fon_nome']; ?>
            </option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="programas['fon_id']">-->
     <!--  <select name="select_fontes">
        <option>Selecione</option>
        <?php
          $result = "SELECT * FROM fonte";
          $results = mysqli_query($conn, $result);
          while($row_fontes = mysqli_fetch_assoc($results)){ ?>
            <option value="<?php echo $row_fontes['fon_id']; ?>"><?php echo $row_fontes[fon_nome];?>
            </option> <?php } 
        ?>
      </select> -->
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