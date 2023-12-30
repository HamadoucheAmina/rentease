<?php
// ajoutappart.php
session_start();
require_once 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!isset($_SESSION['id_user'])) {
    header('Location: connexion1.php');
    exit();
}

$id_user = $_SESSION['id_user'];
// ajoutappart.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); 
    echo "Method Not Allowed";
    exit();
}

if (
    isset($_POST['titre'], $_POST['description'], $_POST['adresse'], $_POST['type'], $_POST['chambres'],
          $_POST['lits'], $_POST['salle_bain'], $_POST['equipements'], $_POST['voyageurs'], $_POST['tarifs'])
) {
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $chambres = (int)$_POST['chambres'];
    $adresse = htmlspecialchars($_POST['adresse']);
    $type = htmlspecialchars($_POST['type']);
    $lits = (int)$_POST['lits'];
    $salle_bain = (int)$_POST['salle_bain'];
    $equipements = htmlspecialchars($_POST['equipements']);
    $voyageurs = (int)$_POST['voyageurs'];
    $tarifs = htmlspecialchars($_POST['tarifs']);

    if (!preg_match('/^[a-zA-Z\s]+$/', $titre)) {
        header('Location: ajoutbien.php?reg_err=titre_invalid');
        exit();
    }

   

    

    if (!preg_match('/^[a-zA-Z\s]+$/', $type)) {
        header('Location: ajoutbien.php?reg_err=type_invalid');
        exit();
    }

    if (!is_numeric($chambres)) {
        header('Location: ajoutbien.php?reg_err=chambres_invalid');
        exit();
    }

    if (!is_numeric($lits)) {
        header('Location: ajoutbien.php?reg_err=lits_invalid');
        exit();
    }

    if (!is_numeric($salle_bain)) {
        header('Location: ajoutbien.php?reg_err=salle_bain_invalid');
        exit();
    }

    

    if (!is_numeric($voyageurs)) {
        header('Location: ajoutbien.php?reg_err=voyageurs_invalid');
        exit();
    }

    if (!preg_match('/^[a-zA-Z0-9\s\$\%]+$/', $tarifs)) {
        header('Location: ajoutbien.php?reg_err=tarifs_invalid');
        exit();
    }


    if(isset($_POST["submit"])){
        $totalFiles = count($_FILES['fileImg']['name']);
        $filesArray = array();
    
        echo 'cccccccccc';
        for($i = 0; $i < $totalFiles; $i++){
            $imageName = $_FILES["fileImg"]["name"][$i];
            $tmpName = $_FILES["fileImg"]["tmp_name"][$i];
        
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));
        
            $newImageName = uniqid() . '.' . $imageExtension;
        
            move_uploaded_file($tmpName, 'uploads/' . $newImageName);
            $filesArray[] = $newImageName;
          }
      $filesArray = json_encode($filesArray);

      $insert = $bdd->prepare("INSERT INTO proprietes (id_user ,titre, description, adresse, tarifs, voyageurs, lits, salle_bain, chambres, equipements, type, image)
      VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$insert->bind_param('issssiiiisss', $id_user ,$titre, $description, $adresse, $tarifs, $voyageurs, $lits, $salle_bain, $chambres, $equipements, $type, $filesArray);} 
    else {
        header('Location: ajoutbien.php?reg_err=telechargement');
    
        exit();
    }
   
    
    if ($insert->execute()) {
    $id_nouvelle_propriete = $bdd->insert_id;
     
    header("Location: dashboard.php?id_proprietes=$id_nouvelle_propriete&id_user=$id_user");
    exit();
       
        

        
    } else {
        header('Location:ajoutbien.php?reg_err=error');
        exit();
    }
    echo '<script>';
echo 'alert("Logement ajouté avec succès!");';
echo 'window.location.href = "dashboard.php?id_proprietes=$id_nouvelle_propriete&id_user=$id_user";';
echo '</script>';
    $insert->close();
    exit();
} else {
    $_SESSION['error_message'] = "Veuillez corriger les erreurs dans le formulaire.";

header('Location: ajoutbien.html?reg_err=vide');
exit();
}
?>
