<?php
    $suma = $_GET['x']+$_GET['y'];
    $resta = $_GET['x']-$_GET['y'];
    $multiplicacio = $_GET['x']*$_GET['y'];
    $divisio = $_GET['x']/$_GET['y'];

    $ruta_vistas = $_SERVER['DOCUMENT_ROOT'].'/../views/';
    require($ruta_vistas.'calculadora.view.php');
