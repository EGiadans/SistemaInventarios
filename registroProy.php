<!DOCTYPE html>
<html>
<head>
	<title>Registro de Proyectos</title>
</head>
<body>
	<form name="regProy" action="insertProy.php" method="POST">
		Datos del Proyecto: <br>
		Identificador <input type="text" name="txtId"> <br>
		Nombre del proyecto: <input type="text" name="txtName"> <br>
		Fecha de inicio: <input type="date" name="txtDate"> <br>
		Descripcion del proyecto: <input type="text" name="txtDesc"> <br>

		<input type="submit" name="btnRegProy" value="Registrar">
	</form>
</body>
</html>