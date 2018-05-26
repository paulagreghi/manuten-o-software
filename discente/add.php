<?php 
  require_once('functions.php'); 
  add();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Discente</h2>

<form action="add.php" method="post">
  
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name" class="required" >Nome </label>  
      <input type="text" class="form-control" name="discentes['dis_nome']">
    </div>

    <div class="form-group col-md-5">
      <label for="campo2" class="required">E-mail</label>
      <input type="text" class="form-control" name="discentes['dis_email']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2" class="required">CPF</label>
      <input type="text" class="form-control" name="discentes['dis_cpf']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2" class="required">RG</label>
      <input type="text" class="form-control" name="discentes['dis_rg']">
    </div> 

    <div class="form-group col-md-4">
      <label for="campo2" class="required">Celular</label>
      <input type="text" class="form-control" name="discentes['dis_celular']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Banco</label>
      <input type="text" class="form-control" name="discentes['dis_banco']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Operação</label>
      <input type="text" class="form-control" name="discentes['dis_operacao]">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Agência</label>
      <input type="text" class="form-control" name="discentes['dis_agencia']">
    </div> 

    <div class="form-group col-md-3">
      <label for="campo2">Conta</label>
      <input type="text" class="form-control" name="discentes['dis_conta']">
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