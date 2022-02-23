<?php
	if(isset($_POST['bsubmit'])){
		
		$bname=$_POST['bname'];
		$bcompany=$_POST['bcompany'];
		$bdesignation=$_POST['bdesignation'];
		$bmobile=$_POST['bmobile'];
		$bregion=$_POST['bregion'];
		$emailaddress=$_POST['emailaddress'];
		

		
		$to='suhaib.azeez.c.a@gmail.com'; // Receiver Email ID, Replace with your email ID
		// $to='abhinav.borgohain@gmail.com';
		$subject='Become A Sponser';
		$message="Name :".$bname."\n"."Company Name :".$bcompany."\n"."Designation:".$bdesignation."\n"."Mobile:".$bmobile."\n"."Region:".$bregion;
		$headers="From: ".$emailaddress;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>We will contact you shortly!</h1>";
			sleep(3);
			header("Location: ../index.php");
			exit;
// 			echo "<script>
//                   alert('We will contact you to give a quote shortly!');
//                   window.location.href='../index.php';
//                   </script>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>