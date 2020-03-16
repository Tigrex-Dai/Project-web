<head>
	<script>
		function validateForm() {
			var x = document.forms["myForm"]["myname"].value;
			if (x == "") {
				alert("Nom est obligatoire!");
				return false;
			}
			var y = document.forms["myForm"]["mymail"].value;
			if (y == "") {
				alert("Mail est obligatoire!");
				return false;
			}
			else if (y.match(/^[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}$/)==null){
				alert("Adresse mail n'est pas correcte!");
				return false;
			}
			else{
				return true;
			}
		}
	</script>
</head>
<body>
    <link href="templates/css/style-form.css" rel="stylesheet" type="text/css" >
	<form name="myForm" onsubmit="return validateForm()" method="post">
		<label for="myname">Mon nom :</label>
		<br/>
		<input type="text" name="myname">
		<br/>
		<label for="mymail">Mon mail :</label>
		<br/>
		<input type="text" name="mymail">
		<br/>
		<textarea id="announce">Entrer votre announce. Précision de la date et la place est recommender.</textarea>
		<br/>
		<button type="submit">Valider</button>
	</form>
</body>
