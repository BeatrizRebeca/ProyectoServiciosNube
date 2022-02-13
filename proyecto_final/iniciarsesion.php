<?php 
include "header.php"; 
$registrado="0";
?>
		
		<form id="form1" action="carrito.php" method = "POST">
		<nav id="menu2">
			<ul>
			
			<p> </p><p> </p>
			<li>
				<label for="mail">Correo electrónico:</label>
				<input type="email" id="mail" name="user_mail" size="28" placeholder="ejemplo@gmail.com" required >
			</li>
			
			<p> </p><p> </p>
			<li>
				<label for="name">contraseña:</label>
				<input type="text" id="name" name="user_name" size="38" required >
			</li>
			<p> </p><p> </p>
		
				<button name="boton"  style=background-color:c000ff onclick= "validar();"> Iniciar sesión</button>
	
			</ul>
			</nav>
		</form>
		
	<script>
	function validar(){
	var respuesta=0;
	var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
	var email = document.getElementById("mail").value;
		if (!expresion.test(email)){
		window.alert("Correo electrónico incorrecto");
		
		}
		else {
		window.alert("Mensaje enviado");
		$registrado ="1"; 
		}

		}

	 </script>

	</body>
</html>
