
<?php
//Cette page permet aux utilisateurs de s'inscrire
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/w3.css" type="text/css">
        <title>Inscription</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>
	    </div>
<?php
if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) and $_POST['username']!='')
{
	//On enleve lechappement si get_magic_quotes_gpc est active
	// if(get_magic_quotes_gpc())
    if(  function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())
    {
		$_POST['username'] = stripslashes($_POST['username']);
		$_POST['prenom'] = stripslashes($_POST['prenom']);
		$_POST['telephone'] = stripslashes($_POST['telephone']);
		$_POST['email'] = stripslashes($_POST['email']);
		$_POST['genre'] = stripslashes($_POST['genre']);
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['passverif'] = stripslashes($_POST['passverif']);
		$_POST['avatar'] = stripslashes($_POST['avatar']);
	}
	if($_POST['password']==$_POST['passverif'])
	{
		if(strlen($_POST['password'])>=6)
		{
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
			{
				$username = mysqli_real_escape_string($conn,$_POST['username']);
				$prenom = mysqli_real_escape_string($conn,$_POST['prenom']);
				$telephone = mysqli_real_escape_string($conn,$_POST['telephone']);
				$email = mysqli_real_escape_string($conn,$_POST['email']);
				$genre = mysqli_real_escape_string($conn,$_POST['genre']);
				$password = mysqli_real_escape_string($conn,$_POST['password']);
				$dn = mysqli_num_rows(mysqli_query($conn,'select id from user where nom="'.$username.'"'));
				if($dn==0)
				{
					$dn2 = mysqli_num_rows(mysqli_query($conn,'select id from user'));
					$id = $dn2+1;
					//On enregistre les informations dans la base de donnee
					// if(mysqli_query($conn,'insert into users(id, username, password, email, avatar, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
					if(mysqli_query($conn, 'insert into user(id, nom, prenom, telephone, genre, email, mdp) VALUES ('.$id.', "'.$username.'", "'.$prenom.'", "'.$telephone.'", "'.$genre.'", "'.$email.'", "'.$pasword.'")'))
                    {
						$form = false;
?>
<div class="message">Vous avez bien &eacute;t&eacute; inscrit. Vous pouvez dor&eacute;navant vous connecter.<br />
<a href="login.php">Se connecter</a></div>
<?php
					}
					else
					{
						$form = true;
						$message = 'Une erreur est survenue lors de l\'inscription.';
					}
				}
				else
				{
					$form = true;
					$message = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
				}
			}
			else
			{
				$form = true;
				$message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
			}
		}
		else
		{
			$form = true;
			$message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caract&egrave;res.';
		}
	}
	else
	{
		$form = true;
		$message = 'Les mots de passe que vous avez entr&eacute; ne sont pas identiques.';
	}
}
else
{
	$form = true;
}
if($form)
{
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//On affiche le formulaire
?>
<div class="content">
<div class="box">
	<div class="box_left white-c">
    	<a href="index.php">Index du Forum</a> &gt; Inscription
    </div>
	<div class="box_right white-c">
    	<a href="signup.php">Inscription</a> - <a href="login.php">Connexion</a>
    </div>
    <div class="clean"></div>
</div>
    <!-- <form action="signup.php" method="post"> -->
        <!-- <div class="center">
            <label for="username">Nom d'utilisateur</label><input type="text" name="username" value="<?php //if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Mot de passe<span class="small">(6 caract&egrave;res min.)</span></label><input type="password" name="password" /><br />
            <label for="passverif">Mot de passe<span class="small">(v&eacute;rification)</span></label><input type="password" name="passverif" /><br />
            <label for="email">Email</label><input type="text" name="email" value="<?php //if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="avatar">Image perso<span class="small">(facultatif)</span></label><input type="text" name="avatar" value="<?php //if(isset($_POST['avatar'])){echo htmlentities($_POST['avatar'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <input type="submit" value="Envoyer" />
		</div> 
     </form> -->

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
                Veuillez remplir ce formulaire pour vous inscrire:<br />

                <label class="label-input" for=""><b class="white-c">Nom : </b></label><br>
                <input type="text" placeholder="nom" class="input-form form-control" name="username" id="" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>"><br>

                <label class="label-input" for=""><b class="white-c">Prenom : </b></label><br>
                <input type="text" placeholder="prenom" class="input-form form-control" name="prenom" id=""><br>

                <label class="label-input" for=""><b class="white-c">Telephone : </b></label><br>
                <input type="text" placeholder="name" class="input-form form-control" name="telephone" id=""><br>


                <label class="label-input" for=""><b class="white-c">Genre : </b></label>
                <input type="text" placeholder="name" class="input-form form-control" name="genre" id=""><br>

                <br><br><label class="label-input" for=""><b class="white-c">email:</b></label><br>
                <input type="email" placeholder="entrer email" class="input-form form-control" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" id="">

                <br><label class="label-input" for=""><b class="white-c">Mot de Passe:</b></label><br>
                <input type="password" name="password" placeholder="mot de passe" class="input-form form-control" name="mdp" id=""><br>

                <br><label class="label-input" for=""><b class="white-c">Confirmer votre mot de passe:</b></label><br>
                <input type="password" onclick="verifyMdp()" name="passverif" placeholder="mot de passe" class="input-form form-control" name="mdp" id=""><br>
                <p id="affiche-error" style="color:red" ></p>	
                <button type="submit" name="Submit" class="btn btn-primary top-2">Submit</button>

            </form>
        </div>
</div>
<?php
}
?>
		<!-- <div class="foot"><a href="http://www.supportduweb.com/scripts_tutoriaux-code-source-89-simple-php-forum-script-forum-en-php-facile-simple-script-code-telecharger-forum-php-gratuit-mysql.html">Simple PHP Forum Script</a> - <a href="http://www.supportduweb.com/">Support du Web</a></div> -->
	</body>
</html>