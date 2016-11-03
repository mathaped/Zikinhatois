<?php
	/*htmlspecialchars - Converte caracteres especiais para texto simples em html*/
	echo ("=========htmlspecialchars=========<br>");
	echo "<b>Professor Cezar</b><br>";
	echo htmlspecialchars("<strong>Professor Cezar</strong><br>");
	echo "<br>";
	echo ("<hr>");
		/*================================================================
	nl2br - Isere uma quebra de linha antes de todas newlines em uma string	*/
	echo ("========= nl2br =================<br>");
	echo nl2br("Ol� mundo \nestou aprendendo PHP<br>");
	echo ("==============================<br>");
	echo ("<hr>");
		
	/*================================================================
	str_shuffle() - Embaralha/mistura uma string*/
	echo ("======= str_shuffle() =============<br>");
	$palavra = "abcdefghijklmnopqrstuvxwyz";
	echo $palavra."<br>";
	echo str_shuffle($palavra);
	echo "<br>";
	echo ("<hr>");
	
	/*================================================================
	rand(i,f) - Gera um n�mero aleat�rio i=inicial f=final*/
	echo ("=========== rand(i,f) =============<br>");
	$numero = rand(10,50);
	echo $numero."<br>";
	echo ("<hr>");
	
	/*================================================================
	strstr - Encontra a primeira ocorr�ncia dentro de uma string*/
	echo ("====== strstr('palavra','@') ======<br>");
	$email = "cezarjenzura@gmail.com";
	echo $email."<br>";
	$dominio = strstr($email,'@');
	echo $dominio;
	echo "<br>";
	echo ("<hr>");
	
	/*================================================================
	strpos - Encontra a posi��o da ocorr�ncia solicitada*/
	echo ("====== strpos('palavra','g') ======<br>");
	$string = "abcdefghijklmnopqrstuvxwyz";
	echo $string."<br>";
	$valor = "g";
	$posicao = strpos($string,$valor);
	echo $posicao;
	echo ("<hr>");
	
	/*================================================================
	strlen - Mostra a quantidade de caracteres de uma string*/
	$string = "professor cezar";
	$quantidade = strlen($string);
	echo $quantidade;
	echo "<br>";
	
	/*================================================================
	substr - Retorna uma parte da string*/
	$alfabeto = substr("cezar",4);
	echo $alfabeto;
	echo "<br>";
	
	$alfabeto2 = substr("cezar",-4);
	echo $alfabeto2;
	echo "<br>";
	
	$alfabeto3 = substr("bolacha",0,-1);
	echo $alfabeto3;
	echo "<br>";	
	
	/*================================================================
	substr_count - Conta o n�mero de ocorr�ncias de uma substring.
	Exemplo:*/
	$tit = " RELAT�RIO DE DESPESAS ";
	$tit = substr_count ($tit, "DE");
	echo $tit;
	
	//Retorna 2
	/*================================================================
	trim - Retira espa�o no �nicio e final de uma string.
	Exemplo:*/
	
	$tit = "     RELAT�RIO DE DESPESAS     ";
	$tit = trim($tit);
	echo $tit;
	
	//Retornaria RELAT�RIO DE DESPESAS
	/*================================================================*/
	/*================================================================
	str_replace - Substitui a string desejada*/
	$string = "O paraquedismo � um esporte radical";
	echo $string."<br>";
	$novastring = str_replace("paraquedismo","montanhismo",$string);
	echo $novastring."<br>";
	
	/*================================================================
	
	
	
	
	
	strrev - retorna uma string invertida*/
	$string = "Professor Cezar";
	echo strrev($string);
	echo "<br>";
	echo strrev("Ol� Mundo");
	echo "<br>";
	
	
	
	/*================================================================
	substr_replace - Subtrai e substitui a string desejada*/
	$string = "O paraquedismo � um esporte radical";
	echo $string."<br>";
	$novastring = substr_replace($string,"bolacha",2);
	echo $novastring."<br>";
	
	/*================================================================
	ucfirst() - Converte o primeiro caracter para mai�sculo */
	$string = "cezar";
	echo $string."<br>";
	echo ucfirst($string)."<br>";
	
	/*================================================================
	ucwords() - Converte o primeiro caracter de todas as palavras para min�sculo */
	$string = "cezar oilson jenzura";
	echo $string."<br>";
	echo ucwords($string)."<br>";
	
	/*================================================================
	strtoupper() - Converte toda a string para mai�scula */
	$string = "cezar oilson jenzura";
	echo $string."<br>";
	echo strtoupper($string)."<br>";
	
	/*================================================================
	strtolower() - Converte todos os caracteres para min�sculos*/
	$string = "CEZAR OILSON JENZURA";
	echo $string."<br>";
	echo strtolower($string)."<br>";
	
	/*================================================================
	explode() - transforma a string em um vetor (array) */
	$string = "Estou aprendendo explode";
	$recebestring = explode(" ",$string); //" " - Crit�rio de separa��o foi o espa�o
	echo $string."<br>";
	echo $recebestring."<br>"; //Mostra array pois n�o � mais uma string
	echo $recebestring[0]."<br>"; //Posi��o 0 "Estou"
	echo $recebestring[1]."<br>"; //Posi��o 1 "aprendendo"
	echo $recebestring[2]."<br>"; //Posi��o 2 "explode"
	
	echo count($recebestring)."<br>";	
	
	/*================================================================
	implode() - transforma um array em uma string */
	$bolacha = array("Maizena","Salgada","Recheada");
	echo $bolacha."<br>";
	$bolacha = implode($bolacha);
	echo $bolacha."<br>";
	
	/*================================================================
	min() - mostra o menor valor de um array */
	$numero = array(1,2,3,4,5,6,7);
	echo $numero."<br>";
	echo min($numero);
	echo "<br><br>";
	
	/*max() - mostra o maior valor de um array */
	$numero = array(1,2,3,4,5,6,7);
	echo $numero."<br>";
	echo max($numero);
	echo "<br><br>";
	
	/*================================================================
	array_sum() - mostra a soma dos valores de um array */
	$numero = array(1,2,3,4,5,6,7);
	echo $numero."<br>";
	echo array_sum($numero)."<br>";
	echo count($numero)."<br>"; //N�meros de elementos de um vetor
	echo "<br><br>";
	
	/*================================================================
	floor() - arredonda o n�mero para baixo */
	echo floor(5.0)."<br>";
	echo floor(5.1)."<br>";
	echo floor(5.2)."<br>";
	echo floor(5.3)."<br>";
	echo floor(5.4)."<br>";
	echo floor(5.5)."<br>";
	echo floor(5.6)."<br>";
	echo "<br><br>";
	
	/*================================================================
	ceil() - arredonda o n�mero para cima */
	echo ceil(5.0)."<br>";
	echo ceil(5.1)."<br>";
	echo ceil(5.2)."<br>";
	echo ceil(5.3)."<br>";
	echo ceil(5.4)."<br>";
	echo ceil(5.5)."<br>";
	echo ceil(5.6)."<br>";
	echo "<br><br>";
	
	/*================================================================
	number_format() - Formata um n�mero desejado */
	$numero = 125478965.328;
	echo ($numero)."<br>";
	echo number_format($numero,2)."<br>";
	echo number_format($numero,3)."<br>";
	echo number_format($numero,2,',','.')."<br>";
	echo "<br><br>";
	
	/*================================================================
	round() - arredonda um n�mero desejado */
	echo round(3.4)."<br>";
	echo round(3.5)."<br>";
	echo "<br><br>";
?>