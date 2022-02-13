<?php 
include "header.php";
include "consultararticulo.php"; 
include "consultarpreciodescuento.php"; 

if (isset($_POST['boton1'])){
	$articulo = "1";
	$cantidad= $_POST['cantidad1'];
			
	$sql = "INSERT INTO carrito (idarticulo,cantidad,precio) VALUES ('$articulo', '$cantidad',$preciodescuento1)";
	if (mysqli_query($conexion, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
	}

if (isset($_POST['boton2'])){
	$articulo = "2";
	$cantidad= $_POST['cantidad2'];
			
	$sql = "INSERT INTO carrito (idarticulo,cantidad,precio) VALUES ('$articulo', '$cantidad',$preciodescuento1)";
	if (mysqli_query($conexion, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
	}
if (isset($_POST['boton3'])){
	$articulo = "3";
	$cantidad= $_POST['cantidad3'];
			
	$sql = "INSERT INTO carrito (idarticulo,cantidad,precio) VALUES ('$articulo', '$cantidad',$preciodescuento1)";
	if (mysqli_query($conexion, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
	}
if (isset($_POST['boton4'])){
	$articulo = "4";
	$cantidad= $_POST['cantidad4'];
			
	$sql = "INSERT INTO carrito (idarticulo,cantidad,precio) VALUES ('$articulo', '$cantidad',$preciodescuento1)";
	if (mysqli_query($conexion, $sql)) {
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}
	}

?>

<div>
				<table class="table" id="tabla2">
					<thead>
						<tr>
							<th>Articulo    </th>
							<th>Cantidad   </th>
							<th>Precio   </th>					
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "select * from carrito";
							$consulta = mysqli_query($conexion, $query);

							while($row = mysqli_fetch_array($consulta)) { ?>
								<tr>
									<td> <?php echo $row['idarticulo'] ?> </td>
									<td> <?php echo $row['cantidad'] ?> </td>
									<td> <?php echo $row['precio'] ?> </td>
								</tr>
							
							<?php } 
							?>
					</tbody>
				</table>
			</div>
<div>
				<table class="table" id="tabla2">
					<thead>
						<tr>
							<th>    </th>
							<th > </th>
							<th>   </th>					
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "select sum(precio*cantidad) from carrito";
							$consulta = mysqli_query($conexion, $query);

							while($row = mysqli_fetch_array($consulta)) { ?>
								<tr>
									<td>  </td>
									<td>  </td>
									<td align="center"> <strong><?php echo "       Total: ". $row[0] ?></strong> </td>
								</tr>
							
							<?php } 
							mysqli_close($conexion);?>
					</tbody>
				</table>
			</div>
</body>
</html>