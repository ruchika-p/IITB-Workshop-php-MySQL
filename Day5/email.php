<?php

if($_POST['submit'])
{
	$name=$_POST['name'];

	$email=$_POST['email'];
	$useremail=$_POST['useremail'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	if ($email&&$message)
	{
		$name=$name;
		$to=$email;
		$subject=$subject;
		$headers="From: $useremail ";
		$body=$message;
		mail($to, $subject, $body,$name,$headers);
		echo "Mail sent successfully";
	}
	if(mail($to, $subject, $body,$name , $headers))
	{
$user=$useremail;
$usersubject="Feedback form";
$adminemail=$email;
$userheaders="From: $adminemail ";
$usermessage="Thankyou for feedback";

mail($user,$usersubject,$usermessage,$name,$userheaders);
		echo "<br>thankyou for mail";
	}
	else
		die("You must enter name and message");

}
?>


