<?php
	Class Producto{
		var $id, $imagen, $nombreP, $descripcion, $precio, $stock, $fecha, $categoria;
		
		function agregar($rutaDestino, $nombreP, $descripcion, $precio, $stock, $fecha, $categoria){
			$this-> imagen = $rutaDestino;
			$this-> nombreP = $nombreP;
			$this-> descripcion = $descripcion;
			$this-> precio = $precio;
			$this-> stock = $stock;
			$this-> fecha = $fecha;
			$this-> categoria = $categoria;
			
			$sql = "INSERT INTO productos (imagen,nombreP,descripcion,precio,stock,fecha,categoria) VALUES ('".$rutaDestino."', '".$nombreP."', '".$descripcion."', '".$precio."', '".$stock."', '".$fecha."', '".$categoria."')";
			
			mysql_query($sql, Conectar::Conexion());
			echo'<script type="text/javascript">
			alert("El producto se ha agregado correctamente");
			window.location.href="mostrar_productos.php"
			</script>';
		}
	

	
	function eliminar($id){
	
		$this->id = $id;
		$sql = "DELETE FROM productos WHERE id=$id";
		$result = mysql_query($sql, Conectar::Conexion());
		echo'<script type="text/javascript">
		alert("El producto se ha eliminado correctamente");
		window.location.href="mostrar_productos.php";
		</script>';
	
	

	}
	
	function actualizar($id, $rutaDestino, $nombreP, $descripcion, $precio, $stock, $fecha, $categoria){
	$this-> id = $id;
	$this-> imagen = $rutaDestino;
	$this-> nombreP = $nombreP;
	$this-> descripcion = $descripcion;
	$this-> precio = $precio;
	$this-> fecha = $fecha;
	$this-> categoria = $categoria;
	$sql = "UPDATE productos SET imagen='$rutaDestino', nombreP='$nombreP', descripcion='$descripcion', precio='$precio', stock='$stock', fecha='$fecha', categoria='$categoria' WHERE id = $id ";
		mysql_query($sql, Conectar::Conexion());
			echo'<script type="text/javascript">
			alert("El producto se ha actualizado correctamente");
			window.location.href="mostrar_productos.php";
			</script>';
	
	}
	
	
	
	
	}
	
?>