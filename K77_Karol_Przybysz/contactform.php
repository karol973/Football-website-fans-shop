<?php 
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailForm = $_POST['mail'];
	$message = $_POST['message'];
	$mailTo="przybyszkarol97@gmail.com";
	$headers ="From: ".$mailFrom;
	$txt = "Otrzymałeś wiadomość".$name.".\n\n".$message;
	mail($mailTo,$subject,$txt,$headers);
	header("Location: admin.php?mailsend");
}