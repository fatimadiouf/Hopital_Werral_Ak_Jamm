<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<style>
		form {
			max-width: 500px;
			margin: 0 auto;
			text-align: center;
		}
		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		button[type=submit] {
			background-color: #39507a;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		button[type=submit]:hover {
			background-color: #39507a;
		}
	</style>
</head>
<body>
	<form>
		<h2>Formulaire d'inscription</h2>
		<label for="nom"><b>Nom</b></label>
		<input type="text" placeholder="Entrer votre nom" name="nom" required>

		<label for="prenom"><b>Prénom</b></label>
		<input type="text" placeholder="Entrer votre prénom" name="prenom" required>

		<label for="email"><b>Email</b></label>
		<input type="email" placeholder="Entrer votre email" name="email" required>

		<label for="password"><b>Mot de passe</b></label>
		<input type="password" placeholder="Entrer votre mot de passe" name="password" required>

		<button type="submit">S'inscrire</button>
	</form>
</body>
</html>
