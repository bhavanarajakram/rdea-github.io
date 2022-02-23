<?php
	if(isset($_POST['submit'])){
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$review=$_POST['review'];

		
		$to='suhaib.azeez.c.a@gmail.com'; // Receiver Email ID, Replace with your email ID
 		//$to='abhi.borg@gmail.com';
		$subject='Nomination Review - RDEA 2021';
		$message="Name : ".$name."\n"."Email : ".$email."\n"."Review : "."\n".$review;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){

			echo '<script type="text/javascript">'; 
			echo 'alert("We will get in touch with you shortly!");'; 
			echo 'window.location.href = "../nominate.php";';
			echo '</script>';
		}
		else{
			echo "Something went wrong!";
		}
	}
?>