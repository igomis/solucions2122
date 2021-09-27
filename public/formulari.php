<?php
require_once ('../kernel.php');
$hobbies = ['Videojuegos','Futbol','Baloncesto','Tenis','Leer','Buscar Gamusinos'];
$errors=[];

if (isPost() && cfsr()) {
    // validació camps
    $name = isRequired('name', $errors);
    $data = isBefore('data', $errors);
    $hobby = $_POST['hobby'];
    $genre = $_POST['genre'];
    $fitxer = saveFile('image','image/png','fotos',$errors);

    if (!count($errors)){
        loadView('resFormulario',compact('name','data','hobby','genre','fitxer','hobbies'));
        die();
    }
}

loadView('formulario',compact('hobbies','errors'));

