<?php
function conectarDB($numero = null): mysqli
{

    if ($numero == 1) {
        require('../../vendor/autoload.php');
        $dotenv = Dotenv\Dotenv::createImmutable('../../');
        $dotenv->load();
        $password = $_ENV['PASSWORD'];
        $db = mysqli_connect('localhost', 'root', $password, 'bienesraices_crud');
    } else if ($numero == 2) { 

        require  'vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable('./');
        $dotenv->load();
        $password = $_ENV['PASSWORD'];
        $db = mysqli_connect('localhost', 'root', $password, 'bienesraices_crud');


    } else if ($numero == 3) { 
        require  '../../vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable('../../');
        $dotenv->load();
        $password = $_ENV['PASSWORD'];
        $db = mysqli_connect('localhost', 'root', $password, 'bienesraices_crud');
    } else if ($numero == 4 ) {
        require "./vendor/autoload.php";
        $dotenv = Dotenv\Dotenv::createImmutable('./');
        $dotenv->load();
        $password = $_ENV['PASSWORD'];
        $db = mysqli_connect('localhost', 'root', $password, 'bienesraices_crud');
    }

    else {
        require('../vendor/autoload.php');
        $dotenv = Dotenv\Dotenv::createImmutable('../');
        $dotenv->load();
        $password = $_ENV['PASSWORD'];
        $db = mysqli_connect('localhost', 'root', $password, 'bienesraices_crud');

        if (!$db) {
            echo 'Error: No se pudo conectar a la base de datos.';
            exit;
        }
    }

    return $db;
}
