<!DOCTYPE html>
<?php include 'contactform.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form </title>
    <link rel="stylesheet" href="/css/master.css">
</head>

<body>
    <main>

        <p>Send Mail</p>
        <form class="contact-form" action="index.html" method="post">

            <input type="text " name="name" placeholder="Name">
            <input type="text " name="mail" placeholder="email">
            <input type="text " name="subject" placeholder="subject">
            <textarea name="message" placeholder "message"></textarea>

            <button type="submit" name="submit">Send Mail</button>
        </form>

    </main>
</body>

</html>