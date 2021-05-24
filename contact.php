<?php

    if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $vistior_email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "dean.mahaffey@outlook.com";
    $headers = "From: ".$vistior_email;
    $txt = "You have received an email from ".$name.".\n\n".$message;



    mail($mailTo, $subject, $txt, $headers);

    header("Location: contact.html?mailsend");

    }

    
?>