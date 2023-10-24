<?php 
// Base de Datos 

require '../../includes/config/database.php'; 

  $db  = conectarDB() ; 

  echo  "<pre>" ; 

  var_dump($_POST) ; 

  echo "</pre>" ; 

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$titulo = $_POST['titulo'] ; 
$precio = floatval($_POST['precio']);
$descripcion = $_POST['descripcion'] ; 
$habitaciones= intval($_POST['habitaciones']); 
$wc = intval($_POST['wc'] ); 
$estacionamiento = intval($_POST['estacionamiento'] ); 
$vendedores_id = isset($_POST['vendedores_id']) ? intval($_POST['vendedores_id']) : 1;

//Insertar en la base de datos 



$query = " INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedores_id) VALUES ('$titulo', '$precio', '$descripcion','$habitaciones','$wc','$estacionamiento','$vendedores_id') ";

//echo $query ; 

$resultado = mysqli_query($db, $query) ; 

if($resultado) {
   echo 'insertado correctamente';
} 
  }

   require '../../includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>


<main class="contenedor-seccion">
 <h1>Crear</h1>

 <a href="/admin" class="boton boton-verde">Volver</a>


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
