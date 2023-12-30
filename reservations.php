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
.single-list-topics-cnt h2>a { margin: 13px 0;}

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
	<section>
        <div >
            <p class="reservations-heading">Reservations</p><style>
    p.reservations-heading {
        font-size: 28px; 
        color: red; 
        text-align: center; 
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
            <?php


if (!isset($_SESSION['id_user'])) {
    header('Location: connexion1.php');
    exit();
}

$id_user_connecte = $_SESSION['id_user'];
$queryProprietesReservees = "SELECT proprietes.*, reservations.date_fin, reservations.date_debut
                             FROM proprietes
                             INNER JOIN reservations ON proprietes.id_proprietes = reservations.id_proprietes
                             WHERE reservations.id_user = ? AND reservations.date_fin >= CURDATE()";
$stmtProprietesReservees = $bdd->prepare($queryProprietesReservees);
$stmtProprietesReservees->bind_param('i', $id_user);
$stmtProprietesReservees->execute();
$resultProprietesReservees = $stmtProprietesReservees->get_result();

if ($resultProprietesReservees) {
    while ($row = $resultProprietesReservees->fetch_assoc()) {
        // Extraire les données de la propriété
        $titre = $row['titre'];
        $adresse = $row['adresse'];
        $tarifs = $row['tarifs'];
        $type = $row['type'];
        $id_proprietes=$row['id_proprietes'];
        $date_debut = $row['date_debut'];
        $date_fin = $row['date_fin'];

        
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
        echo "<p>Date depart: {$row['date_debut']}<br> Date d'arrivee: {$row['date_fin']}</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="explore-open-close-part">';
        echo '<div class="row">';
        echo '<div class="col-sm-5">';
        echo "<button class='close-btn' onclick='window.location.href=\"pagedetails.php?id={$row['id_proprietes']}&idproprietaire={$row['id_user']}&id_utilisateur={$id_user_connecte}\"'>Voir plus</button>";
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
    
} else {
    // Gérer les erreurs de requête
    echo 'Erreur SQL : ' . $bdd->error;
}


?>
    </div>
    </section>
		


    </body>     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
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