<?php

$getData = $_GET;

if (!isset($getData['id']) || !is_numeric($getData['id'])) {
    echo('Il faut un identifiant pour supprimer un utilisateur.');
    return;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Supprimer la recette ?</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        
        <h1>Supprimer l'utlisateur ?</h1>
        <form action="user_post_delete.php" method="POST">
            <div class="mb-3 visually-hidden">
                <label for="id" class="form-label">Identifiant de l'utlisateur</label>
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $getData['id']; ?>">
            </div>

            <button type="submit" class="btn btn-danger">Supprimer définitivement</button>
        </form>
        <br />
    </div>

    
</body>
</html>