<?php
session_start();
// $target_dir = "uploads/";
$target_file = basename($_FILES["file"]["name"]);
$attachment_file = basename($_FILES["att"]["name"]);
// $uploadOk = 1;


// if(isset($_POST["submit"])) {
    // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // if($check !== false) {
    //   echo "File is an image - " . $check["mime"] . ".";
    //   $uploadOk = 1;
    // } else {
    //   echo "File is not an image.";
    //   $uploadOk = 0;
    // }
//   }


  
  // Check if file already exists
//   if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
//   }
  
  // Check file size
//   if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
//   }
  
  // Allow certain file formats
//   if($imageFileType != "csv" ) {
//     echo "Sorry, only csv file is allowed.";
//     $uploadOk = 0;
//   }
  
  // Check if $uploadOk is set to 0 by an error
//   if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//   // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
//   }




///require_once(__DIR__."/vendor/autoload.php");
//require_once(__DIR__."/sendgrid-php/vendor/composer/autoload.php");
//require("<PATH TO>/sendgrid-php.php");
require 'vendor/autoload.php';

$API_KEY = "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";
if(isset($_POST['sendemail']))
{
    //$name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];
    $sender = $_POST['sender'];
    $ach = $_FILES['att']['tmp_name'];
    $cc = $_POST['cc'];  
   // $bcc = $_POST['bcc'];
    
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("$sender");
    $email->setSubject("$subject");
    $filePath= $_FILES['file']['tmp_name'];
    // $filePath= __DIR__.'\mailed.csv';
    $senderArray = Array();
    $myfile = fopen($filePath, "r") or die("Unable to open file!");
    if(empty($myfile) === false) {
        while(($data = fgetcsv($myfile, 1000, ",")) !== FALSE){
            $senderArray[$data[0]] = $data[0];
        }
        fclose($myfile);
    }
    
    //$email->addTos($senderArray);
    $email->addCc($cc);
    $email->addBccs($senderArray);
    $email->addTo($email_id);

    /* 
        I have commented this attachment code it is giving me some 
        "file not found" error on my system, so uncomment this on yours.
    */

     $file_encoded = base64_encode(file_get_contents("$ach"));
     $email->addAttachment(
        $file_encoded,
        "application/pdf",
        "$ach",
        "attachment"
     );
     $email->addContent( "text/html", $message);
    $sendgrid = new \SendGrid($API_KEY);
  try {
       $response = $sendgrid->send($email);
      //print $response->statusCode() . "\n";
      //print_r($response->headers());
      //print $response->body() . "\n";
      if($response->statusCode())
      {
          $_SESSION['alert'] = '<script> swal("Success!","email sent successfully","success") </script>';
          header('Location: working.php');
      }
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
        $_SESSION['alert'] = '<script> sweetAlert("Oops....","email not sent","error") </script> Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
        header('Location: working.php');
    }
} 

?>