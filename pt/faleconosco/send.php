<?php

	ob_start();
	
	$post = (!empty($_POST)) ? true : false;
	define("WEBMASTER_EMAIL", 'silvia@friendsolution.com.br');
	
	
	$snome 			= (isset($_POST['snome']) && $post)?$_POST['snome']:NULL;
	$semail 		= (isset($_POST['semail']) && $post)?$_POST['semail']:NULL;
	$stelefone 		= (isset($_POST['stelefone']) && $post)?$_POST['stelefone']:NULL;
	$sassunto 		= (isset($_POST['sassunto']) && $post)?$_POST['sassunto']:NULL;
	$smensagem 		= (isset($_POST['smensagem']) && $post)?$_POST['smensagem']:NULL;

	require_once 'phpmailer/class.phpmailer.php';

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
					<title>Cadastro no Site</title>
					</head>
					
					<body style="margin-left:0; margin-bottom:0; margin-right:0; margin-top:0;width:800px; ">
					
					<table width="810" border="0" cellspacing="0" cellpadding="0" style="width:800px; background-color:#F7F7F7; font-family:Arial, Helvetica, sans-serif; font-size:12px; ">
					  <tr>
						<td colspan="3" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;"><img src="http://www.friendsolution.com.br/assets/img/top_email.gif" alt="" width="800" height="90"></td>
					  </tr>
					  <tr>
						<td colspan="3" >&nbsp;	</td>
					  </tr>
					  
					  <tr>
						<td width="15" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td width="80" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Assunto:</td>
						<td width="705" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$sassunto.'</td>
					  </tr>
					  
					  <tr>
						<td width="15" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td width="80" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Nome:</td>
						<td width="705" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$snome.'</td>
					  </tr>
					  
					  <tr>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">E-mail:</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;"><a href="mailto:'.$semail.'">'.$semail.'</a></td>
					  </tr>
					  
					  <tr>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Telefone:</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$stelefone.'</td>
					  </tr>
					  
					  <tr>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Mensagem:</td>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.nl2br($smensagem).'</td>
					  </tr>
					  
					  
					  
					  
					  <tr>
						<td colspan="3" >&nbsp;	</td>
					  </tr>
					  <tr>
						<td colspan="3" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px; border-top:1px solid #666666; ">
						<span style="font-weight:bold; font-size:85%;">VISITE O NOSSO WEBSITE: <a href="http://www.friendsolution.com.br">www.friendsolution.com.br</a></span>
						<br />
						<span style="font-weight:bold; font-style:italic; font-size:85%;">Proteja os recursos naturais, reduzindo custos. Evite o uso da impressora.</span>      
						<br />
						<span style="font-weight:bold; font-style:italic; font-size:85%;"> Before printing, think about the environment.</span>	</td>
					  </tr>
					</table>
				</body>
			</html>';
			$body  = $body;
			
			$mail->AddReplyTo($email,$name);
			$mail->SetFrom(WEBMASTER_EMAIL, 'Friends Solution');
			$mail->AddReplyTo(WEBMASTER_EMAIL,"Friends Solution");
			//$address = "alexandre@tessaroline.com.br";
			$address = "contato@complog.com.br";
			$mail->AddAddress($address, "Friends Solution");
			//$mail->AddCC('tessaroline@yahoo.com.br', 'Alexandre');
			$mail->AddBCC('contato@complog.com.br', 'Webmaster');
			
			$mail->Subject  = "Contato Friends Solution";
			$mail->AltBody  = "Por favor, utilize a visualiza��o em HTML!"; // optional, comment out and test
			
			$mail->MsgHTML($body);
			
			if(!$mail->Send()) {
			 // echo "Mailer Error: " . $mail->ErrorInfo;
			}else{
  				header("Location: confirmacao.php?n=".$snome);
			}
	
	



?>