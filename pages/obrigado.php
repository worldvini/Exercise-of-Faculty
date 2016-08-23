<!DOCTYPE html>
<?php 
	$nome = $_GET['nome'];
	$email =  $_GET['email'];
	$telefone = $_GET['telefone'];
	$recado = $_GET['recado'];
 ?>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="recado">
	 	<p>
	 		<?php 
	 		echo "Olá $nome , sua mensagem foi enviada com sucesso!"; 		
	 		 ?>
	 	</p>
	 	<p>
	 		<?php 
	 		echo "Entraremos em contato no seu email: $email ou telefone: $telefone ."; 		
	 		 ?>
	 	</p>
	 	<p>Obrigado!</p>
	 	
	</div>

</body>
</html>








