<!DOCTYPE HTML>

<html lang="pl">	
	
	<head>
	
		<title> AUTO-PARTS rejestracja</title>
		<meta charset="utf-8"/>
		<meta name="description" content="rejestracja nowego użytkownika"/>
		<meta name="keywords" content="rejestracja, nowy, uzytkownik"/>
		<link rel="stylesheet" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext" rel="stylesheet"/>
		


	</head>
	
	<body> 
	<h1>AUTO-PARTS rejestracja nowego użytkownika</h1>

	<form method="post" action="index.html" autocomplete = "on">

		
	

		<p>
		<label>Imię:
			<input type="text" autofocus id = "first_name"  />wpisz imię
		</label>
	</p>

	<p>
		<label>Nazwisko:
			<input type="text" id = "last_name" required  /> wpisz nazwisko

		</label>
	</p>

	<p>
		<label for="list">miesiąc urodzenia:
			<input id="list" placeholder="wybierz miesiąc" list = "months" />
			<datalist id="months">
				 <option value = "Styczeń">  
				 <option value = "Luty">  
				 <option value = "Marzec">  
				 <option value = "Kwiecień">  
				 <option value = "Maj">  
				 <option value = "Czerwiec">  
				 <option value = "Lipiec">  
				 <option value = "Sierpień">  
				 <option value = "Wrzesień">  
				 <option value = "Październik">  
				 <option value = "Listopad">  
				 <option value = "Grudzień">  

			</datalist>

		</label>
	</p>

	<p>
		<label>e-mail:
			<input type="email" id = "email" required />
			ex@example.com
		</label>
	</p>

	<p>
		<label>telefon:
			<input type="tel" id = "tel" pattern="\(\+48\)+\d{9}" />
			(+48) #########
		</label>
	</p>

	<input type="submit" value="Zatwierdź">

	</form>
	
	</body>


</html>