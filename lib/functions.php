<?php 

class Usuario{

	var $id, $nombre, $email, $encryptar, $privilegios;
	
	function registrar($nombre, $email, $encryptar){
	
	$this-> nombre = $nombre;
	$this-> email = $email;
	$this-> encryptar = $encryptar;
	
	$sql="SELECT * FROM usuarios WHERE email='".$email."'";
	$result = mysql_query($sql, Conectar::conexion());
	$contar = mysql_num_rows($result);
	
	if($contar==0){
	

if ($_FILES['imagen']['type']=='image/jpg' || $_FILES['imagen']['type']=='image/jpeg' || $_FILES['imagen']['type']=='image/png'){

		$rutaServidor = 'imagenes';
		$rutaTemporal = $_FILES['imagen']['tmp_name'];
		$nombreImagen = $_FILES['imagen']['name'];
		$rutaDestino = $rutaServidor.'/'.$nombreImagen;
		
		move_uploaded_file($rutaTemporal,$rutaDestino);
		
		$sql="INSERT INTO usuarios (nombre, email, password, imagen) VALUES('".$nombre."', '".$email."', '".$encryptar."', '".$rutaDestino."')";

		$result = mysql_query($sql, Conectar::Conexion());
		
		echo '<script type="text/javascript">
			alert("Su registro ha sido con exito");
			window.location.href="index.php";
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Su imagen no es compatible, vuelva a intentarlo");
			window.location.href="frm_registro.php;
			</script>';
	}
	
	}else{
		echo '<script type="text/javascript">
				alert("Su email ya ha sido registrado");
				windows.location.href="frm_registro.php";
				</script>';
				
	
	
	
	}

}
}




class Comentario{
	var $id, $nombre, $email, $asunto, $comentario, $fecha;
	
		function Comentar($nombre, $email, $asunto, $comentario, $fecha){
			$this->nombre =$nombre;
			$this->email =$email;
			$this->asunto =$asunto;
			$this->comentario =$comentario;
			$this->fecha =$fecha;
			
			$sql="INSERT into comentarios(nombre, email, asunto, comentario, fecha) VALUES ('".$nombre."','".$email."','".$asunto."','".$comentario."', '".$fecha."')";
				$result=mysql_query($sql, Conectar::Conexion());
				
				echo'<script type="text/javascript">
				alert("Su comentario será validado en breve");
				window.location.href="contacto.php";
				</script>';
		
		}

}

?>




