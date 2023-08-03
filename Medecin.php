<!DOCTYPE html>
<html>
<head>
	<title>Medecin</title>
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
		<h2>Medecin</h2>
		<label for="nom">code_Medecin:</label>
		<input type="text" id="code_Medecin" name="code_Medecin" required>
        <label for="nom">Nom_Medecin:</label>
		<input type="text" id="Nom_Medecin" name="Nom_Medecin" required>
		<label for="prenom">Prenom_Medecin:</label>
		<input type="text" id="Prenom_Medecin" name="Prenom_Medecin" required>
		<label for="Spécialité_Medecin">Spécialité_Medecin:</label>
		<input type="text" id="Spécialité_Medecin" name="Spécialité_Medecin" required>

		</select>
		<input type="submit" value="S'inscrire"> --
	</form>
</body>
</html>
