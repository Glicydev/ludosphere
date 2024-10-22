<?php
require_once './elements.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $errors = [];
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    if (empty($name)) {
        $errors["name"] = "Your name is invalid";
        $name = "";
    } else if (strlen($name) < 2) {
        $errors["name"] = "Your name must be at least 2 characters";
        $name = "";
    }
    if (empty($email)) {
        $errors["email"] = "Your email is invalid";
        $email = "";
    }
    if (empty($message)) {
        $errors["message"] = "Your email is invalid";
        $message = "";
    } else if (strlen($message) < 30) {
        $errors["message"] = "Your message must be st least 30 characters";
        $message = "";
    }
    if (empty($errors)) {
        echo "Message successfuly sent";
    }
}
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
                <input type="text" name="name" value="<?= isset($name) ? $name : "" ?>">
            </div>
            <div class="inputGrp">
                <label for="email">Email *</label>
                <input type="email" name="email" value="<?= isset($email) ? $email : "" ?>">
            </div>
            <div class="messageGrp">
                <label for="message">Message *</label>
                <textarea type="text" name="message"><?= isset($message) ? $message : "" ?></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>