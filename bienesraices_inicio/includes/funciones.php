<?php


function incluirTemplate($nombre, $inicio = false)
{
    require 'app.php';

    include TEMPLATE_URL . "/{$nombre}.php";
};


function estaAutenticado(): bool
{
    session_start();
    $auth = $_SESSION['login'];

    if ($auth) {
        return true;
    }

    return false;
}
