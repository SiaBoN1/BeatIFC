<?php

	if (isset($_POST['submit'])) {
		$nome = $_POST['name'];
		$email = $_POST['email'];
		$assunto = $_POST['subject'];
		$msg = $_POST['message'];

		$mailTo = "beat.sombrio.ifc@gmail.com";
		$headers = "De: Beat IFC"." - ".$email;
		$txt = "Uma nova mensagem de ".$nome.".\n\n".$msg;

		email($mailTo, $assunto, $txt, $headers);
		header("Location: index.php?mailsent");	
	}

?>