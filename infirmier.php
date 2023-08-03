<!DOCTYPE html>
<html>
<head>
	<title>infirmier</title>
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
		<label for="nom">code_infirmier:</label>
		<input type="text" id="code_infirmier" name="code_infirmier" required>
        <label for="nom">Nom_infirmier:</label>
		<input type="text" id="Nom_infirmier" name="Nom_infirmier" required>
		<label for="prenom">Prenom_infirmier:</label>
		<input type="text" id="Prenom_infirmier" name="Prenom_infirmier" required>
		</select>
		<input type="submit" value="Ajouter"> --
        <input type="submit" value="Supprimer"> --
	</form>
</body>
</html>
