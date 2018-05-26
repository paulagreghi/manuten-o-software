<?php 
	require_once('functions.php'); 
	view($_GET['pro_id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Programa</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Programa</dt>
	<dd><?php echo $programas['pro_nome']; ?></dd>

	<dt>Fonte</dt>
	<dd><?php echo $programas['fon_id']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?pro_id=<?php echo $programas['pro_id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>