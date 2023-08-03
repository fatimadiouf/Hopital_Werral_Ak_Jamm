<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
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
		<h2>¨Patient</h2>
		<label for="nom">code_patient:</label>
		<input type="text" id="code_patient" name="code_patient" required>
        <label for="nom">Nom_patient:</label>
		<input type="text" id="Nom_patient" name="Nom_patient" required>
		<label for="prenom">Prenom_patient:</label>
		<input type="text" id="Prenom_Medecin" name="Prenom_Medecin" required>
		<label for="Numero_Assurance">Numero_Assurance:</label>
		<input type="text" id="Numero_Assurance" name="Numero_Assurance" required>
        <label for="telephone">Téléphone:</label>
		<input type="text" id="telephone" name="telephone" required>
		</select>
		<input type="submit" value="Ajouter"> --
        <input type="submit" value="Supprimer"> --
	</form>
</body>
</html>
