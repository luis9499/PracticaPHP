<!DOCTYPE html>
<html>
<head>
	<title>Operaciones</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Operacion</h3>
	<form action="<?php echo site_url();?>Saludo/calculo" method="post">
		Valor 1: <input type="text" name="valor1" ><br/>
		Valor 2: <input type="text" name="valor2" ><br/>
		Operacion: 
		<select name="operacion">			
			<option value="1">+</option>
			<option value="2">-</option>
			<option value="3">*</option>
			<option value="4">/</option>
		</select><br>
		<input type="submit" name="btnEnviar" value="Enviar">
	</form>

	<p>
		<?php if(isset($resultado)){ 
			echo "Resultado de la operacion: ".$resultado;
			} ?>
	</p>
</body>
</html>
