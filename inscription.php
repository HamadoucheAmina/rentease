<?php
//inscription.php
session_start();
require_once 'config.php';

if (
    isset($_POST['nom']) && isset($_POST['prenom']) &&
    isset($_POST['mail']) && isset($_POST['confirmer_mdp']) &&
    isset($_POST['mot_de_passe']) &&   isset($_POST['profil'])
    && isset($_POST['tel']) && isset($_POST['pays']) &&
    isset($_POST['date_de_naissance'])
) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
    $confirmer_mdp = htmlspecialchars($_POST['confirmer_mdp']);
    $profil = htmlspecialchars($_POST['profil']);
    $tel = htmlspecialchars($_POST['tel']);
    $pays = htmlspecialchars($_POST['pays']);
    $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);

    $check = $bdd->prepare('SELECT nom, prenom, mail, mot_de_passe FROM utilisateurs WHERE mail = ?');
    $check->execute(array($mail));
    $check->store_result();
    $row = $check->num_rows;

    if ($row == 0) {
        if (strlen($nom) <= 20 && strlen($prenom) <= 20) {
            if (strlen($mail) <= 30 && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                if ($mot_de_passe == $confirmer_mdp) {
                    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                    $insert = $bdd->prepare('INSERT INTO utilisateurs (nom, prenom, mail, date_de_naissance, pays, tel, profil, mot_de_passe) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
                    $insert->bind_param('ssssssis', $nom, $prenom, $mail, $date_de_naissance, $pays, $tel, $profil, $mot_de_passe_hash);
                    
                     $insert->execute();

                     $_SESSION['id_user'] = $id_user;
                     
                     
                     
                    header('Location: connexion1.php?reg_err=success');
                    exit();
                } else {
                    header('Location: inscription1.php?reg_err=password');
                    exit();
                }
            } else {
                header('Location: inscription1.php?reg_err=email');
                exit();
            }
        } else {
            header('Location: inscription1.php?reg_err=name_length');
            exit();
        }
    } else {
        header('Location: inscription1.php?reg_err=already');
        exit();
    }
} else {
    header('Location: inscription1.php');
    exit();
}
?>
