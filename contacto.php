<?php
session_start();
//si session_start esta en el tercer renglon o en el 4to renglon nos aparecerá error
include('./lib/functions.php');
include('./lib/conexion.php')
?>


<html>
<title>INDEX TANGAS</title>
<head>
<link href="./imagenes/BURRO.png" rel="icon" type="image/x-icon" />
<link href="./css/estilos.css" rel="stylesheet" type="text/css" />

<script>
	function cuenta(){
		document.forms[0].caracteres.value=document.forms[0].comentario.value.length
	}

</script>


<!--MENU CSS-->
<style type="text/css">
*{
margin: 0px;
padding: 0px; 
}

#header{
 margin: auto;
 width: 500px;
 font-family:Arial, Arial, Arial;
}

ul, ol{
list-style:none;
}

.nav > li {
float:left;
}

.nav li a {
background-color: #3A3838;
color: white;
text-decoration:none;
padding:10px 12px;
display:block;
border-radius:8px;
border:2px solid white;
box-shadow: 5px 7px 10px black;
}

.nav li a:hover{
background-color:#FFB1B1;
}

.nav li ul{
display:none;
position:absolute;
min-width:140px;
}

.nav li:hover > ul{
display:block;
}

.nav li ul li ul{
right:-140px;
top:0px;
}

</style>

</head>


<body class="body">

<a name="ANCLAJE">ANCLAJE</a>

<a href="#ANCLAJE"><img class="anclaje" src="./imagenes/Arriba.png" width="80" height="80" onmouseover="this.src='./imagenes/Arriba2.png';" onmouseout="this.src='./imagenes/Arriba.png';"></a>




<table border="0" class="menu">
<tr>

<td width="400" class="fondoBlanco"><img src="./imagenes/banner.jpg">
</td>

<td><h2>Bienvenid@</h2>

<?php
$archivo="contador.txt";
$abre=fopen($archivo, "r");
$total=fread($abre, filesize($archivo));

fclose($abre);
$abre=fopen($archivo,"w");
$total=$total+1;
$grabar=fwrite($abre,$total);

fclose($abre);

echo"<center><font face='Arial' size='3'><b><u>VISITAS AL SITIO WEB:</u>".$total." (Y contando...)</b></font></center>";


?>

<div id="header">
	<ul class="nav">
		<li><a href="index.php">INDEX</a></li>
		<li><a href="">PRODUCTOS</a>
			<ul>
				<li><a href="">TANGAS</a>
				<ul>
						<li><a href="">Salvaje</a></li>
						<li><a href="">Sexi</a></li>
						<li><a href="">Experimental</a></li>
						<li><a href="">Clasica</a></li>
				
				</ul></li>
			
			<li><a href="">CALZONES</a></li>
			<li><a href="">BOXERS</a></li>
			<li><a href="">BIKINIS</a></li>
			
			</ul></li>

			<li><a href="">SERVICIOS</a>
			<ul>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
			</ul>
			</li>
			
			<li><a href="">CONTACTO</a></li>
			</ul>
</div>
</td>

<td width="200" class="fondoBlanco">






<?php
	if (isset($_SESSION['nombre'])) {
	
	
?>
	<img src="./administrador/usuarios/<?php echo $imagen; ?>" alt="" width="80" height="80" border="3" /><br>
<?php

	echo 'Bienvenido!!: '.$_SESSION['nombre'];
	
	}else{
		echo "Tu estas en el sitio web de las tangas mas grandes!";
	}

?>	

<?php
	if (!isset($_SESSION['nombre'])){
	
?>
	<br>
	<a href="./frm_login.php">INICIAR SESION</a>
<?php
} else{
?>
	<br><a href="logout.php">CERRAR SESION</a>
<?php
}
?>

</td>

</tr>
</table>



<table class="facebook">

<tr><td><img src="./imagenes/facebook.png" width="40" height="40" onmouseover="this.src='./imagenes/facebook2.png';" onmouseout="this.src='./imagenes/facebook.png';"></td></tr>
<tr><td><img src="./imagenes/rss.png" width="40" height="40" onmouseover="this.src='./imagenes/rss2.png';" onmouseout="this.src='./imagenes/rss.png';"></td></tr>
<tr><td><img src="./imagenes/twitter.png" width="40" height="40" onmouseover="this.src='./imagenes/twitter2.png';" onmouseout="this.src='./imagenes/twitter.png';"></td></tr>

</table>


<center>
<br><br><br><br><br><br><br>


<div class="coments2">
<h1>Escribe un comentario</h1>
<br>
<br>
<?php if(!isset($_SESSION['nombre'])){
?>

<h1>No puedes comentar si no estas registrado o si no has iniciado sesión, no pierdas el tiempo y hazlo ahora!!!</h1>
<href="frm_registro.php" />

<?php 
}else{
?>

<form action="#" method="post" onsubmit="return validar()">
	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $nombre?>" readonly><br>
	<label>Email</label>
	<input type="email" name="email" value="<?php echo $email?>" readonly><br>
	<label>Asunto</label>
	<input placeholder="Opinión" type="text" name="asunto"><br>

	<br>
	
	Sólo puedes escribir 250 caracteres <br>
	Caracteres escritos: <input type="text" name="caracteres" readonly size="4" /> 
	
	<br>
	<textarea cols="40" rows="5" name="comentario" onKeyDown="cuenta()" onKeyDown="cuenta()" maxlength="250" placeholder="¿Qué opinas del canal de Lalito Rams y la venta de tanga?"></textarea><br>
	
	<input type="submit" value="Comentar" /> <br>
	
</form>

<?php
	if($_POST){
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['asunto'];
	$comentario=$_POST['comentario'];
	$fecha=date('d/m/Y');
	
	$coment = new Comentario();
	$coment->Comentar($nombre, $email, $asunto, $comentario, $fecha);
	}

?>


<?php
}
?>

	</div><div class="coments2">
	
		<?php
			$sql= "SELECT * FROM comentarios WHERE status='publicado'";
			$result= mysql_query($sql, Conectar::Conexion());
			while ($row = mysql_fetch_array($result)){
		
		?>
	
	
		Fecha: <?php echo $row[5]; ?>
		<h3 style="color: #FFB7B7;"><?php echo $row[1]; ?> dijo:		</h3>
		<h3><span style="background-color: black;"><?php echo $row[4]; ?> 	<br><br></span></h3>
		
	
	<?php
	}
	?>

	

</div>
</center>
</body>
</html>




