<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estudo da Frase</title>
        <link rel="stylesheet" href="style_frasedodia.css">   
    </head>
    <body>
		<div id="prin">
			<h1>Estudo da frase</h1><br>
			<form method="POST" action="PHPfrase">
				<p>Digite a frase:</p>
				<input type="text" class="frase" required autofocus pattern="[a-z\s]+$">
				<input type="submit" value="Enviar" class="enviar">
			</form>
		</div>
	</body>
</html>