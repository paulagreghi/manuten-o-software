<?php 
	require_once('functions.php'); 
	view($_GET['fon_id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Fonte de Fomento</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome </dt>
	<dd><?php echo $fontes['fon_nome']; ?></dd>	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?fon_id=<?php echo $fontes['fon_id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>