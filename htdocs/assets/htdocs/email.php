

<?php
if(isset($_POST['submit'])){
	$to = "pathanseema211@gmail.com"; // Your email address
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['date'];
    $message = $_POST['time'];
    $message = $_POST['people'];
    $message = $_POST['message'];
	$subject = "Contact Form Details";
	$headers = "From:" . $smtp;
	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}
?>