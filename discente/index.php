<?php
    require_once('functions.php');
    index();
?>
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Discentes</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Discente</a>
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
		<th width="20%">NOME</th>
		<th>E-MAIL</th>
		<th>CPF</th>
		<th>RG</th>
		<th>CELULAR</th>
		<th>BANCO</th>
		<th>OPERAÇÃO</th>
		<th>AGÊNCIA</th>
		<th>CONTA</th>
	</tr>
</thead>
<tbody>
<?php if ($discente) : ?>
<?php foreach ($discente as $discentes) : ?>
	<tr>
		<td><?php echo $discentes['dis_id']; ?></td>
		<td><?php echo $discentes['dis_nome']; ?></td>
		<td><?php echo $discentes['dis_email']; ?></td>
		<td><?php echo $discentes['dis_cpf']; ?></td>
		<td><?php echo $discentes['dis_rg']; ?></td>
		<td><?php echo $discentes['dis_celular']; ?></td>
		<td><?php echo $discentes['dis_banco']; ?></td>
		<td><?php echo $discentes['dis_operacao']; ?></td>
		<td><?php echo $discentes['dis_agencia']; ?></td>
		<td><?php echo $discentes['dis_conta']; ?></td>		
		
		<td width="25%" class="actions text-right">
			<a href="view.php?dis_id=<?php echo $discentes['dis_id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?dis_id=<?php echo $discentes['dis_id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-geral="<?php echo $discentes['dis_id']; ?>">
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