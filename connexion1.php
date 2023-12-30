<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();

?>

	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">

<!--===============================================================================================-->
<!--style.css-->
<link rel="stylesheet" href="assets/css/style.css">
<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>

</head>
<body>
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
							<li class=" scroll active"><a href="#home">home</a></li>
							<li class="scroll"><a href="#works">Comment ça marche?</a></li>
							<li class="scroll"><a href="#explore">explorez</a></li>
							<li class="scroll"><a href="#reviews">Ajoutez votre bien</a></li>
						   
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login_v1/images/img-01.png" alt="IMG">
				</div>
				

				<form action="check_account.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Connectez vous
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="mail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mot_de_passe" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						
					<button type="submit" class="login100-form-btn" title="Se connecter">Connexion</button>
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Vous avez oublié
						</span>
						<a class="txt2" href="#">
							Identifiant / Mot de passe?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							<a href="inscription1.php">Créez votre compte</a>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<button class="login101-form-btn">
					<a href="index.html">Retour</a>
				</button>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	

<script>
    $(document).ready(function() {
    $('.login100-form').submit(function(event) {
        let mail = $('input[name="mail"]').val();
        let mot_de_passe = $('input[name="mot_de_passe"]').val();

        
        checkaccount(mail, mot_de_passe);

        event.preventDefault(); 
    });

    function checkaccount(mail, mot_de_passe) {
        console.log("Début de la vérification d'adresse e-mail");
        $.ajax({
            type: "POST",
            url: "check_account.php",
            data: { mail: mail, mot_de_passe: mot_de_passe },
            dataType: 'json',
            success: function(reponse) {
                console.log('Response:', reponse);
                if (reponse.status === "success") {
                    alert("Connexion réussie.");
                    if (reponse.redirect) {
                        window.location.href = reponse.redirect;
                    }
                } else if (reponse.status === "error") {
                    if (reponse.message === "Mot de passe incorrect") {
                        alert("Mot de passe incorrect.");
                    } else if (reponse.message === "Compte inexistant") {
                        alert("Compte inexistant.");
                    } else {
                        alert("Une erreur s'est produite.");
                    }
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Erreur AJAX:", textStatus, errorThrown);
                console.log(jqXHR.responseText);
            }
        });
  


        console.log("Fin de la requête AJAX");
    }   
});


</script>
</body>
</html>