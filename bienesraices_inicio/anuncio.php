<?php 
   require 'includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>


    <main class="contenedor seccion  contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img  loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>

        <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
               <img   class="icono"  loading="lazy" src="build/img/icono_wc.svg"   alt="icono wc">
               <p>3</p>
            </li>
            <li>
               <img   class="icono"  loading="lazy" src="build/img/icono_estacionamiento.svg"   alt="icono estacionamiento">
               <p>3</p>
            </li>
            <li>
               <img  class="icono"  loading="lazy" src="build/img/icono_dormitorio.svg"   alt="icono dormitorio">
               <p>4</p>
            </li>
           </ul>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, libero nec tincidunt volutpat, elit nulla interdum ante,
            non efficitur dui odio a lectus. Sed varius bibendum purus, et scelerisque sapien volutpat non. Cras in sem sed nisi bibendum venenatis. 
            Curabitur laoreet justo eget ipsum tempor, ac laoreet nulla mattis. Duis non quam nec augue vehicula luctus sit amet ut sapien
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, libero nec tincidunt volutpat, elit nulla interdum ante,
            non efficitur dui odio a lectus. Sed varius bibendum purus, et scelerisque sapien volutpat non. Cras in sem sed nisi bibendum venenatis. 
            Curabitur laoreet justo eget ipsum tempor, ac laoreet nulla mattis. Duis non quam nec augue vehicula luctus sit amet ut sapien </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, libero nec tincidunt volutpat, elit nulla interdum ante,
             non efficitur dui odio a lectus. Sed varius bibendum purus, et scelerisque sapien volutpat non. Cras in sem sed nisi bibendum venenatis. 
             Curabitur laoreet justo eget ipsum tempor, ac laoreet nulla mattis. Duis non quam nec augue vehicula luctus sit amet ut sapien </p>
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
</html>