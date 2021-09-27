<?php
function isPasswordSafe($pass){
    return preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$`', $pass);
}

function insert($table,$fields) {
    $fieldsName = implode(",",array_keys($fields));
    $fieldsValue = implode("\",\"",$fields);
    $sentence = 'insert into %s (%s) values ("%s")';
    return sprintf($sentence,$table,$fieldsName,$fieldsValue);
}

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

$pass1 = 'HolaCocodrilo';
$pass2 = 'H0laC0codrilo';
$pass3 = 'HOl4_C0c0dr1l0';

echo "$pass1 is ".(isPasswordSafe($pass1)?'Safe':'Unsafe');
echo "<br/>$pass2 is ".(isPasswordSafe($pass2)?'Safe':'Unsafe');
echo "<br/>$pass3 is ".(isPasswordSafe($pass3)?'Safe':'Unsafe');

echo "<br/>".insert('Alumnos',['nom'=>'Ignasi','edat'=>18])."<br/>";

echo "4+7=". calculator(4,7,'suma');
echo "<br/>4/7=". calculator(4,7,'divisio');
echo "<br/>4%7=". calculator(4,7,'%');