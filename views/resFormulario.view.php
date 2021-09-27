<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<header>
    Resultat Formulari
</header>
Nom:  <?= $name ?> <br/>;
Data de naixament:  <?= $data ?><br/>;
Gènere:  <?= $genre ?><br>;
Afició principal: <?= $hobbies[$hobby] ?> <br/>
Foto: <img src="/fotos/<?= $fitxer ?>" />
</body>
</html>
