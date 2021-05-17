<?php
if (strlen(trim($_POST['name']))!=0 || strlen(trim($_POST['email']))!=0 || strlen(trim($_POST['phone']))!=0 || strlen(trim($_POST['message']))!=0)
	{
	$name=$_POST['name']; 

	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	include('PHPMailer/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="biznesi.interneti@gmail.com";
	$mail->Password="biznesi1";
	$mail->SetFrom("biznesi.interneti@gmail.com");
	$mail->addAddress("biznesi.interneti@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$message;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    
  

   	 if($mail->send()){
			try{
				$filename = 'messages.txt';
				if(!file_exists($filename)){
					throw new Exception('File not found');
				}
				$myfile = fopen($filename, "w");
				$txt = "From ".$email."\n"."Message: ".$message."\n"."================="."\n";
				fwrite($myfile, $txt);
				fclose($myfile);
			}
			catch(Exception $e){
				echo "Messages failed to save: ".$e;
			}
        	echo '<script> alert("Your message was sent someone from our team will contact you as soon as possible")</script>';
					echo '<script> window.location.href ="contact.php" </script>';
			}
                   		 else  {
													echo '<script> alert("There was an error,please try again")</script>';
													echo'<script> window.location.href = "contact.php"</script>';
											}

	
	}

	
	else{
		echo '<script> alert("Fields marked with * icon are required")</script>';
		echo'<script> window.location.href = "contact.php"</script>';
	}

?>
