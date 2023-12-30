<?php
//check_account.php
session_start();
require_once 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
error_log('POST data: ' . print_r($_POST, true));


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
    $mot_de_passe = isset($_POST["mot_de_passe"]) ? $_POST["mot_de_passe"] : null;

    if ($mail && $mot_de_passe) {
        $check = $bdd->prepare('SELECT id_user, mot_de_passe FROM utilisateurs WHERE mail = ?');
        $check->bind_param("s", $mail);
        $check->execute();
        $check->store_result();
        $row = $check->num_rows;
        
        if ($row > 0) {
            $check->bind_result($id_user, $mdp_hash);
            $check->fetch();
        
            if (password_verify($mot_de_passe, $mdp_hash)) {
                
                $_SESSION['id_user'] = $id_user;
                echo json_encode(["status" => "success", "redirect" => "dashboard.php?id_user=$id_user"]);
                
                
            } else {
                echo json_encode(["status" => "error", "message" => "Mot de passe incorrect","redirect" => "connexion1.php"]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Compte inexistant","redirect" => "connexion1.php"]);
        }
        
        $check->close();
        
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs sont obligatoires.']);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Requête non autorisée"]);
}
?>
