<html>
<head>
	<title>Somma di due numeri inseriti dall'utente</title>
</head>

<body>
      <h2>Somma di due numeri inseriti dall'utente</h2>
	  <!-- aggiungiamo un form -->
	  <form name="form" method="post" action="Esercizio somma addendi.php">
	     Primo Addendo <input type="text" name="Add1" value="0" maxlength="5">
		 <br>
		 Secondo Addendo <input type="text" name="Add2" value="0" maxlength="5">
		 <br>
		 Calcola il totale: <input type="submit" value="Somma">
         <input type="reset" value="CANCELLA"><!-- cancella il form -->
	  </form>

	  <?php
	       /*isset () torna TRUE solo se gli argomenti sono definiti.
		   In questo caso serve per evitare il warning "Undefined Index"
		   al primo caricamento della pagina, quando Add1 e Add2 non sono
		   ancora definite*/
		   if (isset ($_POST['Add'])&&isset($_POST['Add2'])){
			   $num1 = $_POST ['Add1'];
			   $num2 = $_POST ['Add2'];
			   echo "la somma di $num1 + $num2 = ".($num1 + $num2);
		   }
	  ?>
	 </body>
</html>
