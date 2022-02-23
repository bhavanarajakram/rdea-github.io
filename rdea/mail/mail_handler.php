<?php
	if(isset($_POST['submit'])){
		$organisation=$_POST['organisation'];
		$name=$_POST['name'];
		$contactno=$_POST['contactno'];
		$location=$_POST['location'];
		$email=$_POST['email'];
		
		$to='suhaib.azeez.c.a@gmail.com'; // Receiver Email ID, Replace with your email ID
        // $to='bhavanarajak8@gmail.com';
		$subject='Get in touch - RURAL DEVELOPMENT EXCELLENCE AWARDS 2021';
		$message="Organisation Name :".$organisation."\n"."Name :".$name."\n"."contactno :".$contactno."\n"."Email:".$email."\n"." location :".$location;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo '<script type="text/javascript">'; 
			echo 'alert("We will get in touch with you shortly!");'; 
			echo 'window.location.href = "../contact.php";';
			echo '</script>';
		}
		else{
			echo 'Something went wrong!';
		}
	}
?>