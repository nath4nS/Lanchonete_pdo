<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/all.css">
	<style>
		body {
			background: #2E2E2E;
		}
		.login {
			margin-top: 10%;
		}
		input[readonly] {
		     cursor: text;
		     background-color: #fff !important;
		}
		.card {
			background: #101907;
			border-radius: 5px;
		}
		h3 {
			color: orange;
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
		<div class="card">
			<div class="card-header">
				<h3 align="center">Área administrativa</h3>
			</div>
			<div class="card-body">
				<form action="login.php" method="post">
					<div class="form-group row">
						<input type="email" name="email" id="email" class="form-control" required onfocus="this.removeAttribute('readonly');" readonly autofocus placeholder="E-mail">
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
						<button type="submit" class="btn bg-warning btn-block">Entrar</button>
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