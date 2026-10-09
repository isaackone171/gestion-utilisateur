
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <div class="container">
        <div class="move">
            <h1>Liste du personnel</h1>
            <a class="btn btn-info btn-lg" style="margin-bottom:40px;"href="user_form_add.php">Ajouter</a>
        </div>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Département</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Koné</td>
                    <td>Isaac</td>
                    <td>Informatique</td>
                    <td>0151592992</td>
                    <td>isaackone171@gmail.com</td>
                    <td>
                        <div>
                            <a class="btn btn-secondary" href="user_form_edit.php">Modifier</a>
                            <a class="btn btn-danger" href="#">Supprimer</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>       
    </div>
    
</body>
</html>