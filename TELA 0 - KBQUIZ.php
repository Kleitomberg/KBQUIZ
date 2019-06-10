<!DOCTYPE html>
<html>
  <head>
    <title>KBQUIZ - comece agora a jogar</title>
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
		
		<!-- Conteudo/Login-->
		<section class="corpo">
		<fieldset class="fildset">
		<legend> QUIZZES DISPONIVEIS</legend>
	<div id="quizes">
			  
			 <a href="TELA 3 - PERGUNTA 1.php" alt="QUIZ SOCCER"> <img class="img" src="quiz_posicoesdefutebol.png"></a>
			  <a href="TELA 14 - PERGUNTA 1.php" alt="QUIZ NBA"> <img class="img1" src="nba50-lead.jpg"></a>
			  </div>
			  
			  <div id="btns">
<form>
<!--Cancelar-->

<!--CRIAR-->

<BUTTON class="btn NovoQuiz" > 
<a href="cadastrarP.php"> Criar Um Novo Quiz</a>
</BUTTON>

</form>
</div>
			  
			  
			  
			  
			  
			</fieldset>  
			</section>
			
			
			
			  <!--RODAPÉ-->
			  <footer class="roda">
			 <?php include 'roda.php'; ?>
			 </center> 
			  </footer>
		  
	
	   
  
  </body>
</html>