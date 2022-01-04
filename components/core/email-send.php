<?php

 //create an instance of php mailer
            $mail = new PHPMailer(); 
        
            // enable SMTP
            //$mail->isSMTP(); 
            $mail->SMTPDebug =2;
        
            // set Host
            $mail->Host = "smtp.gmail.com";
            // set type of protection we can also use TLS
            $mail->SMTPSecure = "ssl";
            // set port or 587 if TLS
            $mail->Port = 465; 
             //set athentication to true
            $mail->SMTPAuth = true;
            //set login detail for gmail account username
            $mail->Username = 'support@usarmedmilitaryforces.us'; 
            //set login detail for gmail account password
            $mail->Password = 'Usaarmy@12'; 
        
            //set who is sending an email 'email address'. 'name'
            $mail->setFrom("support@usarmedmilitaryforces.us", "Usarmedmilitaryforces");
            //set where the mail is been send to
            $mail->addAddress("$emailID"); 
            //set subject
            
            $mail->Subject = "$subject"; 
            //set HTML true
            $mail->isHTML(true);  
        
            //set body
            $mail->Body = "$body"; 
        
            //send an email 
           $mail->send();

?>