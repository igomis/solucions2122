<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/examples/styles.css" />
</head>
<body>
<header>
    <h1>
        Importar fitxer
    </h1>
</header>
<table>
    <tr>
        <th>Nom</th><th>Edat</th><th>Pais</th><th>Dorsal</th><th>Posicio</th><th>Gols</th>
    </tr>
    <?php foreach($planter as $key => $jugador): ?>
        <tr>
        <?php foreach($jugador  as $feature): ?>
            <td><?= $feature ?></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
