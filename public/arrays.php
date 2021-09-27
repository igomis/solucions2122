<?php

$alineacio = ['Buffon','Dani Alves','Pujol','Pique','Sergio Ramos','Iniesta','Xavi','Busquets','Messi','Ronaldo','Levandoski'];
$alineacio_ordenada = $alineacio;
asort($alineacio_ordenada);
function mostrar_array($vector):String
{
    $cadena = "<ul>";
    foreach ($vector as $jugador)
    {
        $cadena .= "<li>$jugador</li>";
    }
    return $cadena."</ul>";
}

echo '<p>Quants: '.count($alineacio).'<br/>';
echo 'Alineació: '.implode(' ',$alineacio).'<br/>';
echo 'Ordenats: '.mostrar_array($alineacio_ordenada);
echo 'Inversa: '.mostrar_array(array_reverse($alineacio));
echo 'El meu nom (Messi) està a la posició: '.array_search('Messi',$alineacio).'<p/>';

/* Alumnes */

$alumnes = [
    [
        'dni' => '000000000',
        'nom' => 'Pedro Picapiedra',
        'edat' => '19'
    ],
    [
        'dni' => '000000001',
        'nom' => 'Pablo Marmol',
        'edat' => '18'
    ],
];

?>

<table>
    <caption>Alumnes</caption>
    <?php foreach($alumnes as $key => $alumno):
         if ($key==0):
            $indices = array_keys($alumno);
     ?>
             <tr>
                <?php foreach($indices as $feature):?>
                        <th><?=$feature ?></th>
                <?php endforeach; ?>
            </tr>
         <?php endif; ?>
    <tr>
        <?php foreach($alumno as $value): ?>
            <td><?= $value ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>

/* Traduccions */

<?php
    echo "<p> ===ARRAY ASSOCIATIU=== <br/>";
    $traduccions  = array('Cocodrile' => 'Cocodril',
    'Cat' => 'Gat',
    'Dog' => 'Gos',
    'Bird' => 'Pardal',
    'Chicken' => 'Pollastre',
    'Pig' => 'Porc',
    'Butterfly' => 'Papallona',
    'Elephant' => 'Elefant',
    'Fish' => 'Peix',
    'Rabbit' => 'Conill');

    foreach($traduccions as $palabra => $traduccion) {
        echo "$palabra -> $traduccion <br>";
    }
    echo "</p>";
?>