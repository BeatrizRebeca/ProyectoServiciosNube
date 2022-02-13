<?php include "header.php"; ?>
<?php include "consultararticulo.php"; ?>
<?php include "consultarprecio.php"; ?>
<?php include "consultarpreciodescuento.php"; ?>

<form action="carrito.php" method = "POST">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img href="#"><image src= "<?php echo base_url(); ?>images/1-jaula_hampster.png"  width="130" height="175" >
          <div class="card-body">
            <div>
            <h5 class="card-title"><?php echo " $descripcion1  ";?> </h5>
            <table>
              <th> <p class="card-text" style="color:red;"><big><strong><?php echo " $ "." $preciodescuento1  ";?></strong></big></p> </th>
              <th> <p class="card-text"><small><del><?php echo "     $ "." $precionormal1  ";?></del></small></p></th>
            </table>
            <table>
              <th><input id="cantidad1" name="cantidad1" size="28" placeholder="cantidad"  ></th>
              <th><button class="btn btn-primary" name="boton1" type="submit">Agregar al carrito</button></th>       
            </table>
  
          </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img href="#"><image src= "<?php echo base_url(); ?>images/2-alimentador_mascotas.png"  width="130" height="175" >
          <div class="card-body">
            <h5 class="card-title"><?php echo " $descripcion2  ";?> </h5>
            <table>
              <th> <p class="card-text" style="color:red;"><big><strong><?php echo " $ "." $preciodescuento2  ";?></strong></big></p> </th>
              <th> <p class="card-text"><small><del><?php echo "     $ "." $precionormal2  ";?></del></small></p></th>
            </table>
            <table>
               <th><input id="cantidad2" name="cantidad2" size="28" placeholder="cantidad"  ></th>
              <th><button class="btn btn-primary" name="boton2" type="submit">Agregar al carrito</button></th>       
            </table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img href="#"><image src= "<?php echo base_url(); ?>images/3-cama_mascota.png"  width="130" height="175" >
          <div class="card-body">
            <h5 class="card-title"><?php echo " $descripcion3  ";?> </h5>
            <table>
              <th> <p class="card-text" style="color:red;"><big><strong><?php echo " $ "." $preciodescuento3  ";?></strong></big></p> </th>
              <th> <p class="card-text"><small><del><?php echo "     $ "." $precionormal3  ";?></del></small></p></th>
            </table>
            <table>
               <th><input id="cantidad3" name="cantidad3" size="28" placeholder="cantidad"  ></th>
              <th><button class="btn btn-primary" name="boton3"  type="submit">Agregar al carrito</button></th>       
            </table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img href="#"><image src= "<?php echo base_url(); ?>images/4-comida_perro.jpg"  width="130" height="175" >
          <div class="card-body">
            <h5 class="card-title"><?php echo " $descripcion4  ";?> </h5>
            <table>
              <th> <p class="card-text" style="color:red;"><big><strong><?php echo " $ "." $preciodescuento4  ";?></strong></big></p> </th>
              <th> <p class="card-text"><small><del><?php echo "     $ "." $precionormal4  ";?></del></small></p></th>
            </table>
            <table>
              <th><input id="cantidad4" name="cantidad4" size="28" placeholder="cantidad"  ></th>
              <th><button class="btn btn-primary" name="boton4" type="submit">Agregar al carrito</button></th>       
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
