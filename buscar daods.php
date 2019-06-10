	<?php
		$_eemail = $_POST["email"];
		$_ssenha = $_POST["senha"];
		
		
		// include 'funcConecBanc.php';
		//funcConecBanc(); 
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kbquiz";
		
		
		
		
		// Cria conexão
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		
		
		
		$sql = "SELECT * FROM kbquiz.cadastro where email = '$_eemail' and senha = '$_ssenha'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			
			header('Location: TELA 0 - KBQUIZ.php');
		}else{
			header ('Location: TELA 1 - LOGIN_2.php');
		}
		$conn->close();
	
	

		
	?>
	
	