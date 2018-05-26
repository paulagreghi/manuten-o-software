<?php 
  require_once('functions.php'); 
  add();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Iniciação</h2>

<form action="add.php" method="post">
  
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
     <label for="name" class="required">Discente</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($discentes) : ?>
        <?php foreach ($discentes as $discente) : ?>
          <option>
            <tr>
              <td><?php echo $discente['dis_nome']; ?></td>
            </tr>
          </option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
     <!--<input type="text" class="form-control" name="iniciacoes['dis_id']">-->
    </div>

    <div class="form-group col-md-6">
      <label for="campo2" class="required">Orientador</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($docentes) : ?>        
          <?php foreach ($docentes as $docente) : ?>
            <option>
              <tr>
                <td><?php echo $docente['doc_nome']; ?></td>
              </tr>
            </option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="iniciacoes['doc_id']">-->
    </div>

    <div class="form-group col-md-12">
      <label for="campo2" class="required">Título do Plano de Trabalho</label>
      <input type="text" class="form-control" name="iniciacoes['ini_tituloPlano']">
    </div>

    <div class="form-group col-md-12">
      <label for="campo2" class="required">Título do Projeto Homologado</label>
      <input type="text" class="form-control" name="iniciacoes['ini_tituloProjeto']">
    </div> 

    <div class="form-group col-md-7">
      <label for="campo2" class="required">Período de Trabalho</label>
      <input type="text" class="form-control" name="iniciacoes['ini_periodo']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Programa</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($programas) : ?>
          <?php foreach ($programas as $programa) : ?>
            <option>
              <tr>
                <td><?php echo $programa['pro_nome']; ?></td>
              </tr>
            </option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      <!--<input type="text" class="form-control" name="iniciacoes['pro_id']">-->
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Vigência do Edital</label>
      <input type="text" class="form-control" name="iniciacoes['ini_vigencia']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Cancelamento</label>
      <input type="text" class="form-control" name="iniciacoes['ini_cancelamento']">
    </div> 

    <div class="form-group col-md-12">
      <label for="comment">Observações</label>
      <textarea class="form-control" rows="5" id="comment" name="iniciacoes['ini_observacoes']"></textarea>
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