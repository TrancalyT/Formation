<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Tableaux</title>
</head>
<body>
<h1 class="row justify-content-center"> Tableaux de gestion des employés </h1>
</br>

<div class="container-lg">

  <?php

  $bdd = mysqli_init();
  mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");

  $nbAjout = mysqli_query($bdd, "SELECT COUNT(*) FROM EMP2 WHERE DATE_AJOUT = DATE(SYSDATE());");

  $dataNbAjout = mysqli_fetch_array($nbAjout);
  $compteur = $dataNbAjout[0];
  
  ?>

    <div class="row justify-content-between">
        <div class="col-3">
          <span class="badge bg-dark bg-gradient text-wrap" style="width: 10rem;"> <?php echo("Nombre d'ajout aujourd'hui : " .$compteur);?> </span>
        </div>
        <div class="col-1 text-center">
            <a href="ajouter.php"><span style="font-size: 30px; color: black;"><i class="fas fa-user-plus"></i></span></button></a>
        </div>
    </div>

    


    <table class="table table-info table-hover table-bordered vertical-align-middle">
        <thead>
            <tr>
                <th class='text-center' scope="col">NOM</th>
                <th class='text-center' scope="col">PRENOM</th>
                <th class='text-center' scope="col">EMPLOI</th>
                <th class='text-center' scope="col">SUPERIEUR</th>
                <th class='text-center' scope="col">SERVICE</th>
                <th class='text-center' scope="col"></th>
                <th class='text-center' scope="col"></th>
                <th class='text-center' scope="col"></th>
            </tr>
        </thead>

    <?php 

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");

        $searchSup = mysqli_query($bdd, "SELECT DISTINCT SUP FROM EMP2;");
        $dataSup = mysqli_fetch_all($searchSup, MYSQLI_ASSOC);

        $result = mysqli_query($bdd, "SELECT E1.NOEMP AS NOEMP, E1.NOM AS NOM, E1.PRENOM AS PRENOM, E1.EMPLOI AS EMPLOI, E1.SUP AS SUP, E1.NOSERV AS NOSERV, SERVICE, E2.NOM AS NOMSUP, E2.PRENOM AS PRENOMSUP
                                      FROM EMP2 AS E1 INNER JOIN SERV2 ON E1.noserv = SERV2.noserv
                                                      LEFT JOIN EMP2 AS E2 ON E1.SUP = E2.NOEMP;");
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($data as $key => $value){
            if(is_array($value)){
                foreach($value as $key => $value){
                    if ($key == 'NOEMP'){
                        $noemp = $value;
                    } else if ($key == 'NOM'){
                        $nom = $value;
                    } else if ($key == 'PRENOM'){
                        $prenom = $value;
                    } else if ($key == 'EMPLOI'){
                        $emploi = $value;
                    } else if ($key == 'SUP'){
                        $sup = $value;
                    } else if ($key == 'SERVICE'){
                        $service = $value;
                    } else if ($key == 'NOSERV'){
                        $noserv = $value;
                    } else if ($key == 'NOMSUP'){
                      $nomsup = $value;
                    } else if ($key == 'PRENOMSUP'){
                      $prenomsup = $value;
                    }
                }
            }

            foreach($dataSup as $key => $value){
              if(is_array($value)){
                foreach($value as $key => $value){
                  if ($noemp == $value){
                    $estSup = $value;
                  }   
                }
              }
            }

            if ($noemp == $estSup){

              echo "<tr>
              <td  class='text-center'> $nom </td>
              <td  class='text-center'> $prenom </td>
              <td  class='text-center'> $emploi </td>
              <td  class='text-center'> $sup - $nomsup $prenomsup </td>
              <td  class='text-center'> $noserv - $service </td>
              <td  class='text-center'> <a href='detail.php?noemp=$noemp'><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-bs-whatever='$noemp'>Détails</button></a></td>
              <td  class='text-center'> <a href='modifier.php?nom=$nom&prenom=$prenom&emploi=$emploi&sup=$sup&service=$service&noemp=$noemp&noserv=$noserv'><button type='button' class='btn btn-warning'>Modifier</button></a></td>
              <td  class='text-center'> <span style='font-size: 25px; color: crimson;'><i class='far fa-kiss-wink-heart'></i></span> </td>
              </tr>"; 

            } else {

              echo "<tr>
              <td  class='text-center'> $nom </td>
              <td  class='text-center'> $prenom </td>
              <td  class='text-center'> $emploi </td>
              <td  class='text-center'> $sup - $nomsup $prenomsup </td>
              <td  class='text-center'> $noserv - $service </td>
              <td  class='text-center'> <a href='detail.php?noemp=$noemp'><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-bs-whatever='$noemp'>Détails</button></a></td>
              <td  class='text-center'> <a href='modifier.php?nom=$nom&prenom=$prenom&emploi=$emploi&sup=$sup&service=$service&noemp=$noemp&noserv=$noserv'><button type='button' class='btn btn-warning'>Modifier</button></a></td>
              <td  class='text-center'> <a href='process_supp.php?noemp=$noemp'><button type='button' class='btn btn-danger'>Supprimer</button></a></td>
              </tr>"; 

            }

        }

        mysqli_close($bdd);
    ?>


<!-- BUTTON SUPPR -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Avant d'aller plus loin ...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Souhaitez-vous vraiment supprimer cet employé ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
        <button type="button" class="btn btn-danger">Oui, supprimer</button>
      </div>
    </div>
  </div>
</div> -->

<!-- DETAILS BUTTON -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">NOM PRENOM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
        INFO DETAIL

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div> -->

</body>
</html>