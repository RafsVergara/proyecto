<?php
/* Smarty version 3.1.33, created on 2018-10-22 15:36:33
  from '/opt/lampp/htdocs/proyecto/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcdd261e66f16_16040113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed9332cb90ac5a98ffe5f5e194d1ebe8d6cae74d' => 
    array (
      0 => '/opt/lampp/htdocs/proyecto/template/index.tpl',
      1 => 1540215165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcdd261e66f16_16040113 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
	<center><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1></center>



<div class="container">

	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
</div>



	<form>

<div class="d-flex align-items-center flex-column bd-highlight mb-3" style="height: 500px;">

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Nombre</label>
				<input type="text" class="form-control" id="nombre" placeholder="Nombre">
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Apellido</label>
				<input type="text" class="form-control" id="apellido" placeholder="Apellido">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputPassword4">Telefono</label>
				<input type="text" class="form-control" id="inputPassword4" placeholder="Telefono">
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Direccion</label>
				<input type="text" class="form-control" id="inputPassword4" placeholder="Telefono">
			</div>
		</div>

			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Autorizo
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>




</div>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
	</body>
	</html><?php }
}
