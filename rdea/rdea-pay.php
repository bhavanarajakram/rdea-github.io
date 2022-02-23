<?php
 //ini_set('display_errors', '1');
  session_start();
  $_SESSION['designation'] = $_POST['designation'];
  $_SESSION['organisation'] = $_POST['organisation'];
//   $_SESSION['address'] = $_POST['address'];
  $_SESSION['telephone'] = $_POST['telephone'];
  $_SESSION['gstin'] = $_POST['gstin'];

  $t="";
  $cat1="";
  $cat2="";
  $cat3="";
  $cat4="";
  $cat5="";
  $cat6="";
  $email_1="nitika@summentorpro.com, suhaib.azeez.c.a@gmail.com";
  // $email_1="abhinav.borgohain.com, abhinav.borg@gmail.com";
  //print_r($_SESSION);
  $myemail= $_POST['email'];
  
  if(isset($_POST['awdcateg'])){
            $t=implode(',', $_POST['awdcateg']);
         //  print_r($t);
         // $s = "INSERT INTO `payment1`(awdcateg)values('.$t.')"; 
         //  echo $s; 
             
  }
  
  
  if(isset($_POST['awdcateg1'])){
            $cat1=implode(',', $_POST['awdcateg1']);
          // print_r($cat1);
        //   $s = "INSERT INTO `payment1`(awdcateg)values('.$cat1.')"; 
         //  echo $s; 
             
  }
  
  
   if(isset($_POST['awdcateg2'])){
            $cat2=implode(',', $_POST['awdcateg2']);
          //  print_r($cat2);
         // $s = "INSERT INTO `payment1`(awdcateg)values('.$cat2.')"; 
         // echo $s; 
             
  }
  
  if(isset($_POST['awdcateg3'])){
            $cat3=implode(',', $_POST['awdcateg3']);
          // print_r($cat3);
        //  $s = "INSERT INTO `payment1`(awdcateg)values('.$cat3.')"; 
         //  echo $s; 
             
  }
  
   if(isset($_POST['awdcateg4'])){
            $cat4=implode(',', $_POST['awdcateg4']);
           // print_r($cat4);
          // $s = "INSERT INTO `payment1`(awdcateg)values('.$cat4.')"; 
          // echo $s; 
             
  }
  
   if(isset($_POST['awdcateg5'])){
            $cat5=implode(',', $_POST['awdcateg5']);
          //  print_r($cat5);
           //$s = "INSERT INTO `payment1`(awdcateg)values('.$cat5.')"; 
           //echo $s; 
             
  }
  
  if(isset($_POST["awdcateg6"])){
            $cat6=implode(',', $_POST['awdcateg6']);
          //  print_r($cat6);
          // $s = "INSERT INTO `payment1`(awdcateg)values('.$cat6.')"; 
          // echo $s; 
             
  }
   if(isset($_POST["awdcateg7"])){
            $cat7=implode(',', $_POST['awdcateg7']);
      
             
  }
  if(isset($_POST["awdcateg8"])){
            $cat8=implode(',', $_POST['awdcateg8']);
          
  }
  if(isset($_POST["awdcateg9"])){
            $cat9=implode(',', $_POST['awdcateg9']);
          
  }
  if(isset($_POST["awdcateg10"])){
            $cat10=implode(',', $_POST['awdcateg10']);
          
  }
  if(isset($_POST["awdcateg11"])){
            $cat11=implode(',', $_POST['awdcateg11']);
          
  }
  if(isset($_POST["awdcateg12"])){
            $cat12=implode(',', $_POST['awdcateg12']);
          
  }
  
?>

<?PHP
 /* if($_POST && "all required variables are present") {
  

    
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

   
  }*/
?>

<?php 

if(isset($_POST['pay']) && ($_POST['amount'])!=0){
  require 'mail/class.phpmailer.php'; 
  require 'mail/PHPMailerAutoload.php';
 $mail = new PHPMailer;
 
 $mail->Host = 'smtp.gmail.com'; //SMTP
  
 $mail->Port='465';
  
 $mail->SMTPAuth='true';
  
 $mail->SMTPSecure='tls';
 $mail->Username='suhaib.azeez.c.a@gmail.com';
 $mail->Password='madeithappenon27';
 $mail->AddCC =($email_1);
 $mail->addAddress('suhaib.azeez.c.a@gmail.com');
 // $mail->addAddress('abhi.borg@gmail.com');
 $mail->addReplyTo($_POST['email'], $_POST['buyer_name']);
 $mail->isHTML(true);
 $mail->Subject = 'RURAL DEVELOPMENT EXCELLENCE AWARDS 2021 Registration';
 $mail->Body = "<strong>Name : </strong> " .$_POST['title'].".".$_POST['buyer_name']. "<br>
 <strong>Phone : </strong>" .$_POST['phone']. "<br>
 <strong>Region : </strong>" .$_POST['region']. "<br>
 <strong>Email : </strong>" .$_POST['email']. "<br>
 <strong>Amount: </strong>Rs." .$_POST['amount']. "<br>
 <strong>Purpose : </strong>" .$_POST['purpose']. "<br>
 <strong>Designation : </strong>" .$_POST['designation']. "<br>
 <strong>Type : </strong>"  .$_POST['organisation'].  "<br>
 <strong>Name of organisation : </strong>"  .$_POST['name_organisation'].  "<br>
 <strong>GSTIN : </strong>"  .$_POST['gstin']. "<br>
 <strong>Address : </strong>"  .$_POST['address']. "<br>
 <strong>Area of Business : </strong>"  .$_POST['purpose']. "<br>
 <strong>Best Retail Company of the Year : </strong>" .$t.  "<br>
 <strong>Best MSME Manufacturing Company of the Year : </strong>" .$cat1. "<br>
 <strong>Best MSME Lender & Banking Company of the Year : </strong>" .$cat2. "<br>
 <strong>Best MSME Construction Company of the Year : </strong>" .$cat3.
 "<br><strong>Best Transport, Warehousing & Logistics Company of the Year : </strong>" .$cat4. "<br>
 <strong>Best Pharmaceutical Company of the Year : </strong>" .$cat5. "<br>
 <strong>Best Healthcare Company of the Year : </strong>" .$cat6. "<br>
 <strong>Best Automobile Company of the Year : </strong>" .$cat7. 
 "<br><strong>   Best Hospitality & Travel Company of the Year : </strong>" .$cat8."<br>
 <strong>  Best Textile Company of the Year : </strong>" .$cat9."<br>
 <strong>  Best Agro Company of the Year : </strong>" .$cat10. "<br>
 <strong>  Food & Beverage Company of the Year : </strong>" .$cat11. "<br>
 <strong>  Special Awards : </strong>" .$cat12.  "<br>";
  
   if(!$mail->send()) {
  
   echo "Error while sending mail";
   
  }
    
    
   else {
   
    // echo "Message has been sent successfully";
 
   }
   
   
   // mail to customers
    $my_email2 = $_POST['email'];
    $message2 = "Thank you for the Nominations!
    
    
    
    ";
    $subject2 = "RURAL DEVELOPMENT EXCELLENCE AWARDS 2021 Registration";
    $headers2 = "nitika@summentorpro.com" ;
    //$headers2 = "borgohain.abhi@gmail.com" ;
    $headers2 .= "MIME-Version: 1.0" . "\r\n";
    $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        //echo "<br><br>" . $headers2;
        
    mail($my_email2,$subject2,$message2,$headers2);    
    
}

?>

<?php

    $con = mysqli_connect("localhost","instamojo","Pass123#","instamojo");



        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          } 
                
          else {
              
              
             //echo "Host connected successfully";
          }
          
          
         $ch2 =mysqli_select_db($con,"instamojo");
    
        if($ch2) {
            
           // echo "Database Connected Successfully";
       }
        
       else {
            
          echo "Error ";
        }
          
    
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array("X-Api-Key:341f8521ccce355c3e1efde45368dc81",
                              "X-Auth-Token:d8dabeb42b3b867f89086474bb1a23a0"));
            // curl_setopt($ch, CURLOPT_HTTPHEADER,
            //             array("X-Api-Key:test_9661c1525f2d582ae045b51e6fc",
            //                   "X-Auth-Token:test_26de58203b7ba84de9506166f63"));
            $payload = Array(
                'purpose' => $_REQUEST['purpose'],
                'amount' => $_REQUEST['amount'],
                'phone' => $_REQUEST['phone'],
                'buyer_name' => $_REQUEST['buyer_name'],
                'redirect_url' => 'https://rdea.in/rateus.php',
                'send_email' => true,
                'webhook' => 'https://rdea.in/rateus.php',
                'send_sms' => true,
                'email' => $_REQUEST['email'],
                'allow_repeated_payments' => false
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch); 

      //echo $response;
       

       $json = json_decode($response,true);
        
       var_dump(is_array( $json));
          
            if($json['success']==true)  {
                
               // echo "success";
            
                $data= $json['payment_request'];
                    
              $sql="INSERT INTO `rdeaawards` ( buyer_name , designation , type, organisation, phone , region , amount , email, org_type,gstin,address,purpose ) VALUES ('".$data['buyer_name']."','".$_POST['designation']."' , '".$_POST['organisation']."' ,'".$_POST['name_organisation']."', '".$data['phone']."' , '".$_POST['region']."' , '".$data['amount']."' , '".$data['email']."' , '".$_POST['org_type']."' , '".$_POST['gstin']."' , '".addslashes($_POST['address'])."' , '".$data['purpose']."')";
                //echo $sql;
              
              
              if ($con->query($sql) === TRUE) {
            // echo "New record created successfully";
                
             echo "<script>location='".$data['longurl']."'</script>" ;
            
            // echo  "<h1>Thankyou for Registering! Our Team will get back to you soon!</h1>" ;
             
             
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }
                                 
             
            }
             
            else {
                
                echo "failed to create order";
                
            }

 $con->close(); 
 
 // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 


?>

