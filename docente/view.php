<?php 
	require_once('functions.php'); 
	view($_GET['doc_id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Docente</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome </dt>
	<dd><?php echo $docentes['doc_nome']; ?></dd>

	<dt>CPF</dt>
	<dd><?php echo $docentes['doc_cpf']; ?></dd>

	<dt>RG</dt>
	<dd><?php echo $docentes['doc_rg']; ?></dd>

	<dt>E-mail</dt>
	<dd><?php echo $docentes['doc_email']; ?></dd>

	<dt>Departamento</dt>
	<dd><?php echo $docentes['dep_id']; ?></dd>
	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?doc_id=<?php echo $docentes['doc_id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>