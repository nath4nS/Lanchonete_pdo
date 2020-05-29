<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
$permissoes = retornaControle('categoria');
if(empty($permissoes)) {
	header("Location: administrativa.php?msg=Sem permissão de acesso");
}

require 'classes/Categoria.php';
require 'classes/CategoriaDAO.php';
$categoriaDAO = new CategoriaDAO();
$categorias = $categoriaDAO->listar();


if(isset($_GET['pesquisa']) && $_GET['pesquisa'] != '') {
	$categorias = $categoriaDAO->listar($_GET['pesquisa']);
} else {
	$categorias = $categoriaDAO->listar();
}

?>
<div class="row" style="margin-top:40px">
	<div class="col-6">
		<h2>Gerenciar categorias</h2>
	</div>
	<div class="col-4">
		<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="<?= (isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '') ?>">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
		      	<i class="fas fa-search"></i>	
		      </button>
		      <a href="./categorias.php" class="btn btn-outline-warning my-2 my-sm-0">
		      	<i class="fas fa-trash-alt"></i>
		      </a>
	    </form>
	</div>
	<?php if($permissoes['insert']) : ?>
		<div class="col-2">
			<a href="form_categoria.php" class="btn btn-success">Nova categoria</a>
		</div>
	<?php endif; ?>
</div>
<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($categorias as $categoria){ ?>
			<tr>
				<td><?= $categoria->getId() ?></td>
				<td><?= $categoria->getNome() ?></td>
				<td>
					<?php if($permissoes['update'] || $permissoes['show']): ?>
						<a href="form_categoria.php?id=<?= $categoria->getId() ?>" class="btn btn-warning" data-toggle="tooltip" title="Editar categoria">
							<i class="fas fa-edit"></i>
						</a> 
					<?php endif; ?>

					<?php if($permissoes['delete']): ?>
					<a href="controle_categoria.php?acao=deletar&id=<?= $categoria->getId() ?>" onclick="return confirm('Deseja realmente excluir?')" class="btn btn-danger" data-toggle="tooltip" title="Excluir categoria">
						<i class="fas fa-trash-alt"></i>
					<?php endif; ?>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include './layout/footer.php'; ?>