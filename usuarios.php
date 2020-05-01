<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php
$permissoes = retornaControle('usuario');
$permissoesImagem = retornaControle('removeImagemUsuario');
if(empty($permissoes)) {
	header("Location: administrativa.php?msg=Acesso negado.");
}


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
$path = $_SERVER['DOCUMENT_ROOT'];

require 'classes/Usuario.php';
require 'classes/UsuarioDAO.php';
$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->listarUsuarios();

?>

<!-- /*if(isset($_GET['msg']) && $_GET['msg'] != '') {
	echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
}

if(isset($_GET['pesquisa']) && $_GET['pesquisa'] != '') {
	$usuarios = $usuarioDAO->listar($_GET['pesquisa']);
} else {
	$usuarios = $usuarioDAO->listar();
}*/ -->
<div class="row" style="margin-top:40px">
	<div class="col-6">
		<h2>Gerenciar usuários</h2>
	</div>
	<div class="col-4">
		<form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="<?= (isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '') ?>">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
	      	<i class="fas fa-search"></i>	
	      </button>
	      <a href="./usuarios.php" class="btn btn-outline-warning my-2 my-sm-0">
	      	<i class="fas fa-trash-alt"></i>
	      </a>
	    </form>
	</div>
	<?php if($permissoes['insert']): ?>
	<div class="col-2">
		<a href="form_usuario.php" class="btn btn-success">Novo usuário</a>
	</div>
	<?php endif; ?>
</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th></th>
				<th>#ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Perfil</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($usuarios as $usuario){ ?>
			<tr>
				<td class="text-center">
					<img src="/assets/img/usuarios/<?= ($usuario->getImagem() != '' && file_exists('assets/img/usuarios/'.$usuario->getImagem()) ? $usuario->getImagem() : 'usuario.png') ?>" alt="" width="50" class="rounded-circle">
				</td>
				<th><?= $usuario->getId() ?></th>
				<td><?= $usuario->getNome() ?></td>
				<td><?= $usuario->getEmail() ?></td>
				<td><?= $usuario->perfil ?></td>
				<td>
					<?php if($permissoes['update'] || $permissoes['show']): ?>
						<a href="form_usuario.php?id=<?= $usuario->getId() ?>" class="btn btn-warning">
							<i class="fas fa-edit"></i>
						</a>
					<?php endif; ?>
					<?php if($permissoes['delete']): ?>
						<a href="controle_usuario.php?acao=deletar&id=<?= $usuario->getId() ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o usuário?')">
							<i class="fas fa-user-minus"></i>
						</a>
					<?php endif; ?>
					<?php if(!empty($permissoesImagem)): ?>
						<a href="controle_usuario.php?acao=removeImagem&id=<?= $usuario->getId() ?>" onclick="return confirm('Deseja realmente remover a imagem?')" class="btn btn-danger">
							<i class="fas fa-trash-alt"></i>
						</a>
					<?php endif; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include './layout/footer.php'; ?>