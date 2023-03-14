<?php
session_start();
include('../../lib/conexion.php');
?>


<html>
<title>INDEX TANGAS</title>
<head>
<link href="../../imagenes/BURRO.png" rel="icon" type="image/x-icon" />
<link href="../../css/estilos.css" rel="stylesheet" type="text/css" />

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

<a href="#ANCLAJE"><img class="anclaje" src="../../imagenes/Arriba.png" width="80" height="80" onmouseover="this.src='../../imagenes/Arriba2.png';" onmouseout="this.src='../../imagenes/Arriba.png';"></a>




<table border="0" class="menu">
<tr>

<td width="400" class="fondoBlanco"><img src="../../imagenes/banner.jpg">
</td>

<td><h2>Bienvenid@ Administrador</h2>



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
if(isset($_SESSION['nombre'])){
	if($_SESSION['privilegios']=='Administrador'){

?>

<?php
	if (isset($_SESSION['nombre'])) {
	
	
?>
	<img src="../../<?php echo $imagen; ?>" alt="" width="80" height="80" border="3" /><br>
<?php

	echo 'Bienvenido!!: '.$_SESSION['nombre'];
	
	}else{
		echo "Tu estas en el sitio web de las tangas mas grandes!";
	}

?>	

<?php
	if (!isset($_SESSION['nombre'])){
	
?>
	
<?php
} else{
?>
	<br><a href="logout.php">CERRAR SESION</a>
<?php
}
?>

<?php
}else{

	echo '<script type="text/javascript">
	alert("No tienes los suficientes privilegios para estar aquí");
	window.location.href="../../index.php";
	</script>';

}


}else{
	echo '<script type="text/javascript">
	window.location.href="../../index.php";
	</script>';

}
?>




</td>

</tr>
</table>



<table class="facebook">

<tr><td><img src="../../imagenes/facebook.png" width="40" height="40" onmouseover="this.src='../../imagenes/facebook2.png';" onmouseout="this.src='../../imagenes/facebook.png';"></td></tr>
<tr><td><img src="../../imagenes/rss.png" width="40" height="40" onmouseover="this.src='../../imagenes/rss2.png';" onmouseout="this.src='../../imagenes/rss.png';"></td></tr>
<tr><td><img src="../../imagenes/twitter.png" width="40" height="40" onmouseover="this.src='../../imagenes/twitter2.png';" onmouseout="this.src='../../imagenes/twitter.png';"></td></tr>

</table>


<center>
<br><br><br><br><br><br><br>
<section class="titulo">
<h1>Gestión de usuarios del administrador</h1>




<form action="./agregar_usuario.php" method="post">
<input type="submit" value="Agregar un administrador">
</form>
<br>


<table border="10" align="center" cellspacing="2" cellpadding="2" style="">
<tr>
	<th style="border-color:#4E6FFF;  border-width:3px; ">Avatar</th>
	<th style="border-color:#4E6FFF;  border-width:3px; ">Nombre</th>
	<th style="border-color:#4E6FFF;  border-width:3px; ">E-mail</th>
	<th style="border-color:#4E6FFF;  border-width:3px; ">Privilegios</th>
	
	<th style="border-color:#4E6FFF;  border-width:3px; ">Editar</th>
	<th style="border-color:#4E6FFF;  border-width:3px; ">Eliminar</th>
</tr>


<?php
$sql = "SELECT * FROM usuarios";
$result = mysql_query($sql,Conectar::Conexion());
while ($row = mysql_fetch_array($result)){
?>

<tr>
	<td align="middle" style="border-color:#D0142D; border-width:5px;"><img src="<?php echo $row[1]; ?>" width="80" height="80" /></td>
	<td align="middle" style="border-color:#D0142D; border-style:dashed; border-width:2px;"><?php echo $row[2]; ?></td>
	<td align="middle" style="border-color:#D0142D; border-style:dashed; border-width:2px;"><?php echo $row[3]; ?></td>
	<td align="middle" style="border-color:#D0142D; border-style:dashed; border-width:2px;"><?php echo $row[5]; ?></td>

	<td style="border-color:#666666; border-width:3px;">
	
	<form action="editar_usuario.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row[0]; ?>" />
		<input type="hidden" name="avatar" value="<?php echo $row[1]; ?>" />
		<input type="hidden" name="name" value="<?php echo $row[2]; ?>" />
		<input type="hidden" name="e_mail" value="<?php echo $row[3]; ?>" />
		<input type="hidden" name="contraseña" value="<?php echo $row[4]; ?>" />
		<input type="hidden" name="tipo" value="<?php echo $row[5]; ?>" />
		<input type="submit" value="Editar">
	</form>
	</td>
	<td style="border-color:#666666; border-width:3px;">
	<form action="eliminar_usuario.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row[0]; ?>" />
		<input type="hidden" name="tipo" value="<?php echo $row[5]; ?>" />
		<input type="submit" value="Eliminar" />
	</form>
	
	</td>


</tr>

<?php
}
?>


</table>
</section>
</center>
</body>
</html>





