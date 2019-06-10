<!DOCTYPE html>
<html>
  <head>
    <title>KBQUIZ</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="CSS TELA 1 - LOGIN.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Teste agora seus conhecimentos, KBQUIZ, seu jogo de perguntas e respostas " >
		<meta name="keyword" content="QUIZ,GAME, PERGUNTAS,RESPOSTAS">
		<meta name="author" content="Kleitombeg">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css﻿">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="icon" href="icon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
	  
	  <!--Cabeçalho-->
	 <header id="cabe">
	   <?php include 'cabecs.php'; ?>
		</header>
		
		<section class="corpo">
			 <fieldset class="borders">
		<div id="question">
		
<p class="perguntas"> 5° Qual time grande brasileiro já foi rebaixado para a Série C?</p>

</div>
<div id="resposta">
<form action="ranking.php" method="post" id="alternativas">
A)
<input type="radio" class="caixinha" name="op" value="Palmeiras"> Palmeiras</br>
B)
<input type="radio"class="caixinha" name="op" value="Santos"> Santos </br>
C)
<input type="radio"class="caixinha" name="op" value="Fluminense"> Fluminense </br>
D)
<input type="radio" class="caixinha" name="op" value="Flamengo"> Flamengo
 </br>
 
<BUTTON class="btn sair"  > 
<a href="TELA 6 - PERGUNTA 4.php"> Voltar</a>
</BUTTON>

<BUTTON class="btn NovoQuiz1" type="submit"> 
<a href="ranking.php"> Conferir resultado</a>
</BUTTON>
</form>
</div>
		
</fieldset>
		
		</section >
		<!--RODAPÉ-->
			  <footer class="roda">
		<?php include 'roda_2.php'; ?>
			  </footer>
		  </form>
		
		
		</BODY>
		</html>
		
		
		
		
		