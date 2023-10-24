<?php 
// Base de Datos 

require '../../includes/config/database.php'; 

  $db  = conectarDB() ; 

  /*echo  "<pre>" ; 

  var_dump($_POST) ; 

  echo "</pre>" ;  */

  //Arreglo con mensajes de errores 

$errores = [] ; 


  //Ejecutar el codigo despues de que el usuario envia el formulario 





  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$titulo = $_POST['titulo'] ; 
$precio = ($_POST['precio']);
$descripcion = $_POST['descripcion'] ; 
$habitaciones= ($_POST['habitaciones']); 
$wc = ($_POST['wc'] ); 
$estacionamiento = ($_POST['estacionamiento'] ); 
$vendedores_id = $_POST['vendedores_id'] ;


if(!$titulo) {
$errores[] = "Debes añadir un titutlo" ; 

}  if(!$precio) {
   $errores[] = "Debes añadir un precio" ; 
} if (strlen($descripcion) < 50  ) {
  $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres" ; 
}  if(!$habitaciones){
   $errores[] = "Debes añadir la cantidad de habitaciones" ; 
}  if(!$wc) {
   $errores[] = "Debes añadir  la cantidad de baños" ; 
} if(!$estacionamiento) {
   $errores[] = "Debes añadir la cantidad de estacionamientos" ;
}  if(!$vendedores_id) {
   $errores[] = "Debes añadir el  vendedor" ; 
}  ; 
/*
echo  "<pre>" ; 

var_dump($errores) ; 

echo "</pre>" ; */

// Revisar que todos los campos se hayan llenado correctamente - que el arreglo de errores este vacio 


if(empty($errores)) {
//Insertar en la base de datos 

$query = " INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedores_id) VALUES ('$titulo', '$precio', '$descripcion','$habitaciones','$wc','$estacionamiento','$vendedores_id') ";

//echo $query ; 

$resultado = mysqli_query($db, $query) ; 

if($resultado) {
   echo 'insertado correctamente';
} 
  }
} 

   require '../../includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>


<main class="contenedor-seccion">
 <h1>Crear</h1>

 <a href="/admin" class="boton boton-verde">Volver</a>

<?php 
foreach($errores as $error) : ?>
<div class="alerta error">
<?php echo $error; ?>

</div>


<?php endforeach; ?>


 <form class="formulario" method="POST" action="/admin/propiedades/crear.php">

<fieldset> 
<legend>Informacion General</legend>

<label for="titulo">Titulo:</label>
<input type="text" id="titulo" name="titulo" placeholder="titulo de la propiedad...">


<label for="precio">Precio:</label>

<input  type="number" id="precio" name="precio" placeholder="precio de la propiedad...">

<label for="imagen">imagen:</label>
<input type="file" id="imagen" accept="image/jpeg, image/png">

<label for="Descripcion">Descripcion</label>
<textarea  id="descripcion" name="descripcion" ></textarea>
</fieldset>

<fieldset>
   <legend>Informacion de la Propiedad</legend>


   <label for="habitaciones">Habitaciones:</label>
   <input type="number" name="habitaciones" id="habitaciones" placeholder="ej 3 ..." min="1" max="9" >


   
   <label for="wc">Baños:</label>
   <input type="number" id="wc" name="wc" placeholder="ej 2 ..." min="1" max="9" >


   <label for="estacionamiento">Estacionamiento:</label>
   <input type="number" name="estacionamiento" id="estacionamiento" placeholder="ej 2 ..." min="1" max="9" >

</fieldset>


<fieldset>
   <legend>Vendedor</legend>

   <select name="vendedores_id">
   <option value="" disabled selected>--Seleccione--</option>
      <option value="1">Patxi</option>
      <option value="2" >Karen</option>
   </select>
</fieldset>

<input type="submit" value="Crear Propiedad" class="boton boton-verde">
</form>

</main>

<?php 
   incluirTemplate('footer') ; 
?>
