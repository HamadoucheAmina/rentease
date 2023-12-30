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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

<!--===============================================================================================-->
<!--style.css-->
<link rel="stylesheet" href="assets/css/style.css">
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
				
				
			

				<form action= "inscription.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Bienvenue sur Rent<span>Ease</span> 
					</span>
                     <p> Inscrivez vous</p>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="mail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nom" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-signature" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="prenom" placeholder="Prénom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
                            <i class="fa fa-signature" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="date" name="date_de_naissance" placeholder="Date de naissance">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar"  aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="pays" placeholder="Pays/Région">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-hotel"  aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tel" placeholder="Numéro de télephone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile"  aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
    <input class="input100" type="text" name="profil" placeholder="Profil (U pour utilisateur/P pour propriétaire)">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-user" aria-hidden="true"></i>
    </span>
</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mot_de_passe" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confirmer_mdp" placeholder="Confirmer mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">Valider</button>

                       
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Vous avez déja un compte?
						</span>
                        
						
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							<a href="connexion.html">Connexion</a>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                       
					</div>
                    <button class="login101-form-btn">
                        <a href="index.html">Retour</a>
                    </button> 
				</form>
                
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
	<!--<script src="js/main.js"></script>-->
	<!--<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    $(document).ready(function() {
        $('.login100-form').submit(function(event) {
            let isValid = true;
			
			const emailInput = $('input[name="mail"]');
        checkEmailAvailability(emailInput.val());
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		if (emailInput.val()!=='' && !emailRegex.test(emailInput.val())) {
                isValid = false;
                alert('Adresse email invalide'); 
            }

            const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            const passwordInput = $('input[name="mot_de_passe"]');
            if (passwordInput.val()!=='' && !passwordRegex.test(passwordInput.val())) {
                isValid = false;
                alert('Le mot de passe doit contenir au moins 8 caractères et inclure au moins une lettre et un chiffre'); // Modifier le message ici
            }
            const telRegex = /^\d+$/;
            const telInput = $('input[name="tel"]');
            if (telInput.val() !== '' && !telRegex.test(telInput.val())) {
                isValid = false;
                alert('Le numéro de téléphone ne doit contenir que des chiffres');
            }

            const profilInput = $('input[name="profil"]');
            const profilValue = profilInput.val().toUpperCase();
            if ( profilInput.val() !=='' && profilValue !== "U" && profilValue !== "P") {
                isValid = false;
                alert('Le champ profil doit contenir soit "U" soit "P"'); 
            }


            const confirmPasswordInput = $('input[name="confirmer_mdp"]');
            if (confirmPasswordInput.val()!== '' && passwordInput.val() !== confirmPasswordInput.val()) {
                isValid = false;
                alert('Les mots de passe ne correspondent pas'); 
            }

            const requiredFields = ['nom', 'prenom', 'date_de_naissance', 'pays', 'tel'];
            for (const fieldName of requiredFields) {
                const fieldInput = $(`input[name="${fieldName}"]`);
                if (!fieldInput.val().trim()) {
                    isValid = false;
                    alert('Tous les champs sont obligatoires'); 
                    break;
                }
            }

         


      
            if (!isValid) {
                event.preventDefault(); 
            }
        });

    });
	function checkEmailAvailability(mail) {
		console.log("Début de la vérification d'adresse e-mail");
    $.ajax({
        type: "POST",
        url: "check_email_availability.php", 
        data: { mail: mail },
		dataType: 'json',
        success: function(response) {
			console.log(response);
            if (response.status === "taken") {
				
                alert("Cette adresse e-mail est déjà prise. Veuillez en choisir une autre.");
            }
            
        },
		error: function(status) {

    console.error("Statut:", status);

}   
            
        
    }); console.log("Fin de la requête AJAX");
}

</script>

	<?php

                     echo "<script>console.log('id_user connecté : $id_user');</script>";
?>
</body>
</html>