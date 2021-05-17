<?php
$msg="";
if(isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
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
    
    $alert = '';

    if($mail->send()){
        echo '<script> alert("Your message was sent someone from our team will contact you as soon as possible")</script>';
				echo '<script> window.location.href ="contact.php" </script>';
		}
                    else {
											echo '<script> alert("There was an error,please try again")</script>';s
											echo'<script> window.location.href = "contact.php"</script>';
										}

	
	}

?>
