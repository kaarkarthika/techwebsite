<?php
require ('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

 define('GR_URL', 'https://www.google.com/recaptcha/api/siteverify');
 define('GR_SECRET', '6Lf0U74UAAAAAOW2wVO1XCLt1Q5j4k1-M6ZpuoGh');
function validateRecaptcha( $secret, $response, $url = GR_URL ){

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_POST, 1);
  $params = array(
    'secret' => urlencode($secret),
    'response' => urlencode($response),
  );
  curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  $result = json_decode($result);
  return (isset($result->success) && $result->success);
}
        $captcha=$_POST['g-recaptcha-response'];
        if(!validateRecaptcha(GR_SECRET, $captcha, GR_URL))
        {
           echo'Error in reCAPTCHA: '. ucfirst($captcha[0]);
        }
        else
        {

            $mail = new PHPMailer;

            if (!empty($_POST)) {
            $name = $_POST['name'];
            $last_name = $_POST['lastname'];
            $company_name = $_POST['companyname'];
            $phone = $_POST['phone'];
            $email1 = $_POST['email'];  
            $message = $_POST['message'];
            $subject = 'Contact Form Enquiry - TalentTech.com'; 
            $email = 'admin@talent-tech.co.uk';
            $mail->setFrom($email , $name);
            $mail->addAddress('sathyapriya.istrides@gmail.com');     // Add a recipient
            //$mail->addAddress('chellappan.istrides@gmail.com','Information');               // Name is optional
            //$mail->addReplyTo('info@raamiinfotech.com', 'Information');
            //$mail->addCC('info@raamiinfotech.com');
            //$mail->addBCC('r.456@gmail.com');
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = '
			
			<div class="" style="width: 600px;
    margin: 0 auto;
    padding: 0px 0px 5px 0px;
    box-shadow: 0 0 5px #ded9d9;
    margin-bottom: 10px;background-color: whitesmoke;">
			            
					  <div style="width:100%; background-color: #04176c;padding:5px 5px 0px 0px;"> <img src="http://talent-tech.co.uk/images/logo-white.png" width="150" alt="logo"> </div>
					    <div style="width:300px;margin:0 auto;">
					   <h3 style="text-align:center;"><u>Contact Form</u></h3> 
					    
                       <table style="padding: 0px 0px 20px 0px;">
					   <tbody>
					     <tr>
						   <th style="text-align:left;">FIRST NAME</th>
						   <th>:</th>
						   <td>'.$name.'</td>
						 </tr>
						 <tr>
						   <th style="text-align:left;">LAST NAME</th>
						   <th>:</th>
						   <td>'.$last_name.'</td>
						 </tr>
						 <tr>
						   <th style="text-align:left;">COMPANY NAME</th>
						   <th>:</th>
						   <td>'.$company_name.'</td>
						 </tr>
						 
						 <tr>
						   <th style="text-align:left;">PHONE</th>
						   <th>:</th>
						   <td>'.$phone.'</td>
						 </tr>
						
						 <tr>
						   <th style="text-align:left;"> EMAIL</th>
						   <th>:</th>
						   <td>'.$email1.'</td>
						 </tr>
						 
						 <tr>
						   <th style="text-align:left;">HOW CAN WE HELP?</th>
						   <th>:</th>
						   <td>'.$message.' </td>
						 </tr>
						 <tbody>
						 
					   </table>
					   
					   </div>
					   <div style="text-align: left;
    border-top: 1px solid #ddd;font-size:9px;"><p style="padding:0px 0px 0px 20px;">©Copyright 2019 TalentTECH All Rights Reserved</p></div>
                       
 
                       
                        '  ;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                      if(!$mail->send()) {

                            echo"Info: Email Not Send." ; 
                      } else {
                        
                         echo "success";
                      }
             
            }
}die;
?>
 
 
