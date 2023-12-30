<?php
//search.php
session_start();
require_once 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adresse = $_POST['adresse'] ?? '';
    $voyageurs = $_POST['voyageurs'] ?? '';
    $type = $_POST['type'] ?? '';

    $query = "SELECT proprietes.*, utilisateurs.nom, utilisateurs.prenom FROM proprietes
    INNER JOIN utilisateurs ON proprietes.id_user = utilisateurs.id_user
    WHERE 1";

if (!empty($adresse)) {
$query .= " AND proprietes.adresse LIKE '%$adresse%'";
}

if (!empty($voyageurs)) {
$query .= " AND proprietes.voyageurs >= $voyageurs";
}

if (!empty($type)) {
    $query .= " AND proprietes.type LIKE '%$type%'";
    }
$id_utilisateur_connecte = $_SESSION['id_user'];

    $result = $bdd->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
        
		
        $titre = $row['titre'];
        $adresse = $row['adresse'];
        $prix = $row['tarifs'];
        $type_logement = $row['type'];
		$id_user=$row['id_user'];

		echo '<div class="col-md-4 col-sm-6">';
        echo '<div class="single-explore-item">';
        echo '<div class="single-explore-img">';
        echo '<img src="assets/images/explore/e2.jpg" alt="explore image">';
        echo '<div class="single-explore-img-info">';
        echo '<button onclick="window.location.href=\'#\'">best rated</button>';
        echo '<div class="single-explore-image-icon-box">';
        echo '<ul>';
        echo '<li><div class="single-explore-image-icon"><i class="fa fa-arrows-alt"></i></div></li>';
        echo '<li><div class="single-explore-image-icon"><i class="fa fa-bookmark-o"></i></div></li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="single-explore-txt bg-theme-1">';
        echo "<h2><a href='#'>{$row['titre']} {$row['adresse']}</a></h2>";
        echo "<p class='explore-rating-price'>";
        echo "<span class='explore-rating'>5.0</span>";
        echo "<a href='#'> 10 notes</a>";
        echo "<span class='explore-price-box'>";
        echo "<span class='explore-price'>{$row['tarifs']} par nuit</span>";
        echo '</span>';
        echo "<a href='#'>{$row['type']}</a>";
        echo '</p>';
        echo '<div class="explore-person">';
        echo '<div class="row">';
        echo '<div class="col-sm-2">';
        echo '<div class="explore-person-img">';
        echo '<a href="#"><img src="assets/images/explore/person.png" alt="explore person"></a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-sm-10">';
        echo "<p>{$row['nom']}  {$row['prenom']}</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="explore-open-close-part">';
        echo '<div class="row">';
        echo '<div class="col-sm-5">';
        echo "<button class='close-btn' onclick='window.location.href=\"pagedetails.php?id={$row['id_proprietes']}&idproprietaire={$row['id_user']}&id_utilisateur={$id_utilisateur_connecte}\"'>Voir plus</button>";
        echo '</div>';
        echo '<div class="col-sm-7">';
        echo '<div class="explore-map-icon">';
        echo '<a href="#"><i data-feather="map-pin"></i></a>';
        echo '<a href="#"><i data-feather="upload"></i></a>';
        echo '<a href="#"><i data-feather="heart"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        }
        $result->free();
    } else {
        echo 'Erreur SQL : ' . $bdd->error;
    }
} else {
    echo 'La requête n\'est pas autorisée.';
}
?>
