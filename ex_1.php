<html>
	<head>
		<title>Somma di 2 numeri</title>
	</head>

	<body>

		<h2>Somma di due numeri</h2>

		<form name="form" method="post" action="ex_1.php">
			Primo addendo <input type="text" name="Add1" value="0" maxlength="5">
			<br>
			Secondo addendo <input type="text" name="Add2" value="0" maxlength="5">
			<br>
			Totale: <input type="submit" value="Somma">
		</form>

		<?php

			if ( isset($_POST['Add1']) && isset($_POST['Add2']) ){
				$num1 = $_POST['Add1'];
				$num2 = $_POST['Add2'];
				echo "la somma di $num1 + $num2 = " . ($num1 + $num2);
			}

		?>
	</body>
</html>
