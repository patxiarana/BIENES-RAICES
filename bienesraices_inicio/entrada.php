<?php 
   require 'includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>


    <main class="contenedor seccion  contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img  loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
        </picture>

        <p class="informacion-meta">Escrito el:<span>20/10/2023</span>por:<span>Admin</span></p>

        <div class="resumen-propiedad">
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