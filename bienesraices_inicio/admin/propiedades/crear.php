<?php

session_start();

$auth = $_SESSION['login'];

if (!$auth) {

   header('Location: /');
};




// Base de Datos 

require '../../includes/config/database.php';

$db  = conectarDB(1);

//Consultar para obtener los vendedores 

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


/*echo  "<pre>" ; 

  var_dump($_POST) ; 

  echo "</pre>" ;  */

//Arreglo con mensajes de errores 

$errores = [];

$titulo = '';
$precio =  '';
$descripcion =  '';
$wc =  '';
$habitaciones = '';
$estacionamiento =  '';
$vendedores_id =  '';

//Ejecutar el codigo despues de que el usuario envia el formulario 





if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   //Sanitizar 

   $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
   $precio = mysqli_real_escape_string($db, $_POST['precio']);
   $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
   $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
   $wc = mysqli_real_escape_string($db, $_POST['wc']);
   $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
   $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
   $creado = date('Y/m/d');


   //Asignar file a una variable 

   $imagen = $_FILES['imagen'];
   if (!$titulo) {
      $errores[] = "Debes añadir un titulo";
   }
   if (!$precio) {
      $errores[] = "Debes añadir un precio";
   }
   if (strlen($descripcion) < 50) {
      $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
   }
   if (!$habitaciones) {
      $errores[] = "Debes añadir la cantidad de habitaciones";
   }
   if (!$wc) {
      $errores[] = "Debes añadir  la cantidad de baños";
   }
   if (!$estacionamiento) {
      $errores[] = "Debes añadir la cantidad de estacionamientos";
   }
   if (!$vendedores_id) {
      $errores[] = "Debes añadir el  vendedor";
   }
   if (!$imagen['name']) {
      $errores[] = 'La imagen es Obligatoria';
   };

   //Validar por tamaño (100 kb maximo)

   $medida = 1000 * 100;
   $imagenName = $imagen['name'];

   if ($imagen["size"] > $medida) {
      $errores[] = 'La imagen es muy pesada';
   };





   /*
echo  "<pre>" ; 

var_dump($errores) ; 

echo "</pre>" ; */

   // Revisar que todos los campos se hayan llenado correctamente - que el arreglo de errores este vacio 


   if (empty($errores)) {
      //Insertar en la base de datos 

      /**Subida De Archivos**/

      //Crear una carpeta  

      $carpetaImagenes = '../../imagenes/';


      if (!is_dir($carpetaImagenes)) {
         mkdir($carpetaImagenes);
      }

      //Generar un nombre unico 

      $nombreImagen = md5(uniqid(rand(), true));

      //Subir imagen 

      move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg");





      $query = " INSERT INTO propiedades (titulo,precio,imagen,descripcion,habitaciones,wc,estacionamiento,creado,vendedores_id) VALUES ('$titulo', '$precio','$nombreImagen', '$descripcion','$habitaciones','$wc','$estacionamiento','$creado','$vendedores_id') ";

      //echo $query ; 

      $resultado = mysqli_query($db, $query);

      if ($resultado) {
         //Redireccionar al usuario 

         header('Location:/admin?resultado=1');
      }
   }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor-seccion">
   <h1>Crear</h1>

   <a href="/admin" class="boton boton-verde">Volver</a>

   <?php
   foreach ($errores as $error) : ?>
      <div class="alerta error">
         <?php echo $error; ?>

      </div>


   <?php endforeach; ?>


   <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">

      <fieldset>
         <legend>Informacion General</legend>

         <label for="titulo">Titulo:</label>
         <input type="text" id="titulo" name="titulo" placeholder="titulo de la propiedad..." value="<?php echo $titulo; ?>">


         <label for="precio">Precio:</label>

         <input type="number" id="precio" name="precio" placeholder="precio de la propiedad..." value="<?php echo $precio; ?>">

         <label for="imagen">imagen:</label>
         <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

         <label for="Descripcion">Descripcion</label>
         <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
      </fieldset>

      <fieldset>
         <legend>Informacion de la Propiedad</legend>


         <label for="habitaciones">Habitaciones:</label>
         <input type="number" name="habitaciones" id="habitaciones" placeholder="ej 3 ..." min="1" max="9" value="<?php echo $habitaciones; ?>">



         <label for="wc">Baños:</label>
         <input type="number" id="wc" name="wc" placeholder="ej 2 ..." min="1" max="9" value="<?php echo $wc; ?>">


         <label for="estacionamiento">Estacionamiento:</label>
         <input type="number" name="estacionamiento" id="estacionamiento" placeholder="ej 2 ..." min="1" max="9" value="<?php echo $estacionamiento; ?>">

      </fieldset>


      <fieldset>
         <legend>Vendedor</legend>

         <select name="vendedores_id">
            <option disabled selected>--Seleccione--</option>
            <?php while ($row =  mysqli_fetch_assoc($resultado)) :  ?>
               <option <?php echo $vendedores_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre']  . " "  . $row['apellido']; ?> </option>
            <?php endwhile;  ?>
         </select>
      </fieldset>

      <input type="submit" value="Crear Propiedad" class="boton boton-verde">
   </form>

</main>

<?php
incluirTemplate('footer');
?>