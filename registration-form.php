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
          echo 'Error in reCAPTCHA: '. ucfirst($captcha[0]);
        }
        else
        {

            $mail = new PHPMailer;

          if (!empty($_POST)) {

          if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){

           $allowed = array("pdf","PDF","doc", "docx");
           $filename = $_FILES["image"]["name"];
           $filetype = $_FILES["image"]["type"];
           $filesize = $_FILES["image"]["size"];
           // Verify file extension
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           //$extension = end(explode(".", $_FILES["file"]["image"]));
                     // print_r($extension);die;

           if(array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
           // Verify file size - 5MB maximum
           $maxsize = 5 * 1024 * 1024;
           if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
           // Verify MYME type of the file

           if(in_array($ext, $allowed)){
               // Check whether file exists before uploading it
               if(file_exists("uploads/" . $filename)){
                  // echo $filename . " is already exists.";
               } else{
                   move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $filename);
                  // echo "Your file was uploaded successfully.";
               }
           } else{
               //echo "Error: There was a problem uploading your file. Please try again.";
           }
       } else{
           //echo "Error: " . $_FILES["image"]["error"];
       }
      $fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$interestedpositions = $_POST['interestedpositions'];
			$message = $_POST['message'];
      $folder="uploads/";
            $attach_file = $folder."".$filename; 
            $subject = 'Candidate Form Enquiry - TalentTech.com'; 
            $email = 'admin@talent-tech.co.uk';
            $mail->setFrom($email , $clientfname);
            $mail->addAddress('sathyapriya.istrides@gmail.com');     // Add a recipient
            //$mail->addAddress('chellappan.istrides@gmail.com','Information');               // Name is optional
            //$mail->addReplyTo('info@raamiinfotech.com', 'Information');
            //$mail->addCC('info@raamiinfotech.com');
            //$mail->addBCC('r.456@gmail.com');
            $mail->addAttachment($attach_file);         // Add attachments
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
					   <h3 style="text-align:center;"><u>Candidate Registration Form</u></h3> 
					    
                       <table style="padding: 0px 0px 20px 0px;">
					   <tbody>
					     <tr>
						   <th style="text-align:left;">FIRST NAME</th>
						   <th>:</th>
						   <td>'.$fname.'</td>
						 </tr>
						 <tr>
						   <th style="text-align:left;">LAST NAME</th>
						   <th>:</th>
						   <td>'.$lname.'</td>
						 </tr>
						
						 <tr>
						   <th style="text-align:left;"> EMAIL</th>
						   <th>:</th>
						   <td>'.$email.'</td>
						 </tr>
						 <tr>
						   <th style="text-align:left;">INTERESTED POSITIONS</th>
						   <th>:</th>
						   <td>'.$interestedpositions.'</td>
						 </tr>
						 <tr>
						   <th style="text-align:left;">RELEVANT EXPERIENCE</th>
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
                        echo "Info: Email Not Send." ;      
                      } else {
                         echo "success";
                      }
             
            }
}die;
?>
 
 























