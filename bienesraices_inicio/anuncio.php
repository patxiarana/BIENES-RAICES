<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}
require  'includes/config/database.php';
$db = conectarDB(2);

//consultar 
$query = "SELECT * FROM propiedades WHERE id = $id";


//obtener los resultados 
$resultado = mysqli_query($db, $query);

if (!$resultado->num_rows) {
    header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion  contenido-centrado">
    <h1><?php echo $propiedad['titulo']; ?></h1>

    <img loading="lazy" src="/../imagenes/<?php echo $propiedad['imagen'] . '.jpg'; ?>" alt="imagen de la propiedad">


    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad['precio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>
        <?php echo $propiedad['descripcion']; ?>
    </div>
</main>


<footer class="footer seccion">
    <div class="contenedor-footer">
        <nav class="navegacion">
            <a href="nosotros.html">Nosotros</a>
            <a href="anuncios.html">Anuncios</a>
            <a href="blog.html">Blog</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Todos los Derechos Reservados 2023</p>
</footer>

<script src="build/js/bundle.min.js"></script>
</body>
<?php
mysqli_close($db)
?>

</html>