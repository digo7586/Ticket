<?php
include 'init.php';
if (!$users->isLoggedIn()) {
	header("Location: login.php");
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>Suporte | ENGEBAG E BAGCLEANER</title>
<script src="js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>

<script src="js/general.js"></script>

<script src="js/user.js"></script>

<link rel="stylesheet" href="css/style.css" />

<?php include('inc/nav.php'); ?>
<?php include('inc/container.php'); ?>

<div class="container-fluid">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="center">
				<button type="button" name="add" id="addUser" class="btn btn-success btn-lg"><i class="bi bi-person-add"></i></button>
			</div>
		</div>
	</div>

	<table id="listUser" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Criado</th>
				<th>Tipo</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-add"></i> Adicionar Usuario</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" id="userForm">
						<div class="mb-3">
							<label for="username" class="control-form-label">Nome</label>
							<input type="text" class="form-control" id="userName" name="userName" placeholder="Digite o nome do usuário" required>
						</div>

						<div class="mb-3">
							<label for="username" class="control-form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" required>
						</div>

						<div class="mb-3">
							<label for="status" class="control-form-label">Tipo de usuário</label>
							<select id="role" name="role" class="form-select">
								<option value="admin">Admin</option>
								<option value="user">Usuário</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="status" class="control-form-label">Status</label>
							<select id="status" name="status" class="form-select">
								<option value="1">Ativo</option>
								<option value="0">Inativo</option>
							</select>
						</div>

						<div class="mb-3">
							<label for="username" class="control-form-label">Nova senha</label>
							<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Digite uma senha"><i class="bi bi-eye-slash" onmouseup="passaMouseMostraSenha();" onmousedown="tiraMouseEscondeSenha();" id="showEye"></i>
						</div>

						<div class="modal-footer">
							<input type="hidden" name="userId" id="userId" />
							<input type="hidden" name="action" id="action" value="" />
							<button type="submit" name="save" id="save" class="btn btn-primary" value="Save">Adicionar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>