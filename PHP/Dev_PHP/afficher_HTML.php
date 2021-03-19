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
    <table class="table table-info table-hover">
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
                <td><button class='btn btn-warning' type='button'> <a href='http://127.0.0.1/formulaire_modif_HTML.php?id=$tabLigne[0]'>Modifier</a></button></td>
                </tr>";  
        }
        fclose($agenda) ?>
        </tbody>   
    </table>
    </div> 
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-warning" type="button"> <a href="http://127.0.0.1/formulaire_HTML.php">Ajouter un nouveau contact</a></button>
    </div>
</body>
</html>