<?php

session_start();
include 'fonctions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Tableaux</title>
</head>
<body>

<?php
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
?>

<!-- NAVBAR TITRE ET CO -->
  <?php
  if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){ 
  ?>
  <nav class="navbar navbar-dark bg-dark bg-gradient">
    <div class="container-lg justify-content-between">
      <h1 class="text-white-50 text-uppercase font-monospace fst-italic"> Gestion des employés </h1>  
        <div class="gap-2 d-md-flex">
          <h3><span class="badge bg-secondary d-grid"><?php echo "Bonjour " .$_SESSION['user_name']. " !";?></span></h3>
          <form action="tableau.php" method="post" class="d-grid"><button class="btn btn-outline-danger btn-sm" type="submit" value="deco" name="deco"><i class="fas fa-sign-out-alt"></i></button></form>
        </div>
    </div>
  </nav>

  <?php
    if (isset($_REQUEST['deco'])){
      session_destroy();
      header("Location:http://127.0.0.1/tableau.php");
    }
  }   
  ?>

<br/>

<!-- AFFICHAGE -->

  <div class="container-lg">

  <?php
    if (@$_GET["connexionRequired"]){
      echo "<div class='alert alert-danger' role='alert'>
              Vous n'avez pas les droits pour accéder à cette page, ou vous n'êtes pas connecté :(
            </div>";
    }
  ?>
  

<!-- COMPTEUR ET AJOUT  -->

    <div class="row justify-content-between align-items-center">
        <div class="col-3">
        <span class="badge bg-dark bg-gradient text-wrap" style="width: 10rem;"> <?php echo("Nombre d'ajout aujourd'hui : " .displayCompteur());?> </span>
    </div>

  <?php
  
  if (isset($_SESSION['user_profil']) && $_SESSION['user_profil'] == "ADMIN") {

  
        echo "<div class='col-1 text-center'>
                <a href='ajouter.php'><span style='font-size: 30px; color: black;'><i class='fas fa-user-plus'></i></span></button></a>
              </div>";
  } 

  ?>
    </div>

</br>

<!-- TABLEAU AFFICHAGE -->

    <div class="table-responsive">
    <table class="table table-info table-hover table-bordered vertical-align-middle">
        <thead>

<?php 

    if (isset($_SESSION['user_profil']) && $_SESSION['user_profil'] == "ADMIN") {
 
    echo " <tr>
            <th class='text-center' scope='col'>NOM</th>
            <th class='text-center' scope='col'>PRENOM</th>
            <th class='text-center' scope='col'>EMPLOI</th>
            <th class='text-center' scope='col'>SUPERIEUR</th>
            <th class='text-center' scope='col'>SERVICE</th>
            <th class='text-center' scope='col'></th>
            <th class='text-center' scope='col'></th>
            <th class='text-center' scope='col'></th>
          </tr> ";

  } else {

    echo " <tr>
            <th class='text-center' scope='col'>NOM</th>
            <th class='text-center' scope='col'>PRENOM</th>
            <th class='text-center' scope='col'>EMPLOI</th>
            <th class='text-center' scope='col'>SUPERIEUR</th>
            <th class='text-center' scope='col'>SERVICE</th>
            <th class='text-center' scope='col'></th>
          </tr> ";

  } 
?>
      </thead>

    <?php 

        foreach(displayArrayTableau() as $key => $value){
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

            foreach(displayArraySup() as $key => $value){
              if(is_array($value)){
                foreach($value as $key => $value){
                  if ($noemp == $value){
                    $estSup = $value;
                  }   
                }
              }
            }
            
            if (isset($_SESSION['user_profil']) && $_SESSION['user_profil'] == "ADMIN") {
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

            } else {
              echo "<tr>
              <td  class='text-center'> $nom </td>
              <td  class='text-center'> $prenom </td>
              <td  class='text-center'> $emploi </td>
              <td  class='text-center'> $sup - $nomsup $prenomsup </td>
              <td  class='text-center'> $noserv - $service </td>
              <td  class='text-center'> <a href='detail.php?noemp=$noemp'><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#staticBackdrop' data-bs-whatever='$noemp'>Détails</button></a></td>
              </tr>"; 
            }
        }
    ?>
    </table>
    </div>

<?php
} else {
?>
    
    <nav class="navbar navbar-dark bg-dark bg-gradient">
      <div class="container-lg justify-content-center">
        <h1 class="text-white-50 text-uppercase font-monospace fst-italic"> Gestion des employés </h1>
      </div>
    </nav>

</br>

<!-- FORMULAIRE CONNEXION -->
<?php

$messageErrCo = "";
$messageSuccessCo = "";
$messageNoMail = "";


@$mailCo = $_REQUEST['mailCo'];
@$mdpCo = $_REQUEST['passwordCo'];
@$validerCo = $_REQUEST["validerConnexion"];

if (isset($validerCo)){

    if(isset($mailCo) && !empty($mailCo) 
    && isset($mdpCo) && !empty($mdpCo) ){

        foreach(checkCo($mailCo) as $key => $value){
        if(is_array($value)){
            foreach($value as $key => $value){
                if ($key == 'USER_PASSWORD'){
                    $checkMdp = $value;
                } else if ($key == 'USER_NAME'){
                    $userName = $value;
                } else if ($key == 'USER_MAIL'){
                    $userMail = $value;
                } else if ($key == 'USER_ID'){
                    $userID = $value;
                } else if ($key == 'USER_PROFIL'){
                    $userProfil = $value;
                }
            }
        }
        }

      if (!empty($checkMdp)){
        if (password_verify($mdpCo, $checkMdp)){
          $messageSuccessCo = "Bienvenue " . $userName. " !";
          $_SESSION['user_name'] = $userName;
          $_SESSION['user_mail'] = $userMail;
          $_SESSION['user_id'] = $userID;
          $_SESSION['user_profil'] = $userProfil;
          header("Location:http://127.0.0.1/tableau.php");
        } else {
            $messageErrCo = "Mot de passe incorrect, veuillez réessayer";
            $goodMail = $userMail;
        }
      } else {
        $messageNoMail = "Votre adresse mail n'existe pas, veuillez vous inscrire";
      }  

    }
    
}

?>

  <div class="form_connexion justify-content-center"> 
    <form action="tableau.php" method="post" class="mx-auto d-block col-lg-5 g-3 justify-content form-info">
        <div class="container-sm">
            <?php
              if (@$_GET["connexionRequired"]){
                echo "<div class='alert alert-danger' role='alert'>
                        Vous n'avez pas les droits pour accéder à cette page, ou vous n'êtes pas connecté :(
                      </div>";
              }
            ?>
            <span class="fs-6 fst-italic text-danger"><?php echo$messageErrCo?></span>
            <span class="fs-6 fst-italic text-success"><?php echo$messageSuccessCo?></span>
            <span class="fs-6 fst-italic text-danger"><?php echo$messageNoMail?></span>
                <div class="mb-3">
                    <label for="E-Mail" class="form-label">E-Mail : </label>
                    <input id="E-Mail" size="50" maxlength="40" type="mail" placeholder="Veuillez saisir votre adresse mail" name="mailCo" class="form-control" value="<?php echo@$goodMail?>" required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Mot de passe : </label>
                    <input id="Password" size="50" maxlength="20" type="password" placeholder="Veuillez saisir votre mot de passe" name="passwordCo" class="form-control" required>
                </div>
                <div class="mb-2 text-center">
                    <button type="submit" name="validerConnexion" value="valider" class="btn btn-outline-dark">Connexion</button>
                </div>
                <div class="mb-1 text-center">
                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#inscription">Inscription</button>
                </div>
        </div>     
    </form>
  </div>
  <img src="https://previews.123rf.com/images/paulgulea/paulgulea1708/paulgulea170800505/91103834-portrait-d-un-s%C3%A9rieux-souriant-heureux-homme-d-affaires-arabe-ou-travailleur-en-costume-noir-ave.jpg" class="w-50 p-1 img-fluid img-thumbnail rounded mx-auto d-block" alt="Hello">

<!-- FORMULAIRE INSCRIPTION -->
<?php

$messageErrPseudoInscr = "";
$messageErrMailInscr = "";
$messageErrMDPInscr = "";
$messageErrorInscri = "";
$messageInscriOk = "";
$messageErrDoublonPseudo = "";
$messageErrDoublonMail = "";
$doublonPseudo = false;
$doublonMail = false;

$regPseudoInscr = "#[a-z]{1,20}#i";
$regMailInscr = "#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i";

@$pseudoInscri = $_REQUEST['nicknameInscri'];
@$mailInscri = $_REQUEST['mailInscri'];
@$mdpInscri = $_REQUEST['passwordInscri'];
@$ReMdpInscri = $_REQUEST['repasswordInscri'];
@$validerInscri = $_REQUEST["validerInscription"];

if (isset($validerInscri)){

    if(isset($pseudoInscri) && !empty($pseudoInscri) 
    && isset($mailInscri) && !empty($mailInscri) 
    && isset($mdpInscri) && !empty($mdpInscri)
    && isset($ReMdpInscri) && !empty($ReMdpInscri)){

        foreach(checkDoublon() as $key => $value){
          if(is_array($value)){
              foreach($value as $key => $value){
                  if ($key == 'USER_NAME'){
                   if ($pseudoInscri == $value){
                     $messageErrDoublonPseudo = "Ce pseudo est déjà pris veuillez en saisir un nouveau";
                     $doublonPseudo = true;
                   }
                  } else if ($key == 'USER_MAIL'){
                    if ($mailInscri == $value){
                      $messageErrDoublonMail = "Cette adresse mail est déjà prise veuillez en saisir une nouvelle";
                      $doublonMail = true;
                    }
                  }
              }
          }
        }

        if (!preg_match($regPseudoInscr, $pseudoInscri)){
            $messageErrPseudoInscr = "Veuillez saisir un nom correct";
        }
        if (!preg_match($regMailInscr, $mailInscri)){
            $messageErrMailInscr = "Veuillez saisir une adresse mail valide";
        }
        if ($mdpInscri != $ReMdpInscri){
            $messageErrMDPInscr = "Votre mot de passe est différent, veuillez saisir un mot de passe identique";
        }
        if (preg_match($regPseudoInscr, $pseudoInscri) && preg_match($regMailInscr, $mailInscri) && ($mdpInscri === $ReMdpInscri) && (!$doublonPseudo) && (!$doublonMail)){
            $messageInscriOk = "Votre inscription est bien enregistré, vous pouvez dès à présent vous connecter :)";
            header("Refresh: 5; URL=http://127.0.0.1/process_inscri.php?pseudo=$pseudoInscri&mail=$mailInscri&mdp=$mdpInscri");
        }
    } else {
        $messageErrorInscri = "Veuillez saisir et remplir les informations manquantes";
    }
}

?>

<div class="modal fade" id="inscription" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="tableau.php" method="post" class="col g-3 justify-content form-info">
          <div class="container-lg">
          <span class="fs-6 fst-italic text-danger"><?php echo$messageErrorInscri?></span>
          <span class="fs-6 fst-italic text-success"><?php echo$messageInscriOk?></span>
              <div class="mb-3">
                  <label for="Pseudo" class="form-label">Pseudo : </label>
                  <input id="Pseudo" size="50" maxlength="20" type="text" placeholder="Veuillez saisir votre pseudonyme" name="nicknameInscri" class="form-control" value="<?php echo$pseudoInscri?>" required>
                  <span class="fs-6 fst-italic text-danger"><?php echo$messageErrPseudoInscr?></span>
                  <span class="fs-6 fst-italic text-danger"><?php echo$messageErrDoublonPseudo?></span>
              </div>
              <div class="mb-3">
                  <label for="E-Mail" class="form-label">E-Mail : </label>
                  <input id="E-Mail" size="50" maxlength="40" type="mail" placeholder="Veuillez saisir votre adresse mail" name="mailInscri" class="form-control" value="<?php echo$mailInscri?>" required>
                  <span class="fs-6 fst-italic text-danger"><?php echo$messageErrMailInscr?></span>
                  <span class="fs-6 fst-italic text-danger"><?php echo$messageErrDoublonMail?></span>
              </div>
              <div class="mb-3">
                  <label for="Password" class="form-label">Mot de passe : </label>
                  <input id="Password" size="50" maxlength="20" type="password" placeholder="Veuillez saisir votre mot de passe" name="passwordInscri" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label for="RePassword" class="form-label">Check MDP : </label>
                  <input id="RePassword" size="50" maxlength="20" type="password" placeholder="Veuillez saisir à nouveau votre mot de passe" name="repasswordInscri" class="form-control" required>
                  <span class="fs-6 fst-italic text-danger"><?php echo$messageErrMDPInscr?></span>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" name="validerInscription" value="valider" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>
 

<?php
}
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