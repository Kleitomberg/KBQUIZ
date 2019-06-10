<?php  
 
 function conecBanc(){
 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kbquiz";
		
		
			// Cria a conexão
	$conn= new mysqli($servername, $username, $password);
	// Checa se tá tudo ok!
	if($conn->connect_error) {
		die("Conexaofalhou! " . $conn->connect_error);
}
 
 }
 

?>