<?php
    require_once('../kernel.php');
    $query = require_once('../bootstrap.php');
    $alumnes = $query->selectAll('alumnes','dni','21652470V');

    loadView('alumnes',compact('alumnes'));

