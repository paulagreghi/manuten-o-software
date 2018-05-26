<?php 
	require_once('functions.php'); 
	view($_GET['ini_id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Iniciação</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Discente </dt>
	<dd><?php echo $iniciacoes['dis_id']; ?></dd>

	<dt>Orientador</dt>
	<dd><?php echo $iniciacoes['doc_id']; ?></dd>
	
	<dt>Título do Plano de Trabalho</dt>
	<dd><?php echo $iniciacoes['ini_tituloPlano']; ?></dd>

	<dt>Título do Projeto Homologado</dt>
	<dd><?php echo $iniciacoes['ini_tituloProjeto']; ?></dd>

	<dt>Período de Trabalho</dt>
	<dd><?php echo $iniciacoes['ini_periodo']; ?></dd>

	<dt>Programa/Modalidade</dt>
	<dd><?php echo $iniciacoes['pro_id']; ?></dd>

	<dt>Vigência do Edital</dt>
	<dd><?php echo $iniciacoes['ini_vigencia']; ?></dd>
	
	<dt>Cancelamento</dt>
	<dd><?php echo $iniciacoes['ini_cancelamento']; ?></dd>	
	
	<dt>Observações</dt>
	<dd><?php echo $iniciacoes['ini_observacoes']; ?></dd>			
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?ini_id=<?php echo $iniciacoes['ini_id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>