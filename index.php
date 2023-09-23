<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Our staff</a></li>
            <li><a href="#">Sevices</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </nav>
    <div id="div"></div>
    <form action="backend.php" method="post">
        <h2>Contact us</h2>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">Submit</button>

        <?php
        // if (true) {
        //     print("Correct");
        // }
        // else {
        //     header('index.php');
        // }

        ?>
    </form>
    
</body>
</html>