<!DOCTYPE html>
<html>
<head>
	<title>Inscription patient</title>
	<style>
		form {
			margin: auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #f2f2f2;
		}
		input[type=text], input[type=email], input[type=tel], input[type=date], select, textarea {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #39507a;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #39507a;
		}
	</style>
</head>
<body>
	<form>
		<h2>Inscription patient</h2>
		<label for="nom">Nom:</label>
		<input type="text" id="nom" name="nom" required>
		<label for="prenom">Prénom:</label>
		<input type="text" id="prenom" name="prenom" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="telephone">Téléphone:</label>
		<input type="tel" id="telephone" name="telephone" required>
		<label for="date_naissance">Date de naissance:</label>
		<input type="date" id="date_naissance" name="date_naissance" required>
        <label for="code patient">id_patient:</label>
		<input type="text" id="nom" name="nom" required>
		</select>
		<input type="submit" value="S'inscrire"> --
	</form>
</body>
</html>
