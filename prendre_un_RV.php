<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prendre un rendez-vous</title>
	<style>
		form {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f5f5f5;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			font-family: Arial, sans-serif;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"], input[type="email"], input[type="tel"], select, textarea {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			font-family: Arial, sans-serif;
		}
		input[type="submit"] {
			background-color: #39507a;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-family: Arial, sans-serif;
		}
		input[type="submit"]:hover {
			background-color: #16a085;
		}
	</style>
</head>
<body>
	<form action="process_form.php" method="post">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>

		<label for="email">E-mail :</label>
		<input type="email" id="email" name="email" required>

		<label for="tel">Téléphone :</label>
		<input type="tel" id="tel" name="tel" required>

		<label for="specialite">Spécialité :</label>
		<select id="specialite" name="specialite" required>
			<option value="">Choisissez une spécialité</option>
			<option value="cardiologie">Ophtalmologie</option>
			<option value="gastroenterologie">Géneraliste</option>
			<option value="ophtalmologie">Dentiste</option>
			<option value="pneumologie">Pediatre</option>
			<option value="radiologie">Génicologue</option>
		</select>

		<label for="date">Date :</label>
		<input type="date" id="date" name="date" required>

		<label for="heure">Heure :</label>
		<input type="time" id="heure" name="heure" required>

		<label for="message">Message :</label>
		<textarea id="message" name="message" rows="5"></textarea>

		<input type="submit" value="Prendre rendez-vous">
	</form>
</body>
</html>
