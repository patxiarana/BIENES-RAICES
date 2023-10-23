<?php 
// Base de Datos 

require '../../includes/config/database.php'; 

  $db  = conectarDB() ; 

   require '../../includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>


<main class="contenedor-seccion">
 <h1>Crear</h1>

 <a href="/admin" class="boton boton-verde">Volver</a>


 <form class="formulario">

<fieldset> 
<legend>Informacion General</legend>

<label for="titulo">Titulo:</label>
<input type="text" id="titulo" placeholder="titulo de la propiedad...">


<label for="precio">Precio:</label>
<input type="number" id="precio" placeholder="precio de la propiedad...">

<label for="imagen">imagen:</label>
<input type="file" id="imagen" accept="image/jpeg, image/png">

<label for="Descripcion">Descripcion</label>
<textarea  id="descripcion" ></textarea>
</fieldset>

<fieldset>
   <legend>Informacion de la Propiedad</legend>


   <label for="habitaciones">Habitaciones:</label>
   <input type="number" id="habitaciones" placeholder="ej 3 ..." min="1" max="9" >


   
   <label for="wc">Baños:</label>
   <input type="number" id="wc" placeholder="ej 2 ..." min="1" max="9" >


   <label for="estacionamiento">Estacionamiento:</label>
   <input type="number" id="estacionamiento" placeholder="ej 2 ..." min="1" max="9" >

</fieldset>


<fieldset>
   <legend>Vendedor</legend>

   <select>
   <option value="" disabled selected>--Seleccione--</option>
      <option value="1">Patxi</option>
      <option value="2">Karen</option>
   </select>
</fieldset>

<input type="submit" value="Crear Propiedad" class="boton boton-verde">
</form>

</main>

<?php 
   incluirTemplate('footer') ; 
?>
