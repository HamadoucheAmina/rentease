<?php
// reserver.php
session_start();
require_once 'config.php';


if (!isset($_POST['id']) || !isset($_POST['id_utilisateur']) || !isset($_POST['date_debut']) || !isset($_POST['date_fin']) || !isset($_POST['voyageurs'])) {
    echo "Des données manquent dans le formulaire.";
   
    exit;
}

$id_proprietes = $_POST['id'];
$id_user_con = $_POST['id_utilisateur'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $voyageurs = $_POST['voyageurs'];

    
    if (strtotime($date_debut) <= strtotime(date('Y-m-d'))) {
        $response['success'] = false;
        $response['message'] = 'La date de début doit être ultérieure à la date actuelle.';
    } else {
      
        $queryDisponibilite = "SELECT COUNT(*) as count FROM reservations WHERE id_proprietes = ? 
                               AND ((date_debut BETWEEN ? AND ?) OR (date_fin BETWEEN ? AND ?))";
        $stmtDisponibilite = $bdd->prepare($queryDisponibilite);
        $stmtDisponibilite->bind_param('issss', $id_proprietes, $date_debut, $date_fin, $date_debut, $date_fin);
        $stmtDisponibilite->execute();
        $resultDisponibilite = $stmtDisponibilite->get_result();
        $countReservations = $resultDisponibilite->fetch_assoc()['count'];

        $queryVoyageurs = "SELECT voyageurs FROM proprietes WHERE id_proprietes = ?";
        $stmtVoyageurs = $bdd->prepare($queryVoyageurs);
        $stmtVoyageurs->bind_param('i', $id_proprietes);
        $stmtVoyageurs->execute();
        $resultVoyageurs = $stmtVoyageurs->get_result();
        $voyageursMax = $resultVoyageurs->fetch_assoc()['voyageurs'];

       
        if ($countReservations == 0 && $voyageurs <= $voyageursMax) {
           
            $queryInsertReservation = "INSERT INTO reservations (id_proprietes, id_user, date_debut, date_fin, voyageurs)
                                       VALUES (?, ?, ?, ?, ?)";
            $stmtInsertReservation = $bdd->prepare($queryInsertReservation);
            $stmtInsertReservation->bind_param('iissi', $id_proprietes, $id_user_con, $date_debut, $date_fin, $voyageurs);
            $stmtInsertReservation->execute();

            $response['success'] = true;
            $response['message'] = 'La réservation a été faite avec succès.';
        } else if ($countReservations != 0) {
           
            $response['success'] = false;
            $response['message'] = 'Cette période est déjà prise.';
        } else if ($voyageurs > $voyageursMax) {
           
            $response['success'] = false;
            $response['message'] = 'Le nombre de voyageurs maximum est dépassé.';
        }
    }
} else {
   
    $response['success'] = false;
    $response['message'] = 'La méthode n\'est pas autorisée.';
}


header('Content-Type: application/json');
echo json_encode($response);
?>
