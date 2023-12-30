<?php
session_start();
require_once 'config.php';

if (!empty($_POST['mail']) && !empty($_POST['mot_de_passe'])) {
    $mail = $_POST['mail'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $check = $bdd->prepare('SELECT nom, mail, mot_de_passe FROM utilisateurs WHERE mail = ?');
    $check->bind_param('s', $mail);
    $check->execute();
    $check->store_result();
    $row = $check->num_rows;

    if ($row > 0) {
        $check->bind_result($nom, $mail, $mot_de_passe_hash);
        $check->fetch();
   
        if (password_verify(utf8_encode($mot_de_passe), $mot_de_passe_hash)) {
           
            $_SESSION['user'] = $mail;
            header('Location: dashboard.html');
            exit();
        } else {
            header('Location: connexion1.php?login_err=password');
            exit();
        }
    } else {
        header('Location: connexion1.php?login_err=already');
        exit();
    }
} else {
    header('Location: connexion1.php');
    exit();
}
?>
