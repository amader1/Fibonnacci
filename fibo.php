<!DOCTYPE html>
<html>
<head>
	<title>Suite de Fibonacci</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf8">
</head>

<body>
	<div id="content" align="center">
		<h2 >Suite de Fibonacci</h2>
		<form  action="" method="POST">
			<div class="SousTitre">Entrer un nombre entier :</div>
			<input type="number" name="nb" class="champ"><br>
		<input type="submit" name="submit" value="valider" class="bouton">
		
		</form>
		<?php

			interface Fibo{
				public function calcul($nb);
			}
			
			class Fibonacci implements Fibo{
					
					public function calcul($nb){
			$n1=0;
					$n2=1;
						$n3=0;
						for($i=2; $i<=$nb;$i++) {
							
							
							
							$n3 = $n1+$n2;

							$n1=$n2;
							$n2=$n3;
							
						}
						return $n3;
					}
			}

			$objet = new Fibonacci;

			$nbre=@$_POST['nb'];
			if(isset($_POST['submit'])&&!empty($nbre)){
				echo $objet->calcul($nbre);
			}

		?>
	</div>
</body>
</html>
