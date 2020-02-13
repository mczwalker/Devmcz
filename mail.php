<?php
	header('Content-Type: text/html; charset=utf-8');
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])){

	$quebra_linha      = "\n";
	$emailsender 	   = "contato@allyssontoledo.com.br";
	$nomeremetente     = $_POST['nome'];
	$emailremetente    = trim($_POST['email']);
	//$telefone          = $_POST['telefone'];
	$emaildestinatario = "contato@allyssontoledo.com.br";
	$comcopia          = "wandeberg88@gmail.com";
	$comcopiaoculta    = "";
	$assunto           = "Contato Via Site - Allysson Toledo";
	$mensagem          = $_POST['msg'];


	/* Montando a mensagem a ser enviada no corpo do e-mail. */
	$corpo = "<strong>Formulário enviado a partir do site:</strong>\n"."<br>";
	$corpo .= "<strong>Nome:</strong> " . $nomeremetente . "\n"."<br>";
	$corpo .= "<strong>Email:</strong> " . $emailremetente . "\n"."<br>";
	//$corpo .= "<strong>Telefone:</strong> " . $telefone . "\n"."<br>";
	$corpo .= "<strong>Comentários:</strong> " . $mensagem . "\n"."<br>";


		/* Montando o cabeçalho da mensagem */
	$headers = "MIME-Version: 1.1".$quebra_linha;
	$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
	// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
	$headers .= "From: ".$emailsender.$quebra_linha;
	$headers .= "Return-Path: " . $emailsender . $quebra_linha;
	// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
	// Se não houver um valor, o item não deverá ser especificado.
	if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
	if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
	$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
	// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
	 
	/* Enviando a mensagem */
	$status = mail($emaildestinatario, $assunto, $corpo, $headers, "-r". $emailsender);
	if ($status) {
	  echo "<script> alert('Obrigado pelo seu contato, retornaremos em breve!'); window.location='index.php'</script>";
	  
	//mensagem de form enviado com sucesso.

	} else {
	  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
	  
	//mensagem de erro no envio. 

	}
}
?>