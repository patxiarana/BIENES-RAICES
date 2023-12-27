<?php 
   require 'includes/funciones.php' ; 
   incluirTemplate('header') ;
?>


    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2>Casas y Depas en Venta</h2>
            <?php 
            require  '../bienesraices_inicio/includes/config/database.php' ; 
            $limite = 4  ;
            
            $db = conectarDB(4) ; 
             
            
            //consultar 
            $query = "SELECT * FROM propiedades LIMIT $limite" ; 
            
            
            //obtener los resultados 
            $resultado = mysqli_query($db, $query) ; 
            ?>
            <div class="contenedor-anuncios">
                <?php 
                while($propiedad = mysqli_fetch_assoc($resultado)) :  ?>
                <div class="anuncio">
                    <picture>
                    
                    <img loading="lazy" src="/../imagenes/<?php echo $propiedad['imagen'] . '.jpg'; ?>" alt="anuncio">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3><?php echo $propiedad['titulo']; ?></h3>
                        <p><?php echo $propiedad['descripcion']; ?></p>
                        <p class="precop"><?php echo $propiedad['precio']; ?></p>
                        <ul class="iconos-caracteristicas">
                         <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_wc.svg"   alt="icono wc">
                            <p><?php echo $propiedad['wc']; ?></p>
                         </li>
                         <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"   alt="icono estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                         </li>
                         <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_dormitorio.svg"   alt="icono dormitorio">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                         </li>
                        </ul>
                           
                    <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" alt="anuncio" class="boton-amarillo-block"> Ver Propiedad</a>
                    </div>
                </div>
                <?php endwhile;  ?>
             </div>
            
 ?>

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
</html>