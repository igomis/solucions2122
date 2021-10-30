<?php

include_once ('../kernel.php');
use App\Ofegat;
use App\Paraula;

if (!isset($_SESSION['user'])) {

    header('Location:/login.php');

    die();
}
$errors = [];
$succes = 0;
$ofegat = isset($_SESSION['ofegat'])
    ? unserialize($_SESSION['ofegat'])
    : new Ofegat(Paraula::aleatoria());
$intents_invalids = $_SESSION['intents_invalids'] ?? 0;

if (isPost() && cfsr()) {
    $letra = is_letter('letra',$errors);

    if (!count($errors)){
        try {
          $intents_invalids += $ofegat->addLetter($letra);
          $succes = $ofegat->render();

        } catch (Exception $e){
           echo $e->getMessage();
        }
    }
    $_SESSION['ofegat'] = serialize($ofegat);
    $_SESSION['intents_invalids'] = $intents_invalids;
}
if ($intents_invalids >= 6 || $succes ){
    unset($_SESSION['ofegat']);
    unset($_SESSION['intents_invalids']);
}
loadView('ofegat',compact('errors','succes','intents_invalids'));