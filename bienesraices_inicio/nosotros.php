<?php 
   require 'includes/funciones.php' ; 
   incluirTemplate('header') ; 
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nostros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
               <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
               </picture>
            </div>

          <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            
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

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectet,Lorem ipsum dolor sit amet, 
                    consectet.Lorem ipsum dolor sit amet, consectet</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectet,Lorem ipsum dolor sit amet, 
                    consectet.Lorem ipsum dolor sit amet, consectet</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectet,Lorem ipsum dolor sit amet, 
                    consectet.Lorem ipsum dolor sit amet, consectet</p>
            </div>
            </div>
    </section>



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