<?php

session_start();

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $mail = isset($_POST['mail']) ? $_POST['mail'] : null;

    if ($mail) {
        
        $check = $bdd->prepare('SELECT nom, prenom, mail, mot_de_passe FROM utilisateurs WHERE mail = ?');
        $check->execute(array($mail));
        $check->store_result();
        $row = $check->num_rows;
 
        if ($row > 0) {
            echo json_encode(['status' => 'taken']);
        } else {
            echo json_encode(['status' => 'available']);
        }
        
        $check->close();
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
