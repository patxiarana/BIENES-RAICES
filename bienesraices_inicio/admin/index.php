<?php 

//Importar la conexion 

require '../includes/config/database.php'; 

  $db  = conectarDB() ; 


//Esciribir la La Query 

$query = "SELECT * FROM propiedades" ; 



//Consultar la BD 
$resultadoConsulta = mysqli_query($db, $query) ; 




//Muestra Mensaje condicional 
$resultado = $_GET['resultado'] ?? null ;

//Inculye un template 
   require '../includes/funciones.php' ; 
   incluirTemplate('header') ; 




?>

<main class="contenedor-seccion">
 <h1>Administrador de Bienes Raices</h1>
<?php if(intval($resultado) == 1 ) : ?>
 <p class="alerta exito">Anuncio Creado Correctamente</p>
 <?php endif ;?>
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
<?php while($propiedades = mysqli_fetch_assoc($resultadoConsulta)) :   ?>
   <tr>
      <td><?php echo $propiedades['id'] ; ?></td>
      <td><?php echo $propiedades['titulo'] ; ?></td>
      <td> <img src="/imagenes/<?php echo $propiedades['imagen'] . '.jpg' ; ?>" class="imagen-tabla"/>  </td>
      <td>$ <?php echo $propiedades['precio'] ; ?></td>
      <td> <a href="#"class="boton-rojo-block">Eliminar</a>
      <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedades['id'] ; ?>" class="boton-amarillo-block">Actualizar</a>
   </td>
   </tr>
   <?php endwhile; ?>
</tbody>

 </table>

</main>

<?php 
//Cerrar la coneccion 
mysqli_close($db) ; 
   incluirTemplate('footer') ; 
?>
