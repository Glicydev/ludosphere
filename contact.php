<?php
require_once './elements.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="./js/script.js" defer></script>
    <script src="./js/contact.js" defer></script>
    </head>

<body>
    <?= placeBase() ?>
    <main>
        <form method="POST">
            <h1>Contact me</h1>
            <div class="inputGrp">
                <label for="name">Name *</label>
                <input type="text" name="name">
            </div>
            <div class="inputGrp">
                <label for="email">Email *</label>
                <input type="email" name="name">
            </div>
            <div class="messageGrp">
                <label for="message">Message *</label>
                <textarea type="text" name="message"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>