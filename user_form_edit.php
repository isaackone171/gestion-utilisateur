<?php 

require_once(__DIR__.'/user_read.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs - Ajout de nouveaux utilisateurs</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="css/style2.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="formulaire">
        <div class="container">

           <form action="user_update.php" method="POST">
                <legend>MODIFIER UN UTILISATEUR</legend>
                <div class="mb-3">
                    <label for="id" class="form-label">Identifiant utilisateur</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id']; ?>" >
                </div>


                <div class="mb-3">
                    <label for="last_name" class="form-label">Nom utilisateur </label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" required>
                    <div id="title-help" class="form-text">Choisissez un nom percutant !</div>
                </div>

                <div class="mb-3">
                    <label for="first_name" class="form-label">Prenom utilisateur </label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" required>        
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Departement</label>
                    <input type="text" class="form-control" id="department" name="department" value="<?php echo $user['department']; ?>" required>                
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Contact </label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" value="<?php echo $user['phone_number']; ?>" required>                    
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value ="<?php echo $user['email']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
                 <a class="btn btn-danger" href="index.php">Retour</a>
                
            </form>
        </div>
    </div>
</body>
</html>