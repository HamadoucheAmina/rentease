<!doctype html>
<html class="no-js" lang="en">
<?php session_start();
require_once 'config.php';
?>
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Directory Landing Page</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>
    .home-container{
        position: relative;
    background:url(../images/welcome-hero/banner.jpg)no-repeat;
    background-position:center;
    background-size:cover;
    text-align: center;
    height:500px;
    z-index: 1;}
    .home-container:before{
    position: absolute;
    content: " ";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:rgba(170, 123, 123, 0.65);
    z-index: -1;
}
.single-list-topics-cnt{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 205px;
    height: 170px;
    background:#fff;
    border-radius: 3px;
    margin-right: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0px 10px rgba(71,71,71,.2);
    -webkit-transition: .3s linear; 
    -moz-transition:.3s linear; 
    -ms-transition:.3s linear; 
    -o-transition:.3s linear;
    transition: .3s linear;
}
/* les 5 carres de lits chambres sdb voyageurs prix*/
.single-list-topics-cnt h2>a { margin: 13px 0;}
/*.single-list-topics-cnt:last-child{margin-right: 0;}*/

.single-list-topics-icon [class^="flaticon-"]:before,.single-list-topics-icon [class*=" flaticon-"]:before,.single-list-topics-icon [class^="flaticon-"]:after,.single-list-topics-icon [class*=" flaticon-"]:after {font-size: 45px;color:#000000;}
.single-list-topics-cnt:hover .single-list-topics-icon [class^="flaticon-"]:before,.single-list-topics-cnt:hover .single-list-topics-icon [class*=" flaticon-"]:before,.single-list-topics-cnt:hover .single-list-topics-icon [class^="flaticon-"]:after,.single-list-topics-cnt:hover .single-list-topics-icon [class*=" flaticon-"]:after {color:#000000;}

.single-list-topics-cnt:hover h2>a,.single-list-topics-cnt:hover p{color: #000000!important;}
.single-list-topics-cnt:hover{
    color: #fff;
    background:#ffffff;
    box-shadow: 0 5px 10px rgba(133, 104, 104, 0.4);
 
/*info hote et description*/

}
</style>
    </head>
	
	<body>
		
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							
							
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							
							<li class="header-top-contact">
								<a href="pageacceuil.html">Deconnexion</a>
							</li>
						
							
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<?php
if (!isset($_SESSION['id_user'])) {
    header('Location: connexion1.php');
    exit();
}

$id_user = $_SESSION['id_user'];
echo "<a class='navbar-brand' href='dashboard.php?id_user=$id_user'>Rent<span>Ease</span></a>";
?>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">Home</a></li>
			                    <li class="scroll"><a href="#works">Informations</a></li>
			                    <li class="scroll"><a href="#explore">Reserver</a></li>
								<?php
        if (!isset($_SESSION['id_user'])) {
            header('Location: connexion1.php');
            exit();
        }

        $id_user = $_SESSION['id_user'];
        echo "<li class=''><a href='ajoutbien.php?id_user=$id_user'>Ajout bien</a></li>";
        ?>                      <?php
        if (!isset($_SESSION['id_user'])) {
            header('Location: connexion1.php');
            exit();
        }

        $id_user = $_SESSION['id_user'];
        echo "<li class=''><a href='historique.php?id_user=$id_user'>Historique</a></li>";
        ?>
		                         <li class=""><a href="favoris.html">Favoris</a></li>
								 <?php
        if (!isset($_SESSION['id_user'])) {
            header('Location: connexion1.php');
            exit();
        }

        $id_user = $_SESSION['id_user'];
        echo "<li class=''><a href='reservations.php?id_user=$id_user'>Reservations</a></li>";
        ?>
								
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->
		<!--welcome-hero start -->
		<section >
        <div class="home-container">
			<div><?php
        // Récupérer les détails de la propriété à partir de la base de données
        $id_propriete = $_GET['id']; // Supposons que l'ID de la propriété est passé dans l'URL

        $query = "SELECT titre, adresse FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $titre_propriete = $row['titre'];
            $adresse_propriete = $row['adresse'];

            echo "<h1 style='color: #000000; margin-left:0; font-size: 40px;'>$titre_propriete</h1>";
            echo "<p style='color: #6a6a6a; margin-left:0;font-size: 18px;'>Adresse:$adresse_propriete</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?>
            </div>
			<div id="image-gallery" class="image-gallery">
			<?php
$id_propriete = $_GET['id']; 

$query = "SELECT * FROM proprietes WHERE id_proprietes = $id_propriete";
$result = $bdd->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $imagesArray = json_decode($row['image'], true);

	$limit = 3;
	$counter = 0;


	if (!empty($imagesArray)) {
		foreach ($imagesArray as $image) {
			
			if ($counter < $limit) {
				echo "<div class='gallery-image'><img src='uploads/$image' alt='Property Image'></div>";
				$counter++;
			}
		}
	}

    $result->free();
} else {
    echo 'Erreur SQL : ' . $bdd->error;
}


?><style>.image-gallery {
    display: flex;
    
    justify-content: space-between;
    margin-top: 20px;
}

.gallery-image {
    width: 48%; 
    margin-bottom: 10px;
}

.gallery-image img {
    width: 75%;
    height: auto;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.gallery-image img:hover {
    transform: scale(1.5);
}</style>
    </div>
	<button id="showMoreButton" onclick="showMoreImages()">Afficher plus d'images</button>


	</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-cnt">
								<div class="single-list-topics-icon">
									<i class="flaticon-restaurant"></i>
								</div>
								<h2>Salle de bain</h2>
								<p><?php
        $id_propriete = $_GET['id']; 

        $query = "SELECT salle_bain FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $salle_bain = $row['salle_bain'];
            

            
            echo "<p>$salle_bain</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-cnt">
								<div class="single-list-topics-icon">
									<i class="flaticon-travel"></i>
								</div>
								<h2>Chambres</h2>
								<p><?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT chambres FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $chambres = $row['chambres'];
            

            
            echo "<p>$chambres</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-cnt">
								<div class="single-list-topics-icon">
									<i class="flaticon-building"></i>
								</div>
								<h2>Lits</h2>
								<p><?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT lits FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $lits = $row['lits'];
            

            
            echo "<p>$lits</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-cnt">
								<div class="single-list-topics-icon">
									<i class="flaticon-pills"></i>
								</div>
								<h2>Nombres Voyageurs</h2>
								<p><?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT voyageurs FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $voyageurs = $row['voyageurs'];
            

            
            echo "<p>$voyageurs</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-cnt">
								<div class="single-list-topics-icon">
									<i class="flaticon-hotel"></i>
								</div>
								<h2>prix par nuit</h2>
								<p><?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT tarifs FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $tarifs = $row['tarifs'];
            

            
            echo "<p>$tarifs</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?></p>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->
        <button id="btnReserver" class="btn-reserver" onclick="scrollToReservation()">Réserver</button>
<style>/* Style du bouton Réserver */
    .btn-reserver {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #ff6767;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        z-index: 999;
    }
    
    .btn-reserver:hover {
        background-color: #2980b9;
    }
    </style>
		<!--works start -->
		<section id="works" class="works">
			<div class="container">
                <div class="section-header">
					<h2>Informations supplementaires</h2>
					
				</div><!--/.section-header-->
				<style>*{
                    padding: 0;
                    margin: 0;
                }
                .work{padding: 0 0 90px;}
                .works-content {margin-top: 73px;}
                .single-how-work{
                    text-align: center;
                    padding:50px 42px;
                    border-radius: 3px;
                    box-shadow: 0 0px 5px rgba(71,71,71,.2);
                    margin-bottom: 30px;
                    -webkit-transition: .3s linear; 
                    -moz-transition:.3s linear; 
                    -ms-transition:.3s linear; 
                    -o-transition:.3s linear;
                    transition: .3s linear;
                }
                    .single-how-work-icon {
                    display: inline-block;
                    color: #50616c;
                    width: 80px;
                    height: 80px;
                    line-height: 80px;
                    background: #eef2f6;
                    border-radius: 50%;
                }
                
                
                .single-how-work h2 a {
                    font-size:  18px;
                    margin: 35px 0 20px;
                }
                .single-how-work h2 a span {text-transform:  lowercase;}
                .single-how-work p {margin-bottom: 25px;text-transform: initial;}
                
                .single-how-work-icon [class^="flaticon-"]:before,.single-how-work-icon [class*=" flaticon-"]:before,.single-how-work-icon [class^="flaticon-"]:after,.single-how-work-icon [class*=" flaticon-"]:after {font-size: 35px;}
                
                </style>
              
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-work">
								<div class="single-how-work-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2>Equipements <span> du logement</span></h2>
								<p>
								<?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT equipements FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $equipements = $row['equipements'];
            

            
            echo "<p>$equipements</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?>
								</p>
								
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-work">
								<div class="single-how-work-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2>Description<span> du logement</span></h2>
								<p>
								<?php
        
        $id_propriete = $_GET['id']; 

        $query = "SELECT description FROM proprietes WHERE id_proprietes = $id_propriete";
        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $description = $row['description'];
            

            
            echo "<p>$description</p>";
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?>
								</p>
								
							</div>
						</div>
                        <div class="col-md-4 col-sm-6">
							<div class="single-how-work">
								<div class="single-how-work-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2>Infos <span> sur l'hote</span></h2>
								<p>
								<?php
        
        $id_propriete = $_GET['id']; 

		$query = "SELECT proprietes.*, utilisateurs.nom, utilisateurs.prenom,  utilisateurs.pays,  utilisateurs.tel, utilisateurs.id_user
		FROM proprietes
		INNER JOIN utilisateurs ON proprietes.id_user = utilisateurs.id_user
		WHERE proprietes.id_proprietes = $id_propriete";

        $result = $bdd->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $nom = $row['nom'];
            $prenom = $row['prenom'];
			$pays=$row['pays'];
			$tel=$row['tel'];
			$id_user=$row['id_user'];

            
            echo "<p><strong>Nom:</strong>	$nom</p>";
			echo "<p><strong>Prenom:</strong>$prenom</p>";
			echo "<p><strong>Pays:</strong>$pays</p>";
			echo "<p><strong>Contact:</strong>$tel</p>";
            echo "<p><strong>Id:</strong>$id_user</p>";
			
        } else {
            echo 'Erreur SQL : ' . $bdd->error;
        }
        ?>
								</p>
								
							</div>
						</div>
						
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->
        <style>
          
            .reservation-form {
                max-width: 400px;
                margin: 0 auto; 
                background: #fff;
                border: 1px solid #edeff1;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
        
            .reservation-form h3 {
                text-align: center;
                margin-bottom: 20px;
            }
        
            .reservation-form form {
                display: flex;
                flex-direction: column;
            }
        
            .reservation-form label {
                margin-bottom: 8px;
            }
        
            .reservation-form input {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
        
            .reservation-form button {
                padding: 10px;
                background: #ff6767;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        
            .reservation-form button:hover {
                background: #2980b9;
            }
        </style>
		<!--explore start -->
		<section id="explore" class="explore">
            <div class="container">
                <div class="section-header">
                    <h2>Reservez</h2>
                    <p>Verifiez la disponibilite des dates et reservez</p>
                </div><!--/.section-header-->
                
                <div class="reservation-form">
                    <h3>Formulaire de Réservation</h3>
                    <form action="reserver.php" method="post" id="reservationForm">
					<input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="idproprietaire" value="<?php echo $_GET['idproprietaire']; ?>">
    <input type="hidden" name="id_utilisateur" id="id_utilisateur" value="<?php echo $_GET['id_utilisateur']; ?>">

                        <label for="date_debut">Date d'Arrivée</label>
                        <input type="date" id="date_debut" name="date_debut" required>
        
                        <label for="date_fin">Date de Départ</label>
                        <input type="date" id="date_fin" name="date_fin" required>
        
                        <label for="voyageurs">Nombre de Voyageurs</label>
                        <input type="number" id="voyageurs" name="voyageurs" required>
						<button type='submit'>Reserver</button>
                       
                    </form>
                </div>
            </div><!--/.container-->
        </section>
                
						
				<!--/.explore-->
		<!--explore end -->

		

		
		

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Voulez-vous nous contacter?
					</h2>
					<p>
						
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Entrez votre message ici">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									Envoyer
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>


		</section><!--/subscription-->	
		<!--subscription end -->
		<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            
            function scrollToReservation() {
                var sectionReserver = document.getElementById('explore');
                window.scrollTo({
                    top: sectionReserver.offsetTop - 50, 
                    behavior: 'smooth'
                });
            }
       
			document.addEventListener("DOMContentLoaded", function () {
        var showMoreButton = document.getElementById('showMoreButton');
        var imageGallery = document.getElementById('image-gallery');
        var limit = <?php echo $limit; ?>;

      
        function showMoreImages() {
            limit += <?php echo $limit; ?>;
            updateGallery();
        }

       
        function updateGallery() {
            var galleryImages = imageGallery.querySelectorAll('.gallery-image');

           
            galleryImages.forEach(function (image, index) {
                image.style.display = index < limit ? 'block' : 'none';
            });

           
            showMoreButton.style.display = limit < galleryImages.length ? 'block' : 'none';
        }

        
        updateGallery();
    });

$(document).ready(function() {
    var form = $('#reservationForm');

    form.on('submit', function(e) {
        e.preventDefault();

        var formData = {
            id: $('#id').val(),
            id_utilisateur: $('#id_utilisateur').val(),
            date_debut: $('#date_debut').val(),
            date_fin: $('#date_fin').val(),
            voyageurs: $('#voyageurs').val()
        };

        $.ajax({
            type: 'POST',
            url: 'reserver.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert('La réservation a été faite avec succès.');
                } else {
                    alert('Erreur : ' + response.message);
                }
            },
            error: function() {
                alert('Erreur lors de la requête AJAX.');
            }
        });
    });
});
</script>

    </body>
		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <?php
if (!isset($_SESSION['id_user'])) {
    header('Location: connexion1.php');
    exit();
}

$id_user = $_SESSION['id_user'];
echo "<a class='navbar-brand' href='dashboard.php?id_user=$id_user'>Rent<span>Ease</span></a>";
?>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">Comment ça marche?</a></li>
			                    <li class="scroll"><a href="#explore">explorez</a></li>
			                    
			                
			                    <li class="scroll"><a href="#contact">contact</a></li>
			                    <li class=" scroll"><a href="#contact">mon compte</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +213 0000000</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    
	
</html>