<?php
require_once ('../kernel.php');
$hobbies = ['Videojuegos','Futbol','Baloncesto','Tenis','Leer','Buscar Gamusinos'];
$errors=[];

if (isPost() && cfsr()) {
    // validació camps
    $dni = isRequired('dni',$errors);
    $name = isRequired('name', $errors);
    $data = isBefore('data', $errors);
    $hobby = $_POST['hobby'];
    $genre = $_POST['genre'];
    $fitxer = saveFile('image','image/png','fotos',$errors);

    if (!count($errors)){
        $query = require_once('../bootstrap.php');
        $query->insert('alumnes',compact('dni','name','data','hobby','genre','fitxer'));
        loadView('resFormulario',compact('name','data','hobby','genre','fitxer','hobbies'));
        die();
    }
}

loadView('formulario',compact('hobbies','errors'));

