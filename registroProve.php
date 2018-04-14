<!DOCTYPE html>
<html>
<head>
	<title>Registro Proveedores</title>
</head>
<body>
	<form name="regProve" action="insertProve.php" method="POST">
		Datos del Proveedor: <br>
		Codigo: <input type="text" name="txtCodigo"> <br>
		Nombre del proveedor: <input type="text" name="txtName"> <br>
		Correo Electronico: <input type="email" name="txtEmail"> <br>
		Direccion de sucursal: <input type="text" name="txtDirec"> <br>

		<input type="submit" name="btnRegProve" value="Registrar">
	</form>

</body>
</html>