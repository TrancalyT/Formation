<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Affichage tableaux</title>
</head>
<body>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">TELEPHONE</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $agenda = fopen("AGENDA.txt", "r") or die ("Impossible d'ouvrir le fichier AGENDA");
    
        while (!feof($agenda)){
    
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);

            for ($i = 0; $i < 4; $i++){
                if ($i == 0){
                    $nom = $tabLigne[$i];
                } else if ($i == 1){
                    $prenom = $tabLigne[$i];
                } else if ($i == 2){
                    $mail = $tabLigne[$i];
                } else if ($i == 3){
                    $telephone = $tabLigne[$i];
                }
            }   
            echo "<tr>
                <td> $nom </td>
                <td> $prenom </td>
                <td> $mail </td>
                <td> $telephone </td>
                </tr>";  
        }
        fclose($agenda) ?>
        </tbody>
    </table>
</body>
</html>

