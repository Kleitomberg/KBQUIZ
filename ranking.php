	<!DOCTYPE html>
<html>
  <head>
    <title>KBQUIZ - RESULTADO</title>
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
		<div id="RESULT">
				  <h2 id="h3">RESULTADO </h2>
				  
				 
<?php
echo "<center>";

	//chamafuncao
	/*	include 'funcConecBanc.php';
		funcConecBanc();
*/
$servername= "localhost";
$username= "root";
$password= "";

// Cria a conexão
$conn= new mysqli($servername, $username, $password);
// Checa se tá tudo ok!
if($conn->connect_error) {
	die("Conexaofalhou! " . $conn->connect_error);
}



$sql= "SELECT * FROM kbquiz.ranking order by acertos ";
$result= $conn->query($sql);
if($result->num_rows> 0) {
	
	echo "<table id='customers'>
	  <tr>
		<th>Posicao</th>
		<th>Percentual</th>
		<th>Email</th>
		<th>Data</th>
	  </tr>";
	$contador =0;
	while($row= $result->fetch_assoc()) {
		$coluna1 = $row["email"];
		$coluna2 = $row["acertos"];
		$coluna3 = $row["erros"];
		$coluna4 = $row["data"];
		$calculo = $coluna2 * 100 / 5;
		
		$contador++;
		if($contador ==6){
			break;
		}
		echo"<tr>
			<td>$contador</td>
			<td>$calculo%</td> 
			<td>$coluna1</td> 
			<td>$coluna4</td>
		</tr>";
	}
	
	echo "</table>";
}
$conn->close();
echo "</center>";
?>
 

  </div>
				  
				  <img class="imgranking2" src=" a.gif">
				  <img class="imgranking" src="ranking.png">
				

				<img class="imgranking1" src="med.png">			 
				
				</section>
<!--RODAPÉ-->
				  <footer class="roda">
				 <?php include 'roda.php'; ?> 
				  </footer>