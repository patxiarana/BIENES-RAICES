<?php


function incluirTemplate($nombre, $inicio = false) {
    require 'app.php';

    include TEMPLATE_URL . "/{$nombre}.php";

} ; 