<!DOCTYPE HTML>

<html lang="pl">	
	
	<head>
	
		<title> AUTO-PARTS Eytuj profil</title>
		<meta charset="utf-8"/>
		<meta name="description" content="edycja profilu użytkownika"/>
		<meta name="keywords" content="edycja, profil"/>
		<link rel="stylesheet" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext" rel="stylesheet"/>
		


	</head>
	
	<body> 

	<form method="post" action="index.html">

	<p>
		<label>wybierz kolor tła:
			<input type="color" autofocus/>
		</label>
	</p>

	<p>
		<label>data urodzenia:
			<input type="date"/>

		</label>
	</p>

	<p>
		<label>wiek:
			<input type="range" min="1" max="100" value="18" />
		</label>
	</p>

	<p>
		<label>profil na Facebooku:
			<input type="url" placeholder = "http://www.facebook.com"/>
		</label>
	</p>

	<input type="submit" value="Zatwierdź">
	
		
	</form>

	
	
	
	</body>


</html>