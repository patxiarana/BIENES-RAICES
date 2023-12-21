<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion  contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <form class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email">


            <label for="password">Password</label>
            <input type="password" placeholder="Tu Password" id="password">

        </fieldset>

        <input type="submit"  value="Iniciar Sesion" class="boton boton-verde">
    </form>


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