<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Iniciações</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Iniciação</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>DISCENTE</th>
		<th>ORIENTADOR</th>
		<th>TÍTULO DO PLANO DE TRABALHO</th>
		<th>TÍTULO DO PROJETO HOMOLOGADO</th>
		<th>PERÍODO DE TRABALHO</th>		
	</tr>
</thead>
<tbody>
<?php if ($iniciacao) : ?>
<?php foreach ($iniciacao as $iniciacoes) : ?>
	<tr>
		<td><?php echo $iniciacoes['ini_id']; ?></td>
		<td><?php echo $iniciacoes['dis_id']; ?></td>
		<td><?php echo $iniciacoes['doc_id']; ?></td>
		<td><?php echo $iniciacoes['ini_tituloPlano']; ?></td>
		<td><?php echo $iniciacoes['ini_tituloProjeto']; ?></td>
		<td><?php echo $iniciacoes['ini_periodo']; ?></td>	
		
		<td width="25%" class="actions text-right">
			<a href="view.php?ini_id=<?php echo $iniciacoes['ini_id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?ini_id=<?php echo $iniciacoes['ini_id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-geral="<?php echo $iniciacoes['ini_id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>
<?php include ('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>