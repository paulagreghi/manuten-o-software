<?php 
	require_once('functions.php'); 
	view($_GET['dis_id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Discente</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome </dt>
	<dd><?php echo $discentes['dis_nome']; ?></dd>
	<dt>E-mail</dt>
	<dd><?php echo $discentes['dis_email']; ?></dd>	
	<dt>CPF</dt>
	<dd><?php echo $discentes['dis_cpf']; ?></dd>
	<dt>RG</dt>
	<dd><?php echo $discentes['dis_rg']; ?></dd>
	<dt>CELULAR</dt>
	<dd><?php echo $discentes['dis_celular']; ?></dd>
	<dt>BANCO</dt>
	<dd><?php echo $discentes['dis_banco']; ?></dd>	
	<dt>OPERAÇÃO</dt>
	<dd><?php echo $discentes['dis_operacao']; ?></dd>	
	<dt>AGÊNCIA</dt>
	<dd><?php echo $discentes['dis_agencia']; ?></dd>	
	<dt>CONTA</dt>
	<dd><?php echo $discentes['dis_conta']; ?></dd>		
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?dis_id=<?php echo $discentes['dis_id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>