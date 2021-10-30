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
    Ofegat
</header>
<?php if (($intents_invalids) > 6): ?>
    <h1>OFEGAT</h1>
<?php endif ?>
<?php if ($succes): ?>
    <h1>HAS GUANYAT</h1>
<?php endif ?>
<form method="POST" action="ofegat.php">
    <div class="form-group">
        <label for="letra">Lletra:</label>
        <input name="letra" type="text" class="form-control <?= isValidClass('letra',$errors) ?>" id="letra" aria-describedby="letraHelp" placeholder="Enter Letter">
        <small id="letrarHelp" class="form-text text-muted">Tria lletra</small>
        <?= showError('letra',$errors) ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

