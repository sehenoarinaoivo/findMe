<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <link rel="stylesheet" href="CSS/theme.css"/>
    <title>Document</title>
</head>
<body>
	<section>

	<div class="inscr">

		<b class="white-c">inscription</b> 
		<div class="content-insc backgreen">
			<label id="nom-error" for=""> le nom requis au mois trois caracteres</label><br>
			<label id="email-error" for="">Email doit etre email valide</label><br>
			<label id="mdp-error" for="">Mots de passe requis doit contenir au moins six caracteres</label>
		</div>

		<div class="content-insc">

			<form  action="signup.php" method="post" class="formular">

				<label class="label-input" for=""><b class="white-c">Nom : </b></label><br>
				<input type="text" placeholder="nom" class="input-form form-control" name="username" id=""><br>

				<label class="label-input" for=""><b class="white-c">Prenom : </b></label><br>
				<input type="text" placeholder="prenom" class="input-form form-control" name="prenom" id=""><br>

				<label class="label-input" for=""><b class="white-c">Telephone : </b></label><br>
				<input type="text" placeholder="name" class="input-form form-control" name="telephone" id=""><br>


				<label class="label-input" for=""><b class="white-c">Genre : </b></label>
				<label class="white-c" for="">Homme </label><input type="radio" name="genre" id="">
				<label class="white-c" for="">Femme</label><input type="radio" name="genre" id="">

				<br><br><label class="label-input" for=""><b class="white-c">email:</b></label><br>
				<input type="email" placeholder="entrer email" class="input-form form-control" name="email" id="">

				<br><label class="label-input" for=""><b class="white-c">Mot de Passe:</b></label><br>
				<input type="password" name="password" placeholder="mot de passe" class="input-form form-control" name="mdp" id=""><br>

				<br><label class="label-input" for=""><b class="white-c">Confirmer votre mot de passe:</b></label><br>
				<input type="password" onclick="verifyMdp()" name="passverif" placeholder="mot de passe" class="input-form form-control" name="mdp" id=""><br>
				<p id="affiche-error" style="color:red" ></p>	
				<button type="submit" name="Submit" class="btn btn-primary top-2">Submit</button></center>
			
			</form>

			<div class="oublie-mdp">
				<a href="#">J'ai oublie mon mot de passe</a>
			</div>

		</div>

	</div>

	</section>

</body>
</html>