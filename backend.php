<?php
if (isset($_POST['submit'])) {
    
    if ($_POST['email'] != '') {

        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $username = $_POST['name'];
            $useremail = $_POST['email'];
            $subject = $_POST['subject'];
            $usermessage = $_POST['message'];
    
            $to = "mwangiwahome70@gmail.com";
            $body = "";
    
            $body .= "From: ".$username."\n";
            $body .= "Email: ".$useremail."\n";
            $body .= "Message: ".$usermessage."\n";

            mail($to,$subject,$body);

            $messagesent = true;
        }else{
            $messagesent = false;
            die;
        }
    }

    
}else {
    // die;
    echo"You did not submit the form";
}
?>