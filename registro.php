<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
</head>
<body>
	Datos del usuario <br>

	<form name = "userData" method="GET" id="id" action="insert.php">  
		Identificador: <input type="text" name="txtId"> <br>
		Primer Nombre: <input type="text" name="txtFn"> <br>	
		Apellido: <input type="text" name="txtLn"> <br>	
		Contraseña: <input type="text" name="txtPsw"> <br>	
		Sex:
		<select name="selectSex">
		<option value="M">Masculino</option>
		<option value="F">Femenino</option>
		</select> <br>	
		Correo Electronico: <input type="email" name="txtEmail"><br>	
		Fecha de Nacimiento: <input type="date" name="txtBdate"> <br>
	
		<input type="submit" value= "Registrar" name="btnRegistro">
	</form>

</body>
</html>