<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Números Primos</title>
	</head>
	<body>
		<?php
            if (empty($_GET)){
				echo'<form action="numeros_primos_quarentena.php" method="GET" >
						<p>
							<label>Número a ser identificado:</label>
							<input type="number" name="num" />
						</p>
						<input type="submit" value="Identificar" />
				</form>';
			} 
			else{
					
				$num = $_GET['num'];
				$acumu=0;

	
				for($i=0; $i<=$num; $i++){
					if($i != 0){
						if(($num % $i == 0) && ($i != 1) && ($i != $num)){
							$acumu++;
						} 
					}
				}
				if($acumu == 0){
					echo"$num é um número primo.";
				} else{
					echo"$num não é um número primo.";
				}

			}
		?>																																																													
	</body>
</html>