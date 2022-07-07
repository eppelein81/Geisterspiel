<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Geisterspiel</title>

    <link rel="stylesheet" href="../css/style.css">

  <body>
  <div align="center">
  <h1>Geisterspiel</h1>
  
<?php

$zufall = rand(1,3);

	
	if ($_GET['tuer'] == $zufall){
		
		echo "<img src='../img/geist.png' alt='Geist - lauf schnell weg'>";
				
	}else{ 

		echo "<h3>Vor dir sind 3 T&uuml;ren...</h3>";
		echo "<img src='../img/tueren.jpg' height='150'>";
		echo "<h3>...hinter einer steckt ein Geist. <br> Welche T&uuml;r &ouml;ffnest du?</h3>";
		echo "<form>";

		echo "<input name='tuer' type='text'>";
		echo "<input type='submit' value='Los!'>";
	
		echo "</form>";

	}


if (isInteger($_GET['tuer']) > 0){
	
	if ($_GET['tuer'] == $zufall){
		
		echo "<h2>GAME OVER</h2>";
						
	}else{ 

		echo "<p>Der Geist war hinter T&uuml;r $zufall</p>";
		echo "<p>Du hast T&uuml;r ".$_GET['tuer']." ge&ouml;ffnet - kein Geist!</p>";
		echo "<p>Gl&uuml;ck gehabt, neuer Versuch</p>";
		
		$i = $i+1;
		echo "<p>$i</p>";
	}

}else{ 
	
	echo "Gib bitte eine Zahl ein";

}

	function isInteger($input){
		return(ctype_digit(strval($input)));
	}
	

?>
</div>
    <!-- jQuery (wird für Bootstrap JavaScript-Plugins benötigt) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
 




