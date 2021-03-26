<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Affichage tableaux</title>
</head>
<body>
    <h1 class="row justify-content-center"> AGENDA </h1>
    <div class="container-lg">
    <table class="table table-info table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
    <?php
        $agenda = fopen("AGENDA.txt", "r") or die ("Impossible d'ouvrir le fichier AGENDA");
    
        while (!feof($agenda)){
    
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);

            for ($i = 0; $i < 5; $i++){
                if ($i == 0){
                    $id = $tabLigne[$i];
                } else if ($i == 1){
                    $nom = $tabLigne[$i];
                } else if ($i == 2){
                    $prenom = $tabLigne[$i];
                } else if ($i == 3){
                    $mail = $tabLigne[$i];
                } else if ($i == 4){
                    $telephone = $tabLigne[$i];
                }
            }   
            echo "<tr>
                <td> $id </td>
                <td> $nom </td>
                <td> $prenom </td>
                <td> $mail </td>
                <td> $telephone </td>
                <td><div class='container-sm'><div class='row row-cols-2'><div class='col'><a href='http://127.0.0.1/formulaire_modif_HTML.php?id=$tabLigne[0]'><button class='btn btn-warning' type='button'> Modifier</button></a></div><div class='col'><form action='supprimer.php?id=$tabLigne[0]' method='post'><button type='submit' class='btn btn-danger'>Supprimer</button></form></div></div></div></td>
                </tr>";  
        }
        fclose($agenda) ?>
        </tbody>   
    </table>
    </div> 
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-3">
            <a href="http://127.0.0.1/formulaire_HTML.php"><button class="btn btn-dark bt-lg" type="button">Ajouter un nouveau contact</button></a>
            </div>
        </div>
    </div>

</body>
</html>