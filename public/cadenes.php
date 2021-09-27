<?php
    $nom = $_GET['nom']??'Ignasi';
    $prefix = $_GET['prefix'];

    $nom = trim($nom,'/');
    echo 'Nom: '. $nom.'<br/>';
    echo 'Longitut: '.strlen($nom).'<br/>';
    echo 'Majuscules '.strtoupper($nom).'<br/>';
    echo 'Minuscules '.strtolower($nom).'<br/>';
    echo 'Zero '.str_ireplace('o','0',$nom).'<br/>';
    echo 'Count A/a '.substr_count(strtolower($nom),'a').'<br/>';
    echo 'Where A/a:'.stripos(strtolower($nom),'a').'<br/>'??"No hi es.'<br/>'";
    echo $prefix ? "Prefix $prefix:".strpos($nom,$prefix).'<br/>' : 'No hi ha prefix'.'<br/>';
