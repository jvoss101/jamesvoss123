if (isset($_POST['submit'])) {
    $name = $_Post['name'];
    $subject = $_Post['subject'];
    $mailFrom = $_Post['mail'];
    $message = $_Post['message'];

    $mailTo = "James@jamesvoss101.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have received an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactform.php?mailsend");
}
