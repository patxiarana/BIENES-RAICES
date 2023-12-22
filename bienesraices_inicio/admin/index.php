<?php
session_start();

$auth = $_SESSION['login'];

if (!$auth) {

   header('Location: /');
};


if (!$auth) {

   header('Location: /');
};

//Importar la conexion 

require '../includes/config/database.php';

$db  = conectarDB();


//Esciribir la La Query 

$query = "SELECT * FROM propiedades";



//Consultar la BD 
$resultadoConsulta = mysqli_query($db, $query);




//Muestra Mensaje condicional 
$resultado = $_GET['resultado'] ?? null;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id = $_POST['id'];
   $id = filter_var($id, FILTER_VALIDATE_INT);

   if ($id) {
      //Eliminar el archivo 

      $query = "SELECT imagen FROM propiedades WHERE id = $id";

      $resultado = mysqli_query($db, $query);
      $propiedad = mysqli_fetch_assoc($resultado);

      unlink('../imagenes/' . $propiedades['imagen'] . 'jpg');


      //Eliminar la propiedad
      $query = "DELETE FROM propiedades WHERE id = $id";
      $resultado = mysqli_query($db, $query);

      if ($resultado) {
         header('locations:/admin?resultado=3');
      }
   }
}

//Inculye un template 
require '../includes/funciones.php';
incluirTemplate('header');




?>

<main class="contenedor-seccion">
   <h1>Administrador de Bienes Raices</h1>
   <?php if (intval($resultado) == 1) : ?>
      <p class="alerta exito">Anuncio Creado Correctamente</p>
   <?php elseif (intval($resultado) == 2) :  ?>
      <p class="alerta exito">Anuncio Actualizado Correctamente</p>
   <?php elseif (intval($resultado) == 3) :  ?>
      <p class="alerta exito">Anuncio Emilinado Correctamente</p>
   <?php endif;   ?>


   <a href="admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>


   <table class="propiedades">
      <thead>
         <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody> <!--- Mostrar Resultados  -->
         <?php while ($propiedades = mysqli_fetch_assoc($resultadoConsulta)) :   ?>
            <tr>
               <td><?php echo $propiedades['id']; ?></td>
               <td><?php echo $propiedades['titulo']; ?></td>
               <td> <img src="/imagenes/<?php echo $propiedades['imagen'] . '.jpg'; ?>" class="imagen-tabla" /> </td>
               <td>$ <?php echo $propiedades['precio']; ?></td>
               <td>
                  <form method="POST" class="w-100">
                     <input type="hidden" name="id" value="<?php echo $propiedades['id']; ?>" />
                     <input type="submit" class="boton-rojo-block" value="Eliminar" />
                  </form>
                  <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedades['id']; ?>" class="boton-amarillo-block">Actualizar</a>
               </td>
            </tr>
         <?php endwhile; ?>
      </tbody>

   </table>

</main>

<?php
//Cerrar la coneccion 
mysqli_close($db);
incluirTemplate('footer');
?>