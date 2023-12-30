<!doctype html>
<html  lang="en">

    <head>
    <?php

session_start();


$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : null;
?>

        <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 


    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- title of site -->
    <title>Directory Landing Page</title>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Utilisez la dernière version de Popper.js pour Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
   <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom styles for this template(slides) -->
    <link href="pagehote/css/style.css" rel="stylesheet" />
    <!--modernizr.min.js-->
  <!--  <script  type="module" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->

    <!--bootstrap.min.js-->
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- bootsnav js -->
    <script  src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script  src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script  src="assets/js/jquery.counterup.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

  <style>
      
 .selected-images {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
  align-items: center; 
  height: 70vh;
  overflow-y: auto;

}

.selected-image-container {
  position: relative;
  margin-right: 10px;
  margin-bottom: 10px;
  overflow: hidden;
  width: 150px; 
  height: 150px; 
}

.selected-image {
  width: 100%;
  height: 100%;
  object-fit: cover; 
  cursor: pointer;
}

.remove-image {
  position: absolute;
  top: 5px;
  right: 5px;
  background-color: #fff;
  color: #ff545a;
  border: 1px solid #ff545a;
  border-radius: 50%;
  padding: 5px;
  cursor: pointer;
}
  
     
 .carousel {
  position: relative;
  margin-top: 50px;
  
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
  
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;

  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
  background:#d0b7b8;
  
}
#footer {
  margin-top: 20px; }

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: 0s 0.6s opacity;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}
@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.login100-form-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;
 
  width: 20%;
  height: 50px;
  border-radius: 25px;
  background: #ff545a;

}



.login101-form-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;
  margin: 0 auto;
  width: 50%;
  height: 50px;
  border-radius: 25px;
  background: #f1efef;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;
  margin-right: 705px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.login101-form-btn:hover {
  background: #333333;
}

.login100-form-btn:hover {
  background: #333333;
}


form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 50%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="file"] {
        display: none; 
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        background-color: #f8f9fa; 
        color: #495057; 
        border-radius: 4px;
    }

    .custom-file-upload:hover {
        background-color: #e9ecef;}

   
    .file-selected {
        margin-top: 10px;
        font-style: italic;
        color: #6c757d;
    }
    h2 {
  text-transform: lowercase;
  
}

.price-container {
    position: relative;
}

.price-input {
    border: none;
    outline: none;
    text-align: center;
    font-size: 18px;
    background:#d0b7b8;
    padding-right: 30px; 
    font-size: 100px;
}

#editIcon {
    position:relative;
    top: 50%;
    right: 10px;
    transform: translateY(-120%);
    transform: translateX(-400%);
    cursor: pointer;
    font-size: 40px;
   
}


  </style>
   

       


    </head>
	
	<body >
  <?php
    // Affichez la valeur de id_user dans la console JavaScript
    echo "<script>console.log('id_user connecté : $id_user');</script>";
    ?>
		
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
			                    <li class=" scroll active"><a href="#home">home</a></li>
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
			                    
							
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->
    <?php 
    if (isset($_SESSION['error_message'])) {
      echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
      unset($_SESSION['error_message']); 
  }
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
            case 'titre_invalid':
            ?>
                <div class="alert alert-danger">
                   Le titre ne doit contenir que des lettres 
                </div>
            <?php
            break;

            case 'description_invalid':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> description invalide
                </div>
            <?php
            break;

            case 'adresse_invalid':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> adresse non valide
                </div>
            <?php
            break;

            case 'type_invalid':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong>type invalide
                </div>
            <?php 
            break;

            case 'chambres_invalid':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> Champ nombres de chambres est invalide
                </div>
            <?php 
            break;
            case 'lits_invalid':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> Champ nombres de lits est invalide
                </div>
            <?php 
            break;

            case 'salle_bain_invalid':
              ?>
                  <div class="alert alert-danger">
                      <strong>Erreur</strong> Champ nombres de salles de bain est invalide
                  </div>
              <?php 
              break;

              case 'equipements_invalid':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Champ equipement est invalide
                    </div>
                <?php 
                break;

                case 'voyageurs_invalid':
                  ?>
                      <div class="alert alert-danger">
                          <strong>Erreur</strong> Champ nombres de voyageurs est invalide
                      </div>
                  <?php 
                  break;

                  case 'tarifs_invalid':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> Champ tarifs est invalide
                        </div>
                    <?php 
                    break;
                    case 'telechargement':
                      ?>
                          <div class="alert alert-danger">
                              <strong>Erreur</strong> aucun fichier n'a été téléchargé
                          </div>
                      <?php 
                      break;
                      case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succes!</strong>Votre logement a bien ete ajoute!
                            </div>
                        <?php 
                        break;
                        case 'error':
                          ?>
                              <div class="alert alert-danger">
                                  <strong>Erreur</strong> Votre logement n'a pas pu etre ajoute
                              </div>
                          <?php 
                          break;
                          case 'vide':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> Veuillez remplir tous les champs
                                </div>
                            <?php 
                            break;
                          


        }
    }
    ?>

<!-- slider section -->
<section class="slider_section position-relative">
<form method="post" action="ajoutappart.php" enctype="multipart/form-data">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <!-- Étape 1 -->
          <div class="carousel-item active">
              <div class="container">
                  <h1>Étape 1 : </h1>
                  <h2>ajoutez un titre et une description à votre logement</h2>

                  <div class="form-group">
                    <label for="titre">Titre de l'annonce :</label>
                    <input type="text" name="titre" required>
                </div>
    
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" required></textarea>
                </div>
    
                <div class="form-group">
                  <label for="adresse">Adresse :</label>
                  <input type="text" name="adresse" required>
              </div>

                  <div class="carousel_btn_box">
                      <span class="sr-only">Next</span>
                  </div>
              </div>
          </div>
               <!-- Étape 2 -->
<div class="carousel-item">
<div class="container">
  <h1>Étape 2 :</h1>
  <h2>Détails du logement</h2>

  <div class="form-group">
      <label for="type">Type de logement :</label>
      <select name="type" required>
          <option value="appartement">Appartement</option>
          <option value="maison">Maison</option>
          <option value="villa">Villa</option>
      </select>
  </div>

  <div class="form-group">
      <label for="chambres">Nombre de chambres :</label>
      <input type="number" name="chambres" required>
  </div>

  <div class="form-group">
      <label for="lits">Nombre de lits :</label>
      <input type="number" name="lits" required>
  </div>

  <div class="form-group">
      <label for="salle_bain">Nombre de salles de bain :</label>
      <input type="number" name="salle_bain" required>
  </div>

  <div class="form-group">
      <label for="equipements">Équipements du logement :</label>
      <input type="text" name="equipements" placeholder="Exemple : Wi-Fi, Cuisine équipée, TV, Climatisation, etc." required>
  </div>

  <div class="form-group">
      <label for="voyageurs">Nombre de voyageurs max :</label>
      <input type="number" name="voyageurs"  pattern="\d+" title="Veuillez entrer un nombre entier positif" required>
  </div>
</div>
</div>
<!-- Étape 3 -->
<div class="carousel-item">
<div class="container">
<h1>Étape 3 :</h1>
<h2>À présent, fixez votre prix:</h2>

<div class="form-group">
  <div class="price-container">
    <input type="text" id="priceInput" name="tarifs" class="price-input" value="35$" readonly>
    
    <i class="fas fa-pen" id="editIcon"></i>
</div>
<label><i class="fas fa-info-circle" id="detailsIcon"></i>Revenu de l'hôte :</label>
  <span id="hostIncome">$33.25</span>
<div id="priceDetails" class="price-details" style="display: none;">
  <label>Prix de base :</label>
  <span id="basePrice">$35.00</span><br>
  <label>Frais de service :</label>
  <span id="serviceFee">5%</span><br>
  <label>Revenu de l'hôte :</label>
  <span id="hostIncome">$33.25</span>
</div>
</div>

</div>
</div>
          <!-- Étape 4-->
          <div class="carousel-item">
              <div class="container">
                  <h1>Étape 2 :</h1>
                  <h2> Ajouter des photos de l'appartement :</h2>

                  <div class="form-group">
                      <label for="fileImg">Ajouter des photos de l'appartement :</label>
                      <label class="custom-file-upload">
                          Sélectionner des fichiers
                          <input type="file" name="fileImg[]" accept=".jpg, .jpeg, .png" required multiple onchange="displaySelectedImages(this)">
                      </label>  <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" name="submit">Valider</button>
                    </div>
                     
                      <div class="selected-images" id="selected-images-container"></div>
                  </div>
                  
              </div>
          </div>
      </div>

      <!-- Contrôles du carousel -->
      <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>

  <!-- Boîte de détails (peut nécessiter du contenu) -->
  <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
          <!-- ... (Contenu de la boîte de détails) ... -->
      </div>
  </div>
</form>
</section>
  
          <!-- end slider section -->
          
          



        
 
         
    
          <script>
            function displaySelectedImages(input) {
                    const selectedImagesContainer = document.getElementById('selected-images-container');
                    const files = input.files;
        
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
        
                        if (file.type.startsWith('image/')) {
                            const imageContainer = document.createElement('div');
                            imageContainer.classList.add('selected-image-container');
        
                            const imgElement = document.createElement('img');
                            imgElement.src = URL.createObjectURL(file);
                            imgElement.classList.add('selected-image');
        
                            imgElement.addEventListener('click', function () {
                                selectedImagesContainer.removeChild(imageContainer);
                            });
        
                            const removeIcon = document.createElement('div');
                            removeIcon.innerHTML = '&times;'; 
                            removeIcon.classList.add('remove-image');
        
                            removeIcon.addEventListener('click', function () {
                                selectedImagesContainer.removeChild(imageContainer);
                            });
        
                            imageContainer.appendChild(imgElement);
                            imageContainer.appendChild(removeIcon);
                            selectedImagesContainer.appendChild(imageContainer);
                        }
                    }
                }
                
            document.addEventListener('DOMContentLoaded', function () {
    var priceInput = document.getElementById('priceInput');
    var basePrice = document.getElementById('basePrice');
    var serviceFee = document.getElementById('serviceFee');
    var hostIncome = document.getElementById('hostIncome');
    var detailsIcon = document.getElementById('detailsIcon');
    var priceDetails = document.getElementById('priceDetails');

    priceInput.addEventListener('input', function () {
        var prix = parseFloat(priceInput.value);

        if (!isNaN(prix)) {
            var fraisService = prix * 0.05;
            var revenuHote = prix - fraisService;

            basePrice.textContent = '$' + prix.toFixed(2);
            serviceFee.textContent = '5%';
            hostIncome.textContent = '$' + revenuHote.toFixed(2);
        }
    });

    var editIcon = document.getElementById('editIcon');

    editIcon.addEventListener('click', function () {
        priceInput.removeAttribute('readonly');
        priceInput.focus();
    });

    priceInput.addEventListener('blur', function () {
        priceInput.setAttribute('readonly', 'true');
    });

    detailsIcon.addEventListener('click', function () {
       
        if (priceDetails.style.display === 'none') {
            priceDetails.style.display = 'block';
        } else {
            priceDetails.style.display = 'none';
        }
    });
});


           $(document).ready(function(){
                                            
$('input[name="photos[]"]').change(function () {
    displaySelectedImages(this);
});
                var isCarouselBtnClicked = false;
        
              
                $(".carousel-control-prev").click(function(){
                    isCarouselBtnClicked = true;
                });
        
               
                $(".carousel-control-next").click(function(){
                    isCarouselBtnClicked = true;
                });
        
                
                $("#customCarousel1").on('slide.bs.carousel', function () {
                    return isCarouselBtnClicked;
                });
        
               
                $("#customCarousel1").on('slid.bs.carousel', function () {
                    isCarouselBtnClicked = false;
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
				                <a class="navbar-brand" href="dashboard.php">Rent<span>Ease</span></a>
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
							</p>
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
		
	
	
</html>