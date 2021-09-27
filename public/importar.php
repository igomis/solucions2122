<?php
    require_once('../kernel.php');
    $fitxer = "../dades/EjemploPlantillas.csv";

    if (!$fp = fopen($fitxer, "r")){
        echo "No s'ha pogut obrir el fitxer $fitxer";
    }
    $contents = fread($fp,filesize($fitxer));
    $linees = explode(PHP_EOL,$contents);
    foreach ($linees as $linea){
       $resultats[] = explode(';',$linea);
    }
    $atMadrid = array_filter($resultats,function($arr){
        return (isset($arr[1]) && $arr[1] == 'Atlético de Madrid');
    });
    foreach ($atMadrid as $jugador){
        $planter[] = ['Nom' => $jugador[3].','.$jugador[4].' '.$jugador[5],
            'edat' => $jugador[7],
            'pais' => $jugador[9],
            'dorsal' => $jugador[11],
            'posició' => $jugador[10],
            'gols' => $jugador[17]];
    }
    usort($planter,function($a,$b){
        return $a['dorsal'] > $b['dorsal'];
    });


    loadView('importar',compact('planter'));
