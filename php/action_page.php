<?php
if (isset($_POST['Submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mailfrom = $_POST['email'];
    $message = $_POST['subject'];
    $file = $_POST['uploadfile'];
    $mailto = "m.colavita@bell.net";
    $subject = "New email";
    $headers = "From: " . $mailfrom;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;
    mail($mailto, $subject, $txt, $headers);
    header("Location:index.html?mailsend");
}
