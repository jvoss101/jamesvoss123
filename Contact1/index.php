<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./contact.html">
</head>
<body>
  
    <div class="hero">
        <div class="content">
            <main class="form">
                <p class="title">Contact Me</p>
                 <form class="contact-form" action="contactform.php" method="post">
                <input class="name" type="text" name="name" placeholder="Full Name">
                <input class="mail" type="text" name="mail" placeholder="Your e-mail">
                <input class="subject" type="text" name="subject" placeholder="subject">
                <textarea class="message" name="message" placeholder="Message"></textarea>
                <button class="button" type="submit" name="submit">SEND E-MAIL</button>
            </form>
            </main>
        </div>
           
       
    </div>
       
</body>
</html>