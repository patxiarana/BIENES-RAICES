<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="imagen contacto" loading="lazy">
    </picture>
    <h2>Llene el formulario de contacto</h2>
    <form class="formulario" action="">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email">


            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion Sobre la Propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>


            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">

        </fieldset>
        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>

            <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>


            <label for="Fecha">Fecha:</label>
            <input type="date" id="Fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00">

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
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