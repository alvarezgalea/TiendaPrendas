<html>
<head>

</head>


<body>
<h3>Introduce tu correo y contraseña</h3>


<?php
if(!isset($_SESSION['nombre'])){

echo'

		<form action="login.php" method="post" onsubmit="return validarForm(this);" >
						
					
		<br>
		<label>Email:</label>
		<br>
		<input type="email" name="email" placeholder="usuario@example.com">
		<br><br>
		
		<label>Password</label>
		<br>
		<input type="password" name="password">
		<br><br>
		<input type="submit" value="Ingresar">

		</form>
		';
		}else{
		echo'<script type="text/javascript">
				alert("Finaliza tu sesion para que puedas ingresar con otro usuario");
				window.location.href="index.php";
				</script>';
		}
		
?>		
		

		¿No tienes cuenta aún?
<a href="frm_registro.php">REGISTRATE</a>

</body>
</html>