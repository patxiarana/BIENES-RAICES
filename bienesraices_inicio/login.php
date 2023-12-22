<?php


require 'includes/config/database.php';
$db = conectarDB(4);
//Autenticar el usuario 
$errores = [];




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST) ; 

    $email =  mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password =  mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    };

    if (!$password) {
        $errores[] = "El password es obligatorio";
    }
    if (empty($errores)) {
        //Revisar si el usuario existe 
        $query = "SELECT * FROM usuarios WHERE email =  '$email'";
        $resultado = mysqli_query($db, $query);



        if ($resultado->num_rows) {
            // Revisar si el password es correcto 
            $usuario = mysqli_fetch_assoc($resultado);

            //    var_dump($usuario['password']) ; 
            //verificar si el password es correcto o no  
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                //el usuario esta autenticado
                session_start();

                //Llenar el arreglo de la session 
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin') ; 
            } else {
                //password incorrecto
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El Usuario no existe";
        }
    }
}






//Incluye el Header
require 'includes/funciones.php';
incluirTemplate('header');
?>


<main class="contenedor seccion  contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach ($errores as $error) : ?>

        <div class="alerta error">
            <?php echo $error ?>
        </div>

    <?php endforeach; ?>



    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email">


            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu Password" id="password">

        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
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