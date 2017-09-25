<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "victor.gruescu@yahoo.ro,gdv.cleaning.solution@outlook.com"; // Replace with client email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = "gdv.cleaning.solution@outlook.com" ;
$phone = $_POST['phone'];
$serviciu = $_POST['serviciu'];
$headers = 'From: gdv.cleaning.solution@outlook.com' . "\r\n" .
'Reply-To: gdv.cleaning.solution@outlook.com';

// set up email 
$msg = "Cerere de oferta de la gdv-cleaning.ro \nNume: " . $name . "\nTelefon: " . $phone . "\nCerere de oferta pentru: " . $serviciu . "\nEmail destinatie: " . $myemail;
$msg = wordwrap($msg,70);

if(mail($myemail,"Mesaj de pe site gdv-cleaning.ro",$msg,$headers)){
    // header( 'Location: index.html?mes=Mesajul a fost trimis cu succes! Va multumim.&alert=success' );
    echo "<h1><strong>Mesaj trimis cu success! Multumim.</strong> <a href='index.html'>Apasati aici pentru a continua</a>.
    </h1>";
} else {
    header( 'Location: index.html?mes=Eroare la trimiterea mesajului, va rugam reveniti.&alert=warning' );
};


?>
