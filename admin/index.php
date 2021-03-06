<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrativo</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="admin/assets/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/all.css">
	<link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
	<style>
		body {
			background-image: url(admin/assets/img/wallpaper.jpg);
			/*background: #2E2E2E;*/
		}

	</style>
</head>
<body>
<div class="container">
<div class="row login">
	<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-danger col-4 offset-4">'.$_GET['msg'].'</div>';
	}
	?>
</div>
<div class="row">
	<div class="col-4 offset-4 ">
		<div class="card-index">
			<div class="card-header">
				<img src="/assets/img/logo.png">
				<br>
				<h3 align="center">Administrativo</h3>
			</div>
			<div class="card-body">
				<form action="admin/login.php" method="post">
					<div class="form-group row">
						<input type="email" name="email" id="email" class="form-control" required onfocus="this.removeAttribute('readonly');" readonly autofocus placeholder="Email">
					</div>
					<div class="form-group row">
						<!-- <label for="senha">Senha:</label> -->
							<input type="password" name="senha" id="senha" class="form-control col-10" required onfocus="this.removeAttribute('readonly');" readonly placeholder="Senha">
							<a href="#" class="btn-show-password btn btn-outline-secondary col-2" >
								<i class="fas fa-eye"></i>
							</a>
					</div>
					<br>
					<div class="form-group row">
						<button type="submit" class="button-login">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script>
$(document).ready(function(){
	$('.btn-show-password').on('click', function() {
        var campoPassword = $('#senha');
      	campoTipo = campoPassword.attr('type');

      	if(campoTipo == 'password') {
        	campoPassword.attr('type', 'text');
        	$('.btn-show-password').html('<i class="fas fa-eye-slash"></i>');
      	} else {
      		campoPassword.attr('type', 'password');
      		$('.btn-show-password').html('<i class="fas fa-eye"></i>');
      	}

	});
});
</script>
</body>
</html>