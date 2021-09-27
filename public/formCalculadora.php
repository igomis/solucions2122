<?php
require_once ('../kernel.php');

function calculator($numA,$numB,$operation) {
    switch ($operation){
        case 'suma':
        case 'resta':
        case 'multiplicacio':
        case 'divisio': return $operation($numA,$numB);
        default: return null;
    }
}

function suma($numA,$numB) {
    return $numA + $numB;
}

function resta($numA,$numB) {
    return $numA - $numB;
}

function multiplicacio($numA,$numB) {
    return $numA * $numB;
}

function divisio($numA,$numB) {
    return $numA / $numB;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $resultat = calculator($_POST['numA'],$_POST['numB'],$_POST['operation']);
}
require_once ($route_views."formCalculadora.view.php");
