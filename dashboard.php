<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
require_once 'config.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['id_user'])) {
    header('Location: connexion1.php');
    exit();
}

$id_user = $_SESSION['id_user'];

// Vérifiez si l'utilisateur est déjà sur la page de tableau de bord
if (basename($_SERVER['PHP_SELF']) !== 'dashboard.php') {
    // Redirigez l'utilisateur vers le tableau de bord avec l'ID de l'utilisateur dans les paramètres de l'URL
    header("Location: dashboard.php?id_user=$id_user");
    exit();
}
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
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
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
			                <a class="navbar-brand" href="index.html">Rent<span>Ease</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="dashboard.php">home</a></li>
			                    <li class="scroll"><a href="#works">Comment ça marche?</a></li>
								<?php
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
        echo "<li class=''><a href='ajoutbien.php?id_user=$id_user'>Ajout bien</a></li>";
        ?>
								
			                    <?php
        if (!isset($_SESSION['id_user'])) {
            header('Location: connexion1.php');
            exit();
        }

        $id_user = $_SESSION['id_user'];
        echo "<li class=''><a href='reservations.php?id_user=$id_user'>Reservations</a></li>";
        ?>
								<li class="scroll"><a href="#explore">explorez</a></li>
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
		<section id="home" class="welcome-hero">
    <div class="container">
        <div class="welcome-hero-txt">
            <h2>Bienvenue sur notre site de location d'appartement <br></h2>
            <p>Votre passerelle vers un monde de confort et de tranquillité en un seul clic</p>
        </div>
        <div class="welcome-hero-serch-box">
            <form id="searchForm" action="" method="post">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <h3>Destination</h3>
                        <input type="text" name="adresse" id="adresse" placeholder="Ex: Alger, Espagne, Europe ..." />
                        <div class="welcome-hero-form-icon">
                            <!--<i class="flaticon-list-with-dots"></i>-->
                        </div>
                    </div>
                    
                    <div class="single-welcome-hero-form">
                        <h3>Type</h3>
                        <input type="text" name="type" placeholder="Ex: Villa" />
                        <div class="welcome-hero-form-icon">
                            <!--<i class="flaticon-gps-fixed-indicator"></i>-->
                        </div>
                    </div>
                    <div class="single-welcome-hero-form">
                        <h3>Voyageurs</h3>
                        <input type="number" name="voyageurs" placeholder="Ex: 10" />
                        <div class="welcome-hero-form-icon">
                            <!--<i class="flaticon-gps-fixed-indicator"></i>-->
                        </div>
                    </div>
					<div class="welcome-hero-serch">
                    <button type="submit" class="welcome-hero-btn" id="searchButton" onclick="window.location.href='#explore'">
                        Search  <i data-feather="search"></i>
                    </button>
                </div>
                </div>
               
            </form>
        </div>
    </div>
</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-restaurant"></i>
								</div>
								<h2><a href="#">Maisons</a></h2>
								<p>150 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-travel"></i>
								</div>
								<h2><a href="#">Chambres</a></h2>
								<p>214 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-building"></i>
								</div>
								<h2><a href="#">Appartements</a></h2>
								<p>185 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-pills"></i>
								</div>
								<h2><a href="#">Cabanes</a></h2>
								<p>200 listings</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-hotel"></i>
								</div>
								<h2><a href="#">Petites maisons</a></h2>
								<p>120 listings</p>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>Choisissez ce que vous voudriez faire</h2>
					<p>En savoir plus sur le fonctionnement de notre site Web</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">Choisissez <span> le type  de logement</span></a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Voir plus
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="ajoutbien.php">Mettez votre logement <span> a louer</span></a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='ajoutbien.php'">
									Voir plus
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">Explorez <span> de magnifiques endroits</span> </a></h2>
								<p>
									Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#explore'">
									Voir plus
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Explorez</h2>
					<p>Explorez de nouveaux lieux à travers le monde </p>
				</div><!--/.section-header-->
				<div id="searchResultsContainer" class="explore-content">
				
					<?php



								$query = "SELECT proprietes.*, utilisateurs.nom, utilisateurs.prenom FROM proprietes
										INNER JOIN utilisateurs ON proprietes.id_user = utilisateurs.id_user";

								$result = $bdd->query($query);

								$id_utilisateur_connecte = $_SESSION['id_user'];
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


								?>
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
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
        
<script>
    $(document).ready(function () {
      
        $("#searchButton").click(function (event) {
            
            event.preventDefault();

            
            var formData = $("#searchForm").serialize();

            
            $.ajax({
                type: "POST",
                url: "search.php",
                data: formData,
                success: function (data) {
                 
                    $("#searchResultsContainer").html(data);
                }
            });
        });
    });
</script>

    </body>
	
</html>