<?php

include('lib/conexion.php');
include('lib/functions.php');
?>

<html>


<body>



<?php
if(!isset($_SESSION['nombre'])){
echo'
<form action="" method="post" onsubmit="return validarForm(this);" enctype="multipart/form-data">

<br><br>
<label>Imagen: </label>
<br>
<input type="file" value="" name="imagen" required>
<br>


<br><label>Nombre: </label>
<input type="text" name="nombre" required>

<br><label>Email: </label>
<input type="email" value="" name="email" required>

<br><label>Password: </label>
<input type="password" value="" name="password" required>

<br><label>Comprobar Password: </label>
<input type="password" value="" name="password2" required>
<br>
<input type="submit" value="Registrarte">
</form>';
}else{
echo'<script type="text/javascript">
	alert("Necesitas salir de la sesion para poder registrar otro usuario");
	window.location.href="inde.php";
	</script>';
}

?>


<?php
if ($_POST){
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$encryptado=md5($password);
	$password2 = $_POST['password2'];
		$encryptar2=md5($password2);
	//md5 crea 32 caracteres diferentes en la DB para que nadie pueda ver el password
	



if ($encryptado==$encryptar2){
	
	$usuario = new Usuario();
	$usuario -> registrar($nombre, $email, $encryptado);
	
	}else{
	
	echo '<script type="text/javascript">
		alert("Su compobacion de password no coincide");
		window.location.href="frm_registro.php";
		</script>';
	






}
}



?>


<br>
&#191;Ya tienes cuenta?
<a href="frm_login">Inicia sesi&oacute;n</a>


</body>

</html>