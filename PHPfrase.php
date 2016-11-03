<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estudo da Frase</title>
        <link rel="stylesheet" href="style_frasedodia.css">   
    </head>
    <body>
		<?php
			
			$frase = $_POST['frase'];

	//Quantas Palavras
			$palavras = explode(" ",$frase);//separa as palavras;
			$Npalavra = count($palavras);//conta quantas palavras;

	//Quantas Letras
			$string = str_replace(" ", "",$frase);//tira o espaço entre as letras;
			$letras = strlen($string);//conta as letras

	//Todas MAIUSCULAS
			$maiusculas = strtoupper($frase);

	//Todas minusculas
			$minusculas = strtolower($frase);

	//Somente Primeira Maiuscula
			$Prim_Maiuscula = ucwords($frase);

	//Quantas Vogais
			$contaVogalA = substr_count($minusculas,"a");
			$contaVogalE = substr_count($minusculas,"e");
			$contaVogalI = substr_count($minusculas,"i");
			$contaVogalO = substr_count($minusculas,"o");
			$contaVogalU = substr_count($minusculas,"u");
			$TotalVogal = $contaVogalA + $contaVogalE + $contaVogalI + $contaVogalO + $contaVogalU;

			
	//Quantas Consoantes
			$totalConsoantes = $letras - $TotalVogal;

	//Polindromo
			$palindromo = strrev($string);
			if($palindromo == $string){

				$FormaPalindromo = "É Palíndromo";
			}else{
				$FormaPalindromo = "Não é um Palíndromo";
			}
		?>
		<div id="prin2">
			<div id="frases">
				<p>Frase digitada: 				<?php echo $frase; 					?></p>
			</div>
			<div id="frases">
				<p>Quantas Palavras: 			<?php echo $Npalavra." palavras" ; 	?></p>
			</div>
			<div id="frases">
				<p>Quantas Letras: 				<?php echo $letras." Letras";	 	?></p>
			</div>
			<div id="frases">
				<p>Todas MAIUSCULAS: 			<?php echo $maiusculas; 			?></p>
			</div>
			<div id="frases">
				<p>Todas minusculas: 			<?php echo $minusculas; 			?></p>
			</div>
			<div id="frases">
				<p>Somente Primeira Maiuscula:	<?php echo $Prim_Maiuscula; 		?></p>
			</div>
			<div id="frases">
				<p>Quantas Vogais: 				<?php echo $TotalVogal; 			?></p>
			</div>
			<div id="frases">
				<p>Quantas Consoantes: 			<?php echo $totalConsoantes; 		?></p>
			</div>
			<div id="frases">
				<p>Polindromo: 					<?php echo $FormaPalindromo; 		?></p>
			</div>
		</div>
	</body>
</html>