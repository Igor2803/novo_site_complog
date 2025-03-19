<?php session_start();

/////////// Add your own email below //////////////// 

	define("WEBMASTER_EMAIL", 'ney.castilho@sgrlog.com.br');
	//define("WEBMASTER_EMAIL", 'webmaster@sgrlog.com');
	
	error_reporting (E_ALL ^ E_NOTICE);

//////////////////////////////////////////////////////



//////////////////////////////////////////////////////

	$post = (!empty($_POST)) ? true : false;
	
	if($post){

		$name 	  = stripslashes($_POST['snome']);
		$email 	  = trim($_POST['semail']);
		$message  = stripslashes($_POST['smensagem']);
		$phone	  = stripslashes($_POST['stelefone']);
		$assunto   = stripslashes($_POST['sassunto']);
	
		$error = '';
	

	
		if(!$error){
			
			require_once ("phpmailer/class.phpmailer.php");

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
						<title>SGRLOG</title>
					</head>
					
					<body style="margin-left:0; margin-bottom:0; margin-right:0; margin-top:0;width:800px; ">
					
					<table width="810" border="0" cellspacing="0" cellpadding="0" style="width:800px; font-family:Arial, Helvetica, sans-serif; font-size:12px; ">
					  <tr>
						<td colspan="3" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;"><img src="http://www.sgrlog.com.br/assets/img/top_email.gif" alt="" width="800" height="90"></td>
					  </tr>
					  
					  <tr>
						<td width="15" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td width="80" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Assunto:</td>
						<td width="705" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$assunto.'</td>
					  </tr>
					  
					  <tr>
						<td width="15" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td width="80" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Nome:</td>
						<td width="705" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$name.'</td>
					  </tr>
					  
					  <tr>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Telefone:</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.$phone.'</td>
					  </tr>

					  
					  <tr>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">E-mail:</td>
						<td style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;"><a href="mailto:'.$email.'">'.$email.'</a></td>
					  </tr>
					  
					  <tr>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">&nbsp;</td>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;font-weight:bold;">Mensagem:</td>
						<td valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px;">'.nl2br($message).'</td>
					  </tr>
					  
					  <tr>
						<td colspan="3" >&nbsp;	</td>
					  </tr>
					   <tr>
						<td colspan="3" valign="top" style="padding-left:5px; padding-bottom:5px; padding-right:5px; padding-top:5px; border-top:1px solid #666666; ">
						<span style="font-weight:bold; font-size:85%;">Web Site: <a href="http://www.sgrlog.com.br">www.sgrlog.com.br</a></span>
						<br />
						<span style="font-weight:bold; font-style:italic; font-size:85%;">Proteja os recursos naturais, reduzindo custos. Evite o uso da impressora.</span>      
						<br />
						<span style="font-weight:bold; font-style:italic; font-size:85%;"> Before printing, think about the environment.</span>	</td>
					  </tr>
					</table>
					
					
					</body>
				</html>';
			//$body  = eregi_replace("[\]",'',$body);
			
			$mail->SetFrom(WEBMASTER_EMAIL, 'SGRLOG');
			$mail->AddReplyTo(WEBMASTER_EMAIL,"SGRLOG");
			$address = "contato@complog.com.br";
			$mail->AddAddress($address, "SGRLOG");
			//$mail->AddAddress(WEBMASTER_EMAIL, "EBIKE CLINIC");
			//$mail->AddCC('', '');
			$mail->AddBCC('suporteti@complog.', 'CONTATO SGRLOG');
			
			$mail->Subject  = $assunto;
			$mail->AltBody  = "Por favor, utilize a visualiza��o em HTML!"; // optional, comment out and test
			
			$mail->MsgHTML($body);
			
			
			if(!$mail->Send()) {
			  //echo $mail->ErrorInfo;
			  //exit;
			   $_SESSION['msg_error'] = "Mailer Error: " . $mail->ErrorInfo;
			   header("Location: ../faleconosco/?chk=0");
			}else{
			   //echo 'foi';
			   //exit;
			   $_SESSION['msg_success'] = "Seu contato foi enviado com sucesso."; 
			   header("Location: ../faleconosco/?chk=1");
			}

		}else{
			echo '<div class="errormsg">'.$error.'</div>';
		}
	}else{
		
		echo 'erro no envio';
		
	}

?>
