<?php 
  require_once('functions.php'); 
  edit();
  index();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Iniciação</h2>

<form action="edit.php?ini_id=<?php echo $iniciacoes['ini_id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
     <label for="name" class="required">Discente</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($discentes) : ?>
        <option>
          <?php foreach ($discentes as $discente) : ?>
            <tr>
              <td><?php echo $discente['dis_nome']; ?></td>
            </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </option>
      </select>
     <!--<input type="text" class="form-control" name="iniciacoes['dis_id']" value="<?php echo $iniciacoes['dis_id']; ?>">-->
    </div>

    <div class="form-group col-md-5">
      <label for="campo2" class="required">Orientador</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($docentes) : ?>
        <option>
          <?php foreach ($docentes as $docente) : ?>
            <tr>
              <td><?php echo $docente['doc_nome']; ?></td>
            </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </option>
      </select>
      <!--<input type="text" class="form-control" name="iniciacoes['doc_id']" value="<?php echo $iniciacoes['doc_id']; ?>">-->
    </div>

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Título do Plano de Trabalho</label>
      <input type="text" class="form-control" name="iniciacoes['ini_tituloPlano']" value="<?php echo $iniciacoes['ini_tituloPlano']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Título do Projeto Homologado</label>
      <input type="text" class="form-control" name="iniciacoes['ini_tituloProjeto']" value="<?php echo $iniciacoes['ini_tituloProjeto']; ?>">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Período de Trabalho</label>
      <input type="text" class="form-control" name="iniciacoes['ini_periodo']" value="<?php echo $iniciacoes['ini_periodo']; ?>">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Programa</label>
      <select class="form-control">
        <option>Selecione</option>
        <?php if ($programas) : ?>
        <option>
          <?php foreach ($programas as $programa) : ?>
            <tr>
              <td><?php echo $programa['pro_nome']; ?></td>
            </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </option>
      </select>
      <!--<input type="text" class="form-control" name="iniciacoes['pro_id']" value="<?php echo $iniciacoes['pro_id']; ?>">-->
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2" class="required">Vigência do Edital</label>
      <input type="text" class="form-control" name="iniciacoes['ini_vigencia']" value="<?php echo $iniciacoes['ini_vigencia']; ?>">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Cancelamento</label>
      <input type="text" class="form-control" name="iniciacoes['ini_cancelamento']" value="<?php echo $iniciacoes['ini_cancelamento']; ?>">
    </div> 

    <div class="form-group col-md-6">
      <label for="campo2">Observações</label>
      <input type="text" class="form-control" name="iniciacoes['ini_observacoes']" value="<?php echo $iniciacoes['ini_observacoes']; ?>">
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