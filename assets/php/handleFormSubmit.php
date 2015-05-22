<?php

if(isset($_POST['c_name'])){
    
    $res['sendstatus'] = 1;
    $res['message'] = 'Form Submission Succesful';
    echo json_encode($res);

    $to = "cheungjason@berkeley.edu"; // this is your Email address
    $from = $_POST['c_email']; // this is the sender's Email address
    $name = $_POST['c_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['c_message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['c_message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}

?>