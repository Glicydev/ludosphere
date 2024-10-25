<?php
require_once './util/elements.php';
require_once './util/util.php';

$errors = [
    "name" => "",
    "email" => "",
    "message" => ""
];
$confirmationMessage = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    if (empty($name)) {
        $errors["name"] = "Your name is invalid";
        $name = "";
        $confirmationMessage = "error";
    } else if (strlen($name) < 2) {
        $errors["name"] = "Your name must be at least 2 characters";
        $name = "";
        $confirmationMessage = "error";
    }
    if (empty($email)) {
        $errors["email"] = "Your email is invalid";
        $email = "";
    }
        $confirmationMessage = "error";
        if (empty($message)) {
        $errors["message"] = "Your email is invalid";
        $message = "";
        $confirmationMessage = "error";
    } else if (strlen($message) > 1000) {
        $errors["message"] = "Your message must be at maximum 1000 characters";
        $confirmationMessage = "error";
    }
    if (empty($errors)) {
        $mailsent = ContactSendMail($email, $message, $name);
        if (!$mailsent)
            $confirmationMessage = "An error has occured while sending e-mail, try later";
        else
            $confirmationMessage = "Thank you for your message !";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="./js/script.js" defer></script>
    <script src="./js/contact.js" defer></script>
    <link rel="shortcut icon" href="https://cdn.ludosphere.ch/img/logo.png" type="image/png" />
</head>

<body>
    <?= placeBase() ?>
    <main>
        <div class="confirmation">
            <?= $confirmationMessage ? $confirmationMessage : "" ?>
        </div>
        <form method="POST">
            <h1>Contact me</h1>
            <div class="inputGrp">
                <label for="name">Name * <span><?= $errors["name"] ?></span></label>
                <input type="text" name="name" value="<?= isset($name) ? $name : "" ?>">
            </div>
            <div class="inputGrp">
                <label for="email">Email * <span><?= $errors["email"] ?></span></label>
                <input type="email" name="email" value="<?= isset($email) ? $email : "" ?>">
            </div>
            <div class="messageGrp">
                <label for="message">Message * <span><?= $errors["message"] ?></span></label>
                <textarea type="text" name="message"><?= isset($message) ? $message : "" ?></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>