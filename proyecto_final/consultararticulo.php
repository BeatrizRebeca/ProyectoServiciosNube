<?php
$conexion= mysqli_connect("127.0.0.1", "root", "", "contacto");
  	$result1= mysqli_query($conexion, "select descripcion from inventario where idarticulo =1;");
  	$result2= mysqli_query($conexion, "select descripcion from inventario where idarticulo =2;");
  	$result3= mysqli_query($conexion, "select descripcion from inventario where idarticulo =3;");
  	$result4= mysqli_query($conexion, "select descripcion from inventario where idarticulo =4;");

	$descripcion1 = $result1->fetch_array()[0] ?? '';
	$descripcion2 = $result2->fetch_array()[0] ?? '';
	$descripcion3 = $result3->fetch_array()[0] ?? '';
	$descripcion4 = $result4->fetch_array()[0] ?? '';


?>