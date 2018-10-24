<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	{literal}
	<script>
		$(document).ready(inicio);

		function inicio (){
			$("a").click(function(){
				console.log($(this).data());
				$("#nombre").val($(this).data("nombre"));
				$("#apellido").val($(this).data("apellido"));
				$("#telefono").val($(this).data("telefono"));
				$("#direccion").val($(this).data("direccion"));
				$("#id_persona").val($(this).data("id_persona"));
			});

			$(".eliminar").click(function(){
				console.log($(this).val());
				$.ajax({
					url:"../controlador/controlador.php",
					type:"POST",
					data:{opcion:"eliminar",id_persona:$(this).val()},
					success:function(data){
						location.reload();
					}
				});
			})
		}
	</script>
	{/literal}

	<title>{$titulo}</title>
</head>


<body>
	<center><h1>{$titulo}</h1></center>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Borrar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					{foreach from=$datos item=value}
					<td><a  href="#" {foreach from=$value key=key item=value2}  data-{$key}="{$value2}"   {/foreach}> {$value.nombre}  </a></td>
					<td>{$value.apellido}</td>
					<td>{$value.telefono}</td>
					<td>{$value.direccion}</td>
					<td style="margin: 0 auto;"><button type="submit" class="btn btn-danger eliminar" value="{$value.id_persona}">Eliminar</button></td>

				</tr>
				{/foreach}
			</tr>
		</tr>
	</tbody>
</table>
</div>


<hr />
<hr />
<hr />
<hr />


<form method="post" action="../controlador/controlador.php" name="opcion">
	<input type="hidden"  name="id_persona" value="0" id="id_persona">
	<div class="d-flex align-items-center flex-column bd-highlight mb-3" style="height: 500px;">

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Apellido</label>
				<input type="text" class="form-control" name="apellido"  id="apellido" placeholder="Apellido" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputPassword4">Telefono</label>
				<input type="number" class="form-control" name="telefono"  id="telefono" placeholder="Telefono"required>
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Direccion</label>
				<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>
			</div>
		</div>
		<button type="submit" class="btn btn-success" name="opcion" value="agregar">Enviar</button>
	</div>
</form>
</body>
</html>
